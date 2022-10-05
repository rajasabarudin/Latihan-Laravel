<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>kelas Laravel</title>
</head>
<body>
 <!--   <h1>Belajar Controller di Laravel</h1>
    <p>Saya sedang belajar membuat controller di laravel, mudah dan praktis</p>
    <b>By. Bang Raje</b>
-->
<h1 align="center" color="red"> <font color="#5F9EA0">Form Biodata</font></h1>
<form action="biodata/proses" method="post">
{{csrf_field()}}

<table align="center">
<tr>
    <td colspan="3" align="right"><hr></td>
</tr>

<tr>
    <td> Nama</td>
    <td>:</td>
    <td><input type="text" name="nama"></td>
</tr>

<tr>
    <td>Kelas</td>
    <td>:</td>
    <td><input type="text" name="kelas"></td>
</tr>

<tr>
    <td colspan="3" align="right"><input type="submit" value="Proses"></td>
</tr>


</table>
</form>
</body>
</html>
