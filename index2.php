
<!DOCTYPE html>
<html>
<head>
    <title>Form Biodata Diri</title>
</head>
<body>
    <center>
        <h2>Biodata Diri</h2>

        <form method="POST" action= "">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type='text' name='nama'></td>
                </tr>
                 <tr>
                    <td>Tempat Lahir</td>
                    <td>:</td>
                    <td><input type='text' name='tempat_lahir'></td>
                </tr>
                 <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td><input type='date' name='tanggal_lahir'></td>
                </tr>
                 <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td><input type='radio' name='jenis_kelamin' value='Laki-Laki'>Laki-Laki
                    <input type='radio' name='jenis_kelamin' value='Perempuan'>Perempuan</td>
                </tr>
                 <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><textarea name='Alamat' cols='19' rows='5'></textarea></td>
                </tr>
                 <tr>
                    <td>Agama</td>
                    <td>:</td>
                   <td> <select name='agama'>
                    <option>Islam</option>
                    <option>Kristen</option>
                    <option>Hindu</option>
                    <option>Budha</option>
                    <option>Konghuchu</option>
                </select>
                </td>
                </tr>
                 <tr>
                    <td>Pendidikan Terakhir</td>
                    <td>:</td>
                    <td><select name='pendidikan_terakhir'>
                    <option>SD</option>
                    <option>SMP</option>
                    <option>SMK/SMA</option>
                    <option>S1</option>
                    <option>S2</option>
                    </select>
                </td>
                </tr>
                 <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td><select name='status'>
                    <option>Menikah</option>
                    <option>Belum Menikah</option>
                    <option>Janda</option>
                    <option>Duda</option>
                  </select>
                </td>
                </tr>
               <tr>
                   <td>Hobi</td>
               <td>:</td>
               <td><input type='checkbox' name='hobi' value='Membaca'>Membaca
               <input type='checkbox' name='hobi' value='Menulis'>Menulis
               <input type='checkbox' name='hobi' value='Berenang'>Berenang
               <input type='checkbox' name='hobi' value='Berlari'>Berlari</td>
               <tr>
                    <td>Cita-Cita</td>
                    <td>:</td>
                <td> <select name='cita_cita'>
                    <option>Programmer</option>
                    <option>Pilot</option>
                    <option>Guru</option>
                    <option>Dokter</option>
                    <option>Perawat</option>
                    <option>Bidan</option>
</select>
</tr>
<tr>
                    <td>Kata-Kata Bijak</td>
                    <td>:</td>
                    <td><textarea name='bijak' cols='19' rows='5'></textarea></td>
                </tr>
<tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="simpan" value='KIRIM'></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>

<?php
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['Alamat'];
    $agama = $_POST['agama'];
    $pendidikan_terakhir = $_POST['pendidikan_terakhir'];
    $hobi = $_POST['hobi'];
    $cita_cita = $_POST['cita_cita'];
    $kata_bijak = $_POST['bijak'];

    echo "========== Biodata Diri ==========<br>";
    echo "==============================<br>";
    echo "Nama :  $nama <br>";
    echo "Tempat Lahir :  $tempat_lahir <br>";
    echo "Tanggal Lahir :  $tanggal_lahir <br>";
    echo "Jenis Kelamin :  $jenis_kelamin <br>";
    echo "Alamat :  $alamat <br>";
    echo "Agama :  $agama <br>";
    echo "Pendidikan Terakhir :  $pendidikan_terakhir <br>";
    echo "Hobi :  $hobi <br>";
    echo "Cita-Cita :  $cita_cita <br>";
    echo "Kata-kata Bijak :  $kata_bijak <br>";

}
