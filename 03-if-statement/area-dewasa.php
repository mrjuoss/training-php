<?php

$nama = $_POST['nama'];
$usia = $_POST['usia'];

if ($usia > 17)
{
  echo "Selamat datang di Zona Dewasa ".$nama;
} else {
  echo "Maaf ".$nama.". Anda belum cukup umur";
}

echo "<br>";
echo "<a href='login-area.php'> Back to login</a>";

?>
