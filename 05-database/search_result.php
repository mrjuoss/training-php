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

            <?php
                // 1. Buat variabel untuk koneksi ke server dan pilih database
                $koneksi = new mysqli("localhost","root","","training-php");

                $search_text = $_POST['search_text'];
                // 2.
                $sql = "SELECT * FROM berita where judul LIKE '%$search_text%' ORDER BY created_at DESC";

                // 3. Jalankan perintah SQL dan tampung ke dalam sebuah variabel
                $query = $koneksi->query($sql);

                // 4. Tampilkan hasil
                $rows = $query->fetch_assoc();

            ?>

            <div class="container">

              <div class="searchHolder">
                <form action="search_result.php" method="post">
                  Search : <input type="text" id="search_text" name="search_text" value="" placeholder="Kata kunci"> &nbsp; &nbsp;
                  <input type="submit" name="submit" value="search">
                </form>
              </div>

              <?php
                    do {
                        // 2017-10-12
                        $tgl_buat = $rows['created_at'];
                        $bulan    = substr($tgl_buat,5,2);
                        $tgl      = substr($tgl_buat,8,2);
              ?>
            	<div class="newsitem">
                	<div class="date_circle">
                        <p class="day">
                            <?php echo $bulan; ?>
                            <span class="month">
                                <?php echo $tgl; ?>
                            </span>
                        </p>
                    </div>
                    <h2 class="news_title"><?php echo $rows['judul']; ?></h2>
                    <div class="clear"></div>
                    <img src="images-ori/<?php echo $rows['gambar'];?>" width="200" class="news_image">
                    <p class="news_synopsis">
                        <?php echo substr($rows['detail'],0,300) ." .....";?>
                    </p>
                    <a href="news_detail.php?new_id=<?php echo $rows['id']; ?>" class="link_detail">Read More</a>
                </div>
                <?php
                    } while ($rows = $query->fetch_assoc());
                ?>
            </div><!--- END CONTENT WRAPPER -->

        </div>
<!---------------------------------------- END CONTENT ------------------------------->
		<div id="footer">

        	<div class="container">
            	<p> Copyright &copy; Biro Kepegawaian Sekretariat Jenderal Kementerian Kesehatan</p>
            </div>

        </div>
<!---------------------------------------- END FOOTER --------------------------------->
</div>
</body>
</html>
