<?php

namespace App\Http\Controllers\Admin\Zone;
use App\Http\Requests\StoreZoneRequest;
use App\Models\ZoneChicken;
use App\Models\Houses;
use App\Http\Controllers\Controller;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Database\UniqueConstraintViolationException;
use Illuminate\Support\Facades\DB;

class ZoneChickenController extends Controller
{
    public function index()
    {
        $zoneCount = ZoneChicken::count();
        $room_column = 'Kamar';
        $zone_code = 'Kode Zona';
        $zoneChicken = DB::table('houses')
            ->leftJoin('house_zones', 'houses.id', '=', 'house_zones.house_id')
            ->select(
                'house_zones.house_id',
                DB::raw('MAX(house_zones.code) as code'),
                DB::raw('MAX(house_zones.name) as name'),
                DB::raw('COUNT(house_zones.capacity) as total_capacity'),
                DB::raw('COUNT(house_zones.house_id) as total_zones')
            )
            ->whereNotNull('house_zones.code')
            ->groupBy('house_zones.house_id') // Perbaikan di sini
            ->get();


        return view("admin.zones.index", compact("zoneChicken", "zoneCount", "room_column", "zone_code"));
    }

    public function create()
    {
        $houses_id = Houses::orderBy('name')->get(['id', 'name', 'code']);
        $checkZone = ZoneChicken::pluck('house_id')->map(fn($id) => (string) $id)->all();
        return view('admin.zones.create', compact('houses_id', 'checkZone'));
    }

    public function store(StoreZoneRequest $request): RedirectResponse
    {
        $capacity = (int) $request->input('capacity');
        $houseId = $request->input('house_id');
        $now = now();

        // Variabel penanda untuk menghitung jumlah data
        $zonesCreatedCount = 0;
        $zonesSkippedCount = 0;

        // Gunakan DB Transaction untuk efisiensi dan keamanan data
        DB::transaction(function () use ($houseId, $now, $request, $capacity, &$zonesCreatedCount, &$zonesSkippedCount) {

            // 1. Tarik nomor zona (kolom code) yang SUDAH ADA di tabel zone_chickens
            $existingZones = ZoneChicken::where('house_id', $houseId)
                ->pluck('code')
                ->toArray();

            $dataToInsert = [];

            // 2. Lakukan perulangan angka zona berdasarkan kapasitas (misal 1 sampai 100)
            for ($i = 1; $i <= $capacity; $i++) {
                $numbers = (string) $i;

                // Aturan: Jika kode zona sudah terdaftar, LEWATI (jangan ditimpa)
                if (in_array($numbers, $existingZones)) {
                    $zonesSkippedCount++;
                    continue;
                }

                // Aturan: Jika belum ada, masukkan ke antrean bulk insert
                $dataToInsert[] = [
                    'house_id' => $houseId,
                    'code' => $request->input('code') . $numbers,            // Bernomor 1 sampai $capacity
                    'name' => $request->input('name') . $numbers,  // PENGGANTIAN: Dari 'Slot' menjadi 'Zone 1', 'Zone 2', dst.
                    'capacity' => 1,                    // Aturan: Satu zona untuk satu ekor
                    'status' => $request->input('status', 1),
                    'description' => $request->input('description') ?? 'deskripsi belum ditambahkan',
                    'created_at' => $now,
                    'updated_at' => $now,
                ];
                $zonesCreatedCount++;
            }

            // 3. Eksekusi Bulk Insert langsung ke tabel model ZoneChicken
            if (!empty($dataToInsert)) {
                ZoneChicken::insert($dataToInsert);
            }
        });

        // Pesan sukses disesuaikan menggunakan kata Zone/Zona
        return redirect()
            ->route('admin.zones.index')
            ->with('success', "Berhasil memproses zona kandang. Zona baru dibuat: {$zonesCreatedCount}, Dilewati (Sudah ada): {$zonesSkippedCount}");
    }

    public function show($id)
    {
        $count = ZoneChicken::where('house_id', $id)->count();
        $houses = ZoneChicken::select('id', 'house_id', 'code as kode', 'name as nama', 'capacity', 'status', 'description')   // kolom house_zones
            ->with('houses:id,code,name')
            ->where('house_id', $id)->get();
        return view("admin.zones.show", compact("houses", "count"));
    }

