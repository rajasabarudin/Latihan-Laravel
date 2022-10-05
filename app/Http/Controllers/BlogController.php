<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    //fungsi index
    public function index()
    {
        return view('beranda');
    }

    //fungsi tentang
    public function tentang()
    {
        return view('tentang');
    }

    //fungsi kontak
    public function kontak()
    {
        return view('kontak');
    }
}
