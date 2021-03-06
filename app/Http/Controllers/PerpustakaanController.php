<?php

namespace App\Http\Controllers;

use App\Models\Perpustakaan;
use Illuminate\Http\Request;

class PerpustakaanController extends Controller
{
    public function index()
    {

        $data = Perpustakaan::all();
        return view('perpustakaan', compact('data'));
    }

    public function tambahperpustakaan()
    {
        return view('tambahperpustakaan');
    }

    public function insertperpustakaan(Request $request)
    {
        // dd($request->all());
        Perpustakaan::create($request->all());
        return redirect()->route('perpustakaan')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function tampilkandataperpustakaan($id)
    {
        $data = Perpustakaan::find($id);
        return view('tampilperpustakaan', compact('data'));
    }

    public function updateperpustakaan(Request $request, $id)
    {
        $data = Perpustakaan::find($id);
        $data->update($request->all());
        return redirect()->route('perpustakaan')->with('success', 'Data Berhasil Diedit');
    }

    public function deleteperpustakaan($id)
    {
        $data = Perpustakaan::find($id);
        $data->delete();
        return redirect()->route('perpustakaan')->with('success', 'Data Berhasil Didelete');
    }
}
