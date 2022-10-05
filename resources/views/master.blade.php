<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kelas Laravel</title>
</head>
<body align="center">
    <header>
    <h2>Master Simple Blog</h2>
    <nav>
        <a href="/blog">BERANDA | </a>
        <a href="/tentang">TENTANG | </a>
        <a href="/kontak">KONTAK</a>
    </nav>
    </header>
    <hr>

    <!-- Bagian Judul -->
   
    <p align="right"> <font color="#A9A9A9"><b>@yield('judul')</b></font></p>

    <!-- Bagian Isi Konten -->
    @yield('konten')

    <br><br><br>
    <hr>
    <footer>
    <p>Copy Right @Bang Raje</p>
    </footer>

</body>
</html>