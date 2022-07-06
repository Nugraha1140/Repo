<!DOCTYPE html>
<html>
<head>
    <title>Form Pengulangan</title>
</head>
<body>
    <center>
        <h2>Form Pengulangan</h2>
        <table>
        <tr>
        <td> 1. Deret Bilangan Ganjil</td>
       </tr>
        <tr>
       <td> 2. Segitiga Sama Kaki Terbalik</td>
        </tr>
        <tr>
        <td> 3. Deret Bilangan Kelipatan 3</td>
        </tr>
        </table>
           <form method="POST">
               <table>
               <tr>
                    <td>Pilih</td>
                    <td>:</td>
                    <td><input type="number" name="pilih"></td>
                </tr>
                 <tr>
                    <td>Masukan Angka</td>
                    <td>:</td>
                    <td><input type="number" name="angka"></td>
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
    $pilih = $_POST['pilih'];
    $angka = $_POST['angka'];

    switch ($pilih) {
        case 1:
            echo "<center><br>";
            echo "Deret Bilangan Ganjil<br>";

            for ($a = 1; $a <= $angka; $a++) {
                if (($a % 2) == 1) {

                    echo "<b> $a </b>";

                }
            }
            echo "</center>";
            break;

        case 2:
            echo "<center><br>";
            echo "Segitiga Sama kaki Terbalik <br>";

            for ($a = 1; $a <= $angka; $a++) {
                for ($b = 1; $b <= $a; $b++) {
                    echo "";
                }
                for ($c = $angka; $c >= $a; $c -= 1) {
                    echo "*";
                }
                echo "<br>";
            }
            echo "</center>";

            break;

        case 3:
            echo "<center><br>";
            echo "Deret Bilangan Kelipatan 3<br>";

            for ($a = 1; $a <= $angka; $a++) {
                if (($a % 3) == 0) {
                    echo "<b> $a </b>";

                }
            }
            break;
    }
}