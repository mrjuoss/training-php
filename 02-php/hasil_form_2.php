<?php

$nama = $_POST['nama'];
$gender = $_POST['gender'];
$posisi = $_POST['posisi'];

echo "Nama anda adalah ". $nama;
echo "<br>";
echo "Jenis Kelamin anda adalah ". $gender;
echo "<br>";
echo "Posisi anda " . $posisi;

// Check Proses Upload berhasil atau tidak
if ($_FILES["foto"] ["error"]  == 0) // Proses berhasil jika error = 0
{
  // Pindahkan ke Folder sementara ke Folder yang kita mau
  move_uploaded_file($_FILES["foto"]["tmp_name"], "images/". $_FILES["foto"]["name"]);
  // tmp_name = temporary folder
  // images = nama folder tujuan
  ?>
  <br>
  <img src="images/<?php echo $_FILES["foto"]["name"]?>" width="100px" alt="">
  <?php
}

// Check Filenya ada atau tidak

?>
