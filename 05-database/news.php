<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>News</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="wrapper">
  <div id="header">
        
           <div class="container">
           		<img id="logo" src="images/logo.png">
                <div id="menu">
                        <ul>
                                <li class="nav1"><a href="index.php">HOME</a></li>
                                <li class="nav2"><a href="news.php">NEWS</a></li>
                                <li class="nav3"><a href="products.php">PRODUCTS</a></li>
                                <li class="nav4"><a href="contact.php">CONTACT</a></li> 
                                <li class="nav5"><a href="gallery.php">GALLERY</a></li>
                            </ul>
                </div>
           </div>
            
     </div>
   <!---------------------------------------- END HEADER -------------------------------->
   <div id="greenLine"></div>
   		<div id="content">
            <?php
                // 1. Buat variabel untuk koneksi ke server dan pilih database
                $koneksi = new mysqli("localhost","root","","training-php");
                // 2. Buat perintah SQL
                $sql = "SELECT * FROM berita";
                // 3. Jalankan perintah SQL
                $query = $koneksi->query($sql);
                // 4. Tampilkan hasil
                $rows = $query->fetch_assoc();     

            ?>
            
            <div class="container">
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
                    <a href="#" class="link_detail">Read More</a>
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
