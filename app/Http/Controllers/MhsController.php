<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MhsController extends Controller
{
    public function index()
    {
        return view('mhs');
    }
    public function getNama($nama)
    {
        return $nama;
    }

    public function biodata()
    {
        return view(mhs);
    }

    public function proses(Request $request)
    {
        $nama = $request-> nama;
        $kelas = $request-> kelas;
        return 'Saya atas Nama: ' .$nama. ',<br> Dan Saat ini saya berada di Kelas: ' .$kelas. '<br> <a href="/mhs">Kembali</a>';
    }
}
