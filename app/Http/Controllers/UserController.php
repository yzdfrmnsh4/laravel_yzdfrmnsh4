<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    public function index()
    {
        return view('users.index');
    }

    public function getData(Request $request)
    {
        if ($request->ajax()) {
            $data = User::latest()->get();
            return DataTables::of($data)
                ->addColumn('action', function ($row) {
                    return '
                        <button class="btn btn-warning btn-sm edit" data-id="'.$row->id.'">Edit</button>
                        <button class="btn btn-danger btn-sm delete" data-id="'.$row->id.'">Delete</button>
                    ';
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }
        // Simpan / Update user
    public function store(Request $request)
    {
        $user = User::updateOrCreate(
            ['id' => $request->id],
            ['name' => $request->name, 'email' => $request->email]
        );
        return response()->json(['success' => true]);
    }

    // Ambil data untuk edit
    public function edit($id)
    {
        $user = User::find($id);
        return response()->json($user);
    }

    // Hapus user
    public function destroy($id)
    {
        User::find($id)->delete();
        return response()->json(['success' => true]);
    }

}
