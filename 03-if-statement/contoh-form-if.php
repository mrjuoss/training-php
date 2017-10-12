<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Contoh penggunaan form dan if else</title>
  </head>
  <body>
    <h2>Form Buku Tamu</h2>
    <form class="" action="" method="post">
      <input type="text" name="nama" value="" placeholder="Ketikkan nama anda" required>
      <br><br>
      <input type="submit" name="submit" value="Submit">
    </form>
    <hr width="15%" align="left">
    <?php

    if (isset($_POST['submit']))
    {
      $nama = $_POST['nama'];
      if (trim($nama) == "") //fungsi trim() untuk menghapus spasi
      {
        echo "Anda belum mengetikkan nama anda.";
      } else {
        echo "Selamat datang ".$nama;
      }

      echo "<br><br><br>";

      echo "Latihan php tanggal ".date("Y-m-d H:i:s");
    }

    ?>
  </body>
</html>
