<?php

$nilai_3 = 40;
echo "Tipe data dari variabel nilai_3 adalah ".gettype($nilai_3);
echo "<br>";

$nilai_4 = 40.5;
echo "Tipe data dari variabel nilai_4 adalah ".gettype($nilai_4);
echo "<br>";

$nilai_5 = null;
echo "Tipe data dari variabel nilai_5 adalah ".gettype($nilai_5);
echo "<br>";

$nilai_6 = "Nilai variabel nilai 6";
echo "Tipe data dari variabel nilai_6 adalah ".gettype($nilai_6);
echo "<br>";

$nilai_7 = "";
echo "Tipe data dari variabel nilai_7 adalah ".gettype($nilai_7);
echo "<br><br>";

echo "Pemanfaatan var_dump()". "<br><br>";
echo 'Hasil var_dump(7.5) adalah'. var_dump(7.5);
echo "<br><br>";

$angka = "10 apel";
$angka2 = "5 nanas 10";
$kalimat = "Saya suka lagu itu";
$desimal = 2.5;
$hasil = "";

/*
  Notice: A non well formed numeric value encountered in /opt/lampp/htdocs/training-php/02-php/tipe_data.php on line 33
  Notice: A non well formed numeric value encountered in /opt/lampp/htdocs/training-php/02-php/tipe_data.php on line 33
*/
echo "Hasilnya adalah ". $hasil = $angka + $angka2; // Nilai yang muncul adalah 15 (10 + 5), 10 diambil dari 10 apel, 5 Diambil dari 5 Nanas
echo "<br>";
echo "Variabel hasil ". gettype($hasil);
echo "<br>";
echo "Variabel kalimat ". gettype($kalimat);
echo "<br>";
echo var_dump($desimal) . "<br>";
echo var_dump($hasil) . " disamping ini nilai hasil ". $hasil;
echo var_dump($desimal) . "<br>";

?>
