<?php

  include "../lib/config.php";

  $judul = $_POST['title'];
  $detail = $_POST['description'];


  // Check proses upload berhasil atau tidak
  if ($_FILES["images"] ["error"] == 0)
  {
    // Upload gambar berhasil
    // File yang terupload secara default akan diletakkan di folder sementara
    // Pindahkan File yang diupload di folder sementara ke Folder yang diinginkan
    $folder_tujuan = '../images/';

    //echo $folder_tujuan;

    //exit();

    move_uploaded_file($_FILES["images"]["tmp_name"], $folder_tujuan.$_FILES["images"]["name"]);
    // Tampung nama file yang diupload
    $gambar = $_FILES["images"]["name"];
  } else {
    // Upload gambar gagal
    $gambar = 'gagal upload';
  }

  // Buat Perintah sql
  $sql = "INSERT INTO berita (id, judul, gambar, detail, created_at)
          VALUES ('','".$judul."', '".$gambar."', '".$detail."', now())";

  // echo $sql; exit();
  // Jalankan Perintah SQL
  $query = $koneksi->query($sql);

  if ($query)
  {
    // Jika berhasil insert maka redirect ke halaman news_admin.php
    header ("location: news_admin.php");
  } else {
    echo 'Insert data gagal';
  }
?>
