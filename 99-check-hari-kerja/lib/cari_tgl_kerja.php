<?php

  function cari_tgl_kerja ($tanggal)
  {
    // $tgl_pelaporan, yang merupakan tanggal parameter ditambah 1 hari (tanggal berikutnya).
    $tgl_pelaporan = date('Y-m-d', strtotime($tanggal . "+1 days"));
    // $tahun ($th), merupakan tahun dari tanggal_pelaporan.
    $tahun = date('Y', strtotime($tgl_pelaporan));
    // $jumlah_libur, merupakan hasil dari function cek_libur() dengan parameter tanggal_pelaporan dan tahunnya.
    $jumlah_libur = check_libur($tgl_pelaporan, $tahun);

    // Jika hasil cek libur 0, maka outputnya berupa variable tanggal_pelaporan itu sendiri.
    if ($jumlah_libur == 0)
    {
      return $tgl_pelaporan;
    } else {
      // Jika tanggal_pelaporan masuk dalam tanggal hari libur, maka ulangi function cari_tgl_kerja ini, namun dengan parameter yang baru, yaitu $tanggal_pelaporan. Sehingga function ini akan terus bekerja sampai menemukan hasil cek_libur 0.
      return cari_tgl_kerja($tgl_pelaporan);
    }
  }

?>
