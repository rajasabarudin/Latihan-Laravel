<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BelajarController extends Controller
{
    //fungsi untuk formulir
    public function index()
    {
        return view('formulir');
    }

    public function hasil (Request $request)
    {
        $nim = $request->input('nim');
        $nama = $request->input('nm');
        $alamat = $request->input('almt');
        $ttl = $request->input('tgllhr');
        $gender = $request->input('jk');
        $kerja = $request->input('kerja');
        $email = $request->input('email');
        $hobi1 = $request->input('hobi1');
        $hobi2 = $request->input('hobi2');
        $hobi3 = $request->input('hobi3');


        return  "<h2>Data Pandaftaran Kelas Laravel</h2> <br> NIM : ".$nim.
        "<br> Nama : ".$nama."<br> Alamat : ".$alamat.
        "Tanggal lahir : ".$ttl."<br> Gender : ".$gender.
        "<br> Pekerjaan : ".$kerja."<br> E-mail".$email.
        "<br> Hobi : ".$hobi1.",".$hobi2.",".$hobi3.
        "<br><a href='/formulir'>kembali</a>";
    }
}
