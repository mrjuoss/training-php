<?php

  // Jika tanggal parameter diambil dari form (dd-mm-yyyy)

  $tanggal = $_POST['tanggal'];
  /*
    $tanggal = date('Y-m-d'); jika dari sistem
  */

  function check_libur ($tanggal, $tahun)
  {
    $dbase = 'mysql:dbname=training-php;host=localhost';
    $user  = 'root';
    $pass  = '';

    try {
      $db = new PDO($dbase, $user, $pass);
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY_QUERY, TRUE);
    } catch (PDOException $e) {
      echo 'Koneksi GAGAL : ' .$e->getMessage();
    }

    $sql = "SELECT tgl_libur FROM liburan WHERE tahun = '$tahun'";

    $query = $db->prepare($sql);
    $query->execute();

    $data = $query->fetch();

    $detail_libur = explode(',', $data['tgl_libur']);

    $hasil = in_array($tanggal, $detail_libur) ? 1:0;

    return $hasil;
  }

  function cari_tgl_kerja ($tanggal)
  {
    $tgl_pelaporan = date('Y-m-d', strtotime($tanggal . "+1 days"));

    $tahun = date('Y', strtotime($tgl_pelaporan));

    $jumlah_libur = check_libur($tgl_pelaporan, $tahun);

    if ($jumlah_libur == 0)
    {
      return $tgl_pelaporan;
    } else {
      return cari_tgl_kerja($tgl_pelaporan);
    }
  }

  $hasil = cari_tgl_kerja ($tanggal);
  /*
    merupakan tanggal hari kerja berikutnya,
    format yyyy-mm-dd, siap disimpan ke tabel db
  */

?>
