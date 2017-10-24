<?php

  include "../lib/config.php";

  $id = $_GET['id'];

  // Proses Hapus data dalam database dan hapus gambar dalam folder
  // Buat code SQL untuk mendapatkan nama gambar
  $sql = "SELECT gambar FROM berita WHERE id = $id ";

  $query = $koneksi->query($sql);

  if ($query->num_rows > 0)
  {
    // Masukkan ke dalam Variabel Array
    $row = $query->fetch_object();
    $file_gambar = '../images/'.$row->gambar;

    // Check file gambar ada ?
    if (file_exists($file_gambar))
    {
      // Jika ada, Hapus gambar
      unlink($file_gambar);
    }
  }

  // Buat sql untuk menghapus data dalam database
  $sqlHapus = "DELETE FROM berita WHERE id = $id";
  // Jalankan query
  $queryHapus = $koneksi->query($sqlHapus);

  if ($queryHapus)
  {
    header ("location: news_admin.php");
  } else {
    echo "Gagal menghapus data";
  }


?>
