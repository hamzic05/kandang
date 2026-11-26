<?php

namespace App\Http\Controllers\Admin\Houses;


use App\Http\Controllers\Controller;
use App\Http\Requests\StoreKandangRequest;
use App\Models\Houses;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


class HouseController extends Controller
{
    //
    public function index()
    {
        $houses = Houses::all();
        $count = Houses::count();
        return view("admin.houses.index", compact('houses', 'count'));
    }
    public function create()
    {
        return view('admin.houses.create');
    }
    public function store(StoreKandangRequest $request): RedirectResponse
    {
        Houses::create($request->only([
            'code',
            'name',
            'coop_type',
            'location',
            'dimensions',
            'total_area',
            'description',
        ]));
        return redirect()->route('admin.houses.index')->with('success', 'Berhasil Menambahkan informasi Data Kandang Ayam');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
         $house = Houses::findOrFail($id);

    return view('admin.houses.edit', compact('house'));
    }
    public function update(StoreKandangRequest $request, $id): RedirectResponse
{
    $house = Houses::findOrFail($id);
     $house->update($request->only([
            'code',
            'name',
            'coop_type',
            'location',
            'dimensions',
            'total_area',
            'description',
        ]));

    return redirect()->route('admin.houses.index')
        ->with('success', 'Data kandang berhasil diperbarui.');
}

    public function destroy($id)
    {
        $house = Houses::findOrFail($id);
        $house->delete();
        return redirect()->route('admin.houses.index')->with('success', 'Berhasil Menghapus Data Kandang Ayam');
    }
}
