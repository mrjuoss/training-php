<?php

session_start();

include "config.php";

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM member WHERE member_username = '".$username."' AND member_password = '".$password."' ";
/* Debug Perintah SQL untuk mengetahui SQL nya sudah benar atau tidak
    echo $sql;
    exit();
*/
$query = $koneksi->query($sql);

if ($query->num_rows > 0)
{
  $rows  = $query->fetch_assoc();
  $_SESSION['sess_user']  = $rows['member_username'];
  $_SESSION['nama_user'] = $rows['member_name'];

  header ("location:index.php");
} else {
  header ("location:index.php?err=1");
}

// echo $user;
// echo "<br>".$pass;
// exit();

/* Check Login manual (Bukan dari Database)
if ($username == 'admin' && $password == 'admin')
{
  $_SESSION["sess_user"] = $username;
  $_SESSION["nama_user"] = "M. Arif Mujaki";

  header ("location:index.php");
} else {
  header ("location:index.php?err=1");
}
*/

?>
