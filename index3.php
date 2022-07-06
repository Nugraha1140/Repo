
<!DOCTYPE html>
<html>
<head>
    <title>Vaksinasi</title>
</head>
<body>
    <center>
    <h2>Syarat Masuk Ke MIKO MALL</h2>
    <form method="POST">
            <table>
                <tr>
                    <td>Nama Anda</td>
                    <td>:</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Status Vaksin</td>
                    <td>:</td>
                    <td>
                      <select name="status" placeholder="---Status Vaksin---" >
                            <option value="---Status Vaksin---"></option>
                            <option>Sudah Vaksin</option>
                            <option>Belum Vaksin</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="simpan" value="KIRIM"></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>

<?php

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $status = $_POST['status'];

    echo "<br>";

    echo "<center>";

    echo "<table>";
    echo "<tr>";
    echo "<td>Nama Anda</td>";
    echo "<td>:</td>";
    echo "<td>$nama</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Status Vaksin</td>";
    echo "<td>:</td>";
    echo "<td>$status</td>";
    echo "</tr>";
    echo "</table>";

    if ($status == "Sudah Vaksin") {
        echo "<br>";
        echo "<i><b>Diizinkan</b></i>";
    } else if ($status == "Belum Vaksin") {
        echo "<br>";
        echo "<i><b>Tidak Diizinkan</b></i>";
        echo "<br>";
        echo "<br>";
        echo "<a href = https://www.pedulilindungi.id/ >Silahkan Daftar</a>";
    }
    echo "</center>";

}
