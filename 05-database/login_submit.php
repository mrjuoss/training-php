<?php

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == 'admin' && $password == 'admin')
{
  $_SESSION["sess_user"] = $username;
  $_SESSION["nama_user"] = "M. Arif Mujaki";

  header ("location:index.php");
} else {
  header ("location:index.php?err=1");
}

?>
