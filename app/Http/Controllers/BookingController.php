<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    //fungsi tampilan booking
    public function booking()
    {
        return view('booking');
    }

    //fungsi hasil inputan booking
    public function hasil(Request $request)
    {
        $nama = $request->input('nama');
        $studio = $request->input('studio');
        $kelas = $request->input('kelas');
        $jmltiket = $request->input('jmltiket');
        //Mencari Nama Bintang Tamu
        if ($studio=="Studio 1")
        {
        $bt="Opick";
        }
        elseif ($studio=="Studio 2")
        {
        $bt="Raihan";
        }
        //Mencari Harga
        if($kelas=='VIP'){
        $harga=500000;
        }
        elseif($kelas=='Festival')
        {
        $harga=250000;
        }
        $total=$harga*$jmltiket;
        return view('hasil', compact('nama','studio','bt','kelas','harga','jmltiket','total'));
            }

}
