<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Region;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    public function index()
    {
        $regions = Region::all();
        return view('admin.regions.index', compact('regions'));
    }

    public function create()
    {
        return view('admin.regions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:regions,name',
            'base_price' => 'required|numeric|min:0',
        ]);

        Region::create($request->all());

        return redirect()->route('regions.index')->with('success', 'Wilayah berhasil ditambahkan.');
    }

    public function edit(Region $region)
    {
        return view('admin.regions.edit', compact('region'));
    }

    public function update(Request $request, Region $region)
    {
        $request->validate([
            'name' => 'required|unique:regions,name,' . $region->id,
            'base_price' => 'required|numeric|min:0',
        ]);

        $region->update($request->all());

        return redirect()->route('regions.index')->with('success', 'Wilayah berhasil diperbarui.');
    }

    public function destroy(Region $region)
    {
        $region->delete();
        return redirect()->route('regions.index')->with('success', 'Wilayah berhasil dihapus.');
    }
}
