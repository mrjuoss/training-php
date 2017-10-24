<?php

	session_start();
	include "../lib/config.php";

?>

<!doctype html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Admin | Progress Business</title>
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/navi.css" media="screen" />
<link rel="icon" type="image/png" href="img/admin-button-icon-hi.png"/>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/togel_menu.js"></script>
<style>.hide{ display:none !important;  /*visibility:hidden;*/ } </style>
</head>
<body>
<div class="wrap">
	<div id="header">
		<div id="top">
			<div class="left">
				<p>Welcome, <strong>Admin</strong> [ <a href="#">logout</a> ]</p>
			</div>
			<div class="right">
				<div class="align-right">
					<span style="float:left;">Today :</span><p id="date"><strong></strong></p>
				</div>
			</div>
		</div>
		<div id="nav">
			<ul>
				<li class="upp"><a href="news_admin.php">News</a>
				</li>
				<li class="upp "><a href="member.php">Member</a>
				</li>
				<li class="upp "><a href="user.php">User</a>
				</li>
				<li class="upp "><a href="product.php">Product</a>
				</li>
                <li class="upp "><a href="contact.php">Contact</a>
				</li>
			</ul>
		</div>
	</div>

	<div id="content">
		<div id="sidebar">
			<div class="box">
				<div class="h_title">&#8250; Menu Content</div>
				<ul id="home">
					<li class="b1"><a class="icon page" href="news_admin.php">News </a></li>
                    <li class="b1"><a class="icon add_user" href="member.php">Member</a></li>
					<li class="b2"><a class="icon config" href="user.php">User </a></li>
					<li class="b2"><a class="icon product" href="product.php">Product</a></li>
                    <li class="b2"><a class="icon contact" href="contact.php">Contact</a></li>
				</ul>
			</div>
		</div>
		<div id="main">


		  <div class="clear"></div>



			<div class="full_w">
				<div class="h_title">Manage pages - News</div>
				<h2>News</h2><?php //judul table ?>
				<p>Ini adalah Content Berita, untuk menambah berita baru, silahkan menginput berita pada Form dibawah</p>
                <a href="form_add_news.php" style="float:right; margin-bottom:0px;">
                <button type="submit" class="add">Add News</button>
                </a>

				<div class="entry">
					<div class="sep"></div>
				</div>


				<table>
					<thead>
						<tr>
							<th scope="col">No</th>
							<th scope="col">Title</th>
							<th scope="col">Image</th>
							<th scope="col">Synopsis</th>
                            <th scope="col">Create Date</th>
							<th scope="col" style="width: 65px;">Modify</th>
						</tr>
					</thead>

					<tbody>
						<?php
							// Buat Perintah SQL
							$sql = "SELECT * FROM berita ORDER BY id ASC";
							// Jalankan Perintah SQL
							$query = $koneksi->query($sql);
							// Buat Variabel untuk nomer dg nama variabel no
							$no = 1;
							// Proses looping untuk menampilkan data dengan fetch_object()
							while ($row = $query->fetch_object())
							{
								?>
								<tr>
									<td class="align-center"><?php echo $no; ?></td>
									<td><?php echo $row->judul; ?></td>
									<td>
											<img style="width:100%;" src="../images/<?php echo $row->gambar; ?>" />
									</td>
									<td>
										<?php echo substr($row->detail,0,300); ?>
									</td>
									<td><?php echo $row->created_at; ?></td>

									<td>
										<a href="#" class="table-icon edit" title="Edit"></a>
										<a href="#" class="table-icon archive" title=" View Comment"></a>
										<a href="#" class="table-icon delete" title="Delete"></a>
									</td>
								</tr>

								<?php
								// Increment nomer
								$no ++;
							}
						?>
					</tbody>
				</table>


				<div class="entry">
					<div class="pagination">

						<span class="active">1</span>
						<a href="">2</a>
						<a href="">3</a>
						<a href="">4</a>
						<span>...</span>
						<a href="">23</a>

					</div>

					<div class="sep hide"></div>
				  <a class="button add hide" href="">Add new page</a> <a class="button hide" href="">Categories</a>
				</div>

			</div>


	  </div>
		<div class="clear"></div>
	</div>

	<div id="footer">
		<div class="left">
			<p>Admin Panel: <a href="../index.php">Progress Business</a></p>
		</div>
		<div class="right">
			<p>@ 2015 </p>
		</div>
	</div>
</div>

</body>

<script>
var d = new Date();
document.getElementById("date").innerHTML = d.toDateString();
</script>

</html>
