<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\RumahSakit;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index(Request $request)
    {
        $rumahSakits = RumahSakit::all();

        $query = Pasien::with('rumahSakit');

        if ($request->has('rumah_sakit_id') && $request->rumah_sakit_id != '') {
            $query->where('rumah_sakit_id', $request->rumah_sakit_id);
        }

        $pasiens = $query->get();

        if ($request->ajax()) {
            $html = '';
            foreach($pasiens as $pasien) {
                $html .= '<tr data-id="'.$pasien->id.'">
                            <td>'.$pasien->id.'</td>
                            <td>'.$pasien->nama.'</td>
                            <td>'.$pasien->alamat.'</td>
                            <td>'.$pasien->telepon.'</td>
                            <td>'.$pasien->rumahSakit->nama.'</td>
                            <td>
                                <a href="'.route('pasien.edit', $pasien->id).'" class="btn btn-sm btn-outline-primary me-1">Edit</a>
                                <button class="btn btn-sm btn-outline-danger delete-btn" data-id="'.$pasien->id.'">Delete</button>
                            </td>
                        </tr>';
            }
            return $html;
        }

        return view('pasien.index', compact('pasiens', 'rumahSakits'));
    }



    public function create()
    {
        $rumahSakits = RumahSakit::all();
        return view('pasien.create', compact('rumahSakits'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'telepon' => 'required|string|max:20',
            'rumah_sakit_id' => 'required|exists:rumah_sakits,id',
        ]);

        Pasien::create($request->all());

        return redirect()->route('pasien.index')->with('success', 'Data pasien berhasil ditambahkan');
    }

    public function edit(Pasien $pasien)
    {
        $rumahSakits = RumahSakit::all();
        return view('pasien.edit', compact('pasien', 'rumahSakits'));
    }

    public function update(Request $request, Pasien $pasien)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'telepon' => 'required|string|max:20',
            'rumah_sakit_id' => 'required|exists:rumah_sakits,id',
        ]);

        $pasien->update($request->all());

        return redirect()->route('pasien.index')->with('success', 'Data pasien berhasil diupdate');
    }


    public function destroy(Pasien $pasien)
    {
        $pasien->delete();

        return response()->json(['success' => true]);
    }
}
