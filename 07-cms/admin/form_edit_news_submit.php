<?php

include "../lib/config.php";

$id = $_POST['id'];
$judul = $_POST['judul'];
$detail = $_POST['detail'];

if ($_FILES["images"]["error"] == 0)
{
  move_uploaded_file($_FILES["images"]["tmp_name"], "../images/".$_FILES["images"]["name"]);
  $new_images = $_FILES["images"]["name"];

  // Hapus gambar lama
  $old_images = "../images/".$_POST['old_images'];
  if (file_exists($old_images))
  {
    unlink($old_images);
  }
} else {
  $new_images = $_POST['old_images'];
}

$sqlUpdate = "UPDATE berita SET judul = '".$judul."',
                          detail = '".$detail."',
                          gambar = '".$new_images."'
                      WHERE id = $id";
//echo $sql; exit ();

$queryUpdate = $koneksi->query($sqlUpdate);

header ("location: news_admin.php");

?>
