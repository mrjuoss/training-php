<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Latihan Variabel di php</title>
  </head>
  <body>
    <?php

    $nama = " Raisha Al Hamish";
    $alamat = "Jakarta";

    echo "Data yang ditampilkan adalah $nama <br>";
    echo 'Alamat di '. $alamat .'<br><br>';

    $nilai_1 = 20;
    $nilai_2 = 3;
    $hasil = 0;


    $hasil = $nilai_1 + $nilai_2;
    echo "Nilai 1 adalah = ". $nilai_1 ."<br>";
    echo "Nilai 2 adalah = ". $nilai_2 ."<br>";
    echo "Nilai 1 ditambah Nilai 2 = ". $hasil;


    echo "<br><br>";
    $hasil = $nilai_1 - $nilai_2;
    echo "Nilai 1 adalah = ". $nilai_1 ."<br>";
    echo "Nilai 2 adalah = ". $nilai_2 ."<br>";
    echo "Nilai 1 dikurangi Nilai 2 = ". $hasil;

    echo "<br><br>";
    $hasil = $nilai_1 * $nilai_2;
    echo "Nilai 1 adalah = ". $nilai_1 ."<br>";
    echo "Nilai 2 adalah = ". $nilai_2 ."<br>";
    echo "Nilai 1 dikali Nilai 2 = ". $hasil;

    echo "<br><br>";
    $hasil = $nilai_1 / $nilai_2;
    echo "Nilai 1 adalah = ". $nilai_1 ."<br>";
    echo "Nilai 2 adalah = ". $nilai_2 ."<br>";
    echo "Nilai 1 dibagi Nilai 2 = ". $hasil;

    echo "<br><br>";
    $hasil = $nilai_1 % $nilai_2;
    echo "Nilai 1 adalah = ". $nilai_1 ."<br>";
    echo "Nilai 2 adalah = ". $nilai_2 ."<br>";
    echo "Nilai 1 Modulus (sisa bagi) Nilai 2 = ". $hasil;

    ?>
  </body>
</html>
