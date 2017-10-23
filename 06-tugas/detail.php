<?php include "config.php"; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Friend List</title>
    <link rel="stylesheet" href="css/master.css">
  </head>
  <body>
    <div id="container">
      <?php include "includes/header.php"; ?>
      <div id="content">

        <?php
          $friend_id = $_GET['friend_id'];

          $sql = "SELECT * FROM friends WHERE friend_id = $friend_id";

          $query = $koneksi->query($sql);

          $data = $query->fetch_object();
        ?>
          <div class="friendHolder">
            <div class="foto">
              <img src="images/<?php echo $data->photo; ?>">
            </div>
            <div class="informasi">
              Nama: <?php echo $data->friend_name; ?>
              <br>Tanggal Lahir: <?php echo $data->birthdate; ?>
              <br>Alamat: <?php echo $data->address; ?>
              <br>No Telp: <?php echo $data->phone; ?>
              <br>Divisi: <?php echo $data->division; ?>
              <br>Status: <?php echo ($data->status == 0 ? 'Belum Menikah' : 'Menikah') ; ?>
              <br> <a href="index.php"> Back </a>
            </div>
          </div>
          <div class="clearfix"></div>
      </div>
      <?php include "includes/footer.php"; ?>
    </div>
  </body>
</html>
