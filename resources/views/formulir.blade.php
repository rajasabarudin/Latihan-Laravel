<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kelas Laravel</title>
</head>
<body>
    <form action="/formulir/hasil" method="get">
    <table align="center">
    <tr>
            
            <td align="right" colspan=3> <h3>Formulir Pendaftaran Kelas Laravel</h3> </td>
            
        </tr>
        <tr>
            <td>NIM</td>
            <td>:</td>
            <td><input type="text" name="nim"></td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td>:</td>
            <td><input type="text" name="nm"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><textarea name="almt" id="" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
            <td>Tanggal lahir</td>
            <td>:</td>
            <td><input type="date" name="tgllhr"></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>:</td>
            <td>
            <input type="radio" name="jk" value="Laki-Laki">Laki - Laki<br>
            <input type="radio" name="jk" value="Perempuan">Perempuan
            </td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td>:</td>
            <td>
                <select name="kerja">
                <option value="">--Pilih Pekerjaan--</option>
                <option value="Karyawan">Karyawan</option>
                <option value="Mahasiswa">Mahasiswa</option>
                <option value="Wirausaha">Wirausaha</option>
                <option value="Belum Bekerja">Belum Bekerja</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><input type="email" name="email" placeholder="Email Anda"></td>
        </tr>

        <tr valign="top">
            <td>Hobi</td>
            <td>:</td>
            <td>
            <input type="checkbox" name="hobi1" value="Olah Raga">Olah Raga<br>
            <input type="checkbox" name="hobi2" value="Musik">Musik<br>
            <input type="checkbox" name="hobi3" value="Renang">Renang
            </td>
    </tr>
        <tr>
            
            <td align="center" colspan=3><input type="submit" value="SIMPAN"> 
            <input type="reset" value="BATAL"</td>
        </tr>
    </table>
    </form>
</body>
</html>