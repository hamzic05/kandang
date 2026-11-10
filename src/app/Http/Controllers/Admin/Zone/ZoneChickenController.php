<?php

namespace App\Http\Controllers\Admin\Zone;
use App\Http\Requests\StoreZoneRequest;
use App\Models\ZoneChicken;
use App\Models\Houses;
use App\Http\Controllers\Controller;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
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
        $houses_id = Houses::get(['id', 'name', 'code']);
        return view('admin.zones.create', compact('houses_id'));
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

                //  'code' => $baseData['code'] . '-' . $i,
                //   'name' => $baseData['name'] . '-' . $i,

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
                return view("admin.zones.show", compact("houses","count"));

    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }

}
