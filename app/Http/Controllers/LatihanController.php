<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    //fungsi index
    public function index()
    {
        $nilai1 = 12;
        $nilai2 = 10;
        $hasil_penjumlahan = $nilai1 + $nilai2;
        $hasil_pengurangan = $nilai2 - $nilai2;
        $hasil_perkalian = $nilai2 * $nilai2;
        $hasil_bagi = $nilai2 / $nilai2;
        return view('matematika', ['nm1' => $nilai1, 'nm2' => $nilai2, 'hasil_j' => $hasil_penjumlahan, 'hasil_k' => $hasil_pengurangan, 'hasil_x' => $hasil_perkalian, 'hasil_b' => $hasil_bagi]);
    }

    public function pangkat()
    {
        $a = 5; //5 pangkat 2
        $b = 12; //12 pangkat 3
        $c = 10; //10 pangkat 4

        $aa = pow(5,2);
        $bb = pow(12,3);
        $cc = pow(10,4);

        $x = sqrt(25); //akar dari 25
        $y = sqrt(4); //akar dari 4

        return view('pangkat', ['nilai1'=> $a,'nilai2' => $b, 'nilai3' => $c,
        'pangkat1' => $aa, 'pangkat3' => $bb, 'pangkat4' => $cc,'pangkat', 
        'x'=> $x, 'y' => $y]);

    }   
}
