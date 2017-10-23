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
          $sql = "SELECT friend_id, friend_name, photo, division, status FROM friends ORDER BY friend_id ASC";

          $query = $koneksi->query($sql);

          while ($data = $query->fetch_object())
          {
          ?>
          <div class="friendHolder">
            <div class="foto">
              <img src="images/<?php echo $data->photo; ?>">
            </div>
            <div class="informasi">
              Nama: <?php echo $data->friend_name; ?>
              <br>Divisi: <?php echo $data->division; ?>
              <br>Status: <?php echo ($data->status == 0 ? 'Belum Menikah' : 'Menikah') ; ?>
              <br> <a href="detail.php?friend_id=<?php echo $data->friend_id; ?>"> Detail </a>
            </div>
          </div>
          <div class="clearfix"></div>
          <?php
          }
        ?>
      </div>
      <?php include "includes/footer.php"; ?>
    </div>
  </body>
</html>