      public function changeStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:0,1'
        ]);

        $zone = ZoneChicken::select('id','status') 
        ->findOrFail($id);
        
        $zone->status = $request->status;
        $zone->save();

        return back()->with('success', 'Status zona berhasil diperbarui.');
    }



    public function contiguous(Request $request, $id)
    {
        $house = Houses::select('id', 'code', 'name', 'location')->findOrFail($id);

        $prefix = $request->query('prefix');

        if (! $prefix) {
            $kodePertama = ZoneChicken::where('house_id', $house->id)->orderBy('id')->value('code');

            if (! $kodePertama) {
                return redirect()->route('admin.zones.index')
                    ->with('error', 'Kandang ini belum punya zona. Buat zona dulu.');
            }
            $prefix = rtrim($kodePertama, '0123456789');          // A1 → A
        }

        abort_unless(preg_match('/^[A-Z]{1,5}$/', $prefix), 404);

        $zona = ZoneChicken::where('house_id', $house->id)
            ->where('code', 'regexp', '^' . $prefix . '[0-9]+$')
            ->get(['code', 'status', 'description']);

        abort_if($zona->isEmpty(), 404);

        $nomor = fn ($z) => (int) substr($z->code, strlen($prefix));

        $count             = $zona->count();
        $active            = $zona->where('status', 1)->count();
        $nonactive         = $count - $active;
        $endnumber         = $zona->map($nomor)->max();
        $deskripsiTerakhir = $zona->sortByDesc($nomor)->first()->description;

        return view('admin.zones.contiguous', compact(
            'house', 'prefix', 'count', 'active', 'nonactive', 'endnumber', 'deskripsiTerakhir'
        ));
    }

    public function additionalZone(Request $request, $id)
    {
        $data = $request->validate([
            'prefix'      => ['required', 'regex:/^[A-Z]{1,5}$/'],
            'jumlah'      => ['required', 'integer', 'min:1', 'max:500'],
            'description' => ['nullable', 'string', 'max:255'],
        ], [
            'prefix.regex' => 'Kamar tidak valid.',
            'jumlah.min'   => 'Jumlah minimal 1.',
            'jumlah.max'   => 'Maksimal 500 posisi sekali tambah.',
        ]);

        $prefix      = $data['prefix'];
        $jumlah      = (int) $data['jumlah'];
        $description = $data['description'] ?? null;

        try {
            DB::transaction(function () use ($id, $prefix, $jumlah, $description) {
                $nomor = ZoneChicken::where('house_id', $id)
                    ->where('code', 'regexp', '^' . $prefix . '[0-9]+$')
                    ->lockForUpdate()
                    ->pluck('code')
                    ->map(fn ($c) => (int) substr($c, strlen($prefix)));

                if ($nomor->isEmpty()) {
                    throw ValidationException::withMessages([
                        'prefix' => "Kamar {$prefix} tidak ditemukan di kandang ini.",
                    ]);
                }

                $mulai = $nomor->max() + 1;
                $now   = now();
                $baris = [];

                for ($i = 0; $i < $jumlah; $i++) {
                    $kode = $prefix . ($mulai + $i);
                    $baris[] = [
                        'house_id'    => $id,
                        'code'        => $kode,
                        'name'        => 'Kamar ' . $kode,
                        'status'      => 1,
                        'capacity'    => 1,
                        'description' => $description,
                        'created_at'  => $now,
                        'updated_at'  => $now,
                    ];
                }

                $bentrok = ZoneChicken::where('house_id', $id)
                    ->whereIn('code', array_column($baris, 'code'))
                    ->pluck('code');

                if ($bentrok->isNotEmpty()) {
                    throw ValidationException::withMessages([
                        'jumlah' => 'Kode sudah ada: ' . $bentrok->take(5)->implode(', ') . ($bentrok->count() > 5 ? ', ...' : ''),
                    ]);
                }

                foreach (array_chunk($baris, 200) as $bagian) {
                    ZoneChicken::insert($bagian);
                }
            });
        } catch (UniqueConstraintViolationException) {
            return back()->withInput()->withErrors([
                'jumlah' => 'Nomor bentrok dengan data yang baru saja ditambahkan. Muat ulang halaman lalu coba lagi.',
            ]);
        }

        return redirect()->route('admin.zones.index')
            ->with('success', "{$jumlah} posisi berhasil ditambahkan ke Kamar {$prefix}.");
    }
}