<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Quiz Form</title>
  </head>
  <body>
    <h3>Input Data</h3>
    <form class="" action="" method="post">
      <input type="text" name="kalimat" value="" placeholder="Ketikkan kalimat">
      <br><br>
      <input type="text" name="jumlah" value="" placeholder="Ketikkan jumlah perulangan">
      <br><br>
      <input type="submit" name="submit" value="Submit">
    </form>

    <h3>Hasilnya</h3>

    <?php

    if (isset($_POST['submit']))
    {
      $kalimat = $_POST['kalimat'];
      $jumlah = $_POST['jumlah'];

      for ($i=1; $i <= $jumlah; $i++)
      {
        echo $kalimat." ke ".$i;
        echo "<br>";
      }
    }
    ?>
  </body>
</html>
