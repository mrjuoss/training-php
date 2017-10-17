<?php
 include("config.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Services</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="wrapper">
   <?php include "includes/header.php"; ?>
   <!---------------------------------------- END HEADER -------------------------------->
   <div id="greenLine"></div>
   <div id="content">

            <div class="container">
                <!--------------------------------------------------------------------------------->
                <!-- AGAR RAPI NANTI DI PHP BUAT PRODUCT DESC DENGAN MAKSIMAL KARAKTER 110 CHAR --->
                <!--------------------------------------------------------------------------------->
                <?php
                  $koneksi = new mysqli("localhost","root","","training-php");

                  $sql = "SELECT * FROM product";

                  $query = $koneksi->query($sql);

                  while ($data = $query->fetch_object()) {
                    ?>
                      <div class="product_item">
                        <div class="number_icon"><?php echo $data->product_id; ?></div>
                          <h3 class="product_title"><?php echo $data->product_name; ?></h3>
                        <a class="example-image-link" href="images/images_product/<?php echo $data->product_photo; ?>" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
                          <img src="images/images_product/<?php echo $data->product_photo; ?>" width="270" height="110"></a>
                          <p class="product_desc">
                            <?php echo substr($data->product_desc,0,100); ?>
                          </p>
                          <a href="" class="detail_product">Read More</a>
                      </div>
                  <?php
                  }
                ?>

            </div><!--- END CONTENT WRAPPER -->

       </div>
<!--------------------------------------- END CONTENT CONTENT--------------------------->
	   <div id="footer">

        	<div class="container">
            	<p> Copyright &copy; Your Company All Right Reserved</p>
            </div>

       </div>
<!---------------------------------------- END FOOTER --------------------------------->
</div>
	<script src="lightbox/js/jquery-1.11.0.min.js"></script>
	<script src="lightbox/js/lightbox.js"></script>
</body>
</html>
