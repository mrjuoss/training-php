<div id="header">
  <div class="container">
    <?php
    if (!isset($_SESSION['sess_user'])) {
    //Isset menanyakan nama variabelnya ada atau tidak. Bukan untuk mengecek ada isi atau nilainya
    ?>
    <div class="loginHolder">
      <form action="login_submit.php" method="post">
        Username : <input type="text" id="username" name="username" placeholder="Masukkan Username">
        &nbsp; &nbsp; &nbsp;
        Password : <input type="password" id="password" name="password" placeholder="Masukkan Password">
        &nbsp; &nbsp; &nbsp;
        <input type="submit" name="submit" value="Login">
      </form>
    </div>
    <?php } else { ?>
    <?php echo "<div class='user'> Selamat Datang ". $_SESSION['nama_user']."</div>"; ?>
    &nbsp; &nbsp;
    <a class="logout" href="logout.php">.:: Log Out ::. </a>
    <?php } ?>
    <img id="logo" src="images/logo.png">
    <div id="menu">
      <ul>
        <li class="nav1"><a href="index.php">BERANDA</a></li>
        <li class="nav2"><a href="news.php">BERITA</a></li>
        <li class="nav3"><a href="products.php">PRODUK</a></li>
        <li class="nav4"><a href="contact.php">KONTAK</a></li>
        <li class="nav5"><a href="gallery.php">GALERI</a></li>
      </ul>
    </div>
  </div>
</div>
