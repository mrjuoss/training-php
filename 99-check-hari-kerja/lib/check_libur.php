<?php

  function check_libur($tanggal, $tahun)
  {
    $db = 'mysql:dbname=training-php;host=localhost';
    $user = 'root';
    $password = '';

    try {
      $dbh = new PDO($db, $user, $password);
      $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $dbh->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY_QUERY, TRUE);
    } catch (PDOException $e) {
      echo 'Koneksi database GAGAL : '. $e->getMessage();
    }

    $query = "SELECT tgl_libur FROM liburan WHERE tahun ='$tahun'";

    $ps = $dbh->prepare($Query);

    $ps->execute();

    $data = $ps->fetch();

    $detail_libur = explode(',', $data['tgl_libur']);

    // Cek apakah tanggal yang dimasukkan ke dalam function ada di dalam array tgl_libur. Di sini saya menggunakan tenary operator untuk menyingkat penulisan if. Jika ada, maka hasilnya 1, jika tidak ada maka hasilnya 0.
    $hasil = in_array($tanggal, $detail_libur) ? 1:0;

    return $hasil;
    // Output dari function ini, bisa 0 atau 1
  }

?>
