<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Contoh login sederhana</title>
  </head>
  <body>
    <h3>Form Login</h3>
    <form class="" action="" method="post">
      <input type="text" name="username" value="" placeholder="Ketikkan username" required>
      <br><br>
      <input type="password" name="password" value="" placeholder="Ketikkan password" required>
      <br><br>
      <input type="submit" name="submit" value="Login"> &nbsp;
      <input type="reset" name="reset" value="Reset">
    </form>
    <br>
    <hr width = "15%" align = "left">
    <?php

    if (isset($_POST['submit']))
    {
      $username = $_POST['username'];
      $password = $_POST['password'];

      if (($username == 'mujaki') && ($password == '12345'))
      {
        echo "Selamat Datang Mujaki";
      } else {
        echo "Gagal login. Username dan/atau password yang anda masukkan salah.";
      }
    }
    ?>
  </body>
</html>
