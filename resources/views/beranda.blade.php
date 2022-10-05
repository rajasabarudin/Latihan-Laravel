<!-- Menghubungkan dengan view template master -->
@extends('master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul', 'Halaman Beranda')

<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

  <p>Selamat datang!</p>
  <p>Ini Adalah Halaman Beranda - Belajar Sistem Blade Template Laravel</p>

@endsection