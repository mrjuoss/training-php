<?php
 include("config.php");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>News</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/custom.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="wrapper">

   <?php include "includes/header.php"; ?>
   <!---------------------------------------- END HEADER -------------------------------->
   <div id="greenLine"></div>
   		<div id="content">
        <div id="registerHolder">
          <h3>Registrasi User</h3>
          <hr width="24%">
          <form class="formRegister" action="register_submit.php" method="post">
            <table>
              <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" id="member_username" name="member_username" value="" placeholder="Ketikkan Username"></td>
              </tr>
              <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" id="member_password" name="member_password" value="" placeholder="Ketikkan Password"></td>
              </tr>
              <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><input type="text" id="member_name" name="member_name" value="" placeholder="Ketikkan Nama Lengkap"></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="Register  "></td>
              </tr>
            </table>
          </form>
        </div>
      </div>
    </div>

  <?php include "includes/footer.php" ?>
</div>
</body>
</html>
