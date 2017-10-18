<?php

include "config.php";

$username = $_POST['member_username'];
$password = md5($_POST['member_password']);
$name     = $_POST['member_name'];

$sql = "INSERT INTO member (member_username, member_password, member_name)
        VALUES ('".$username."', '".$password."' , '".$name."' )";

//echo $sql;
//exit();
if ($query = $koneksi->query($sql) === true)
{
  header ("location:index.php");
} else {
  echo "Registrasi Gagal";
}


?>
