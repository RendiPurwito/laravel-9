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
}
