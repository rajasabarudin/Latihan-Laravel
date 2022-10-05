<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;



class MahasiswaController extends Controller
{
    public function index()
    {
        $nama = 'Bang Rajee';
        return view('mahasiswa', ['nama' => $nama]);
    }

    public function biodata()
    {
        $nama = 'Bang rajee';
        $matakuliah = ['Pemrograman Akuntansi 1', 'Laravel', 'Bahasa Indonesia'];
        return view('biodata', ['nm' => $nama, 'makul' => $matakuliah]);
    }
    
}