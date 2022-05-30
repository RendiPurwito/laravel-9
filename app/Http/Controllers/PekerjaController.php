<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pekerja;

class PekerjaController extends Controller
{
    public function index(){

        $data = pekerja::all();
        return view('datapekerja', compact('data'));
    }

    public function tambahpekerja(){
        return view('tambahdatapekerja');
    }

    public function insertdata(Request $request){
        $this->validate($request, [
            'nama' => 'required',
            'notelpon' => 'required',
        ]);
        pekerja::create($request->all());   
        return redirect()->route('pekerja')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function tampilkandata($id){

        $data = pekerja::find($id);
        return view('editdatapekerja', compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = pekerja::find($id);
        $data->update($request->all());
        return redirect()->route('pekerja')->with('success', 'Data Berhasil Diedit');
    }

    public function deletedata($id){
        $data = pekerja::find($id);
        $data->delete();
        return redirect()->route('pekerja')->with('success', 'Data Berhasil Didelete');
    }
}
