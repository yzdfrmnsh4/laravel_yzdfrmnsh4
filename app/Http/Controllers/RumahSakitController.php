<?php

namespace App\Http\Controllers;

use App\Models\RumahSakit;
use Illuminate\Http\Request;

class RumahSakitController extends Controller
{
    public function index() 
    {
        $rumahsakits = RumahSakit::all();
        return view('rumahSakit.index', compact( 'rumahsakits'));
    }

    public function create()
    {
        return view('rumahSakit.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telepon' => 'required|string|max:20',
        ]);

        RumahSakit::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'telepon' => $request->telepon,
        ]);

        return redirect()->route('rumahSakit.index')
                         ->with('success', 'Data Rumah Sakit berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $rumahsakit = RumahSakit::findOrFail($id);
        return view('rumahSakit.edit', compact('rumahsakit'));
    }

    public function update(Request $request, $id)
    {
        $rumahsakit = RumahSakit::findOrFail($id);

        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telepon' => 'required|string|max:20',
        ]);

        $rumahsakit->update($request->only('nama','alamat','email','telepon'));

        return redirect()->route('rumahSakit.index')
                        ->with('success', 'Data Rumah Sakit berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $rumahsakit = RumahSakit::findOrFail($id);
        $rumahsakit->delete();
        return response()->json(['success' => true]);
    }

}
