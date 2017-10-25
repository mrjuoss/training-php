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
							// Tentukan jumlah view per page atau per halaman
							$view_perhalaman = 5;
							// Check halaman atau page
							if (isset($_GET['page']))
							{
								$active_view = $_GET['page'];
							} else {
								$active_view = 1;
							}
							// Check start data
							$start_data = ($active_view - 1) * $view_perhalaman;
							// Buat Perintah SQL
							$sql = "SELECT * FROM berita ORDER BY id ASC LIMIT ".$start_data.",".$view_perhalaman;
							// Jalankan Perintah SQL
							$query = $koneksi->query($sql);
							// Buat Variabel untuk nomer dg nama variabel no
							$no = $start_data + 1;
							// $no = ($active_view == 1 ? 1 : ($view_perhalaman + 1) );
							// Proses looping untuk menampilkan data dengan fetch_object()
							while ($row = $query->fetch_object())
							{
								?>
								<tr>
									<td class="align-center"><?php echo $no; ?></td>
									<td><?php echo $row->judul; ?></td>
									<td>
											<img style="width:100%;" src="<?php echo $base_url?>/images/<?php echo $row->gambar; ?>" />
									</td>
									<td>
										<?php echo substr($row->detail,0,300); ?>
									</td>
									<td><?php echo $row->created_at; ?></td>

									<td>
										<a href="<?php echo $base_url.'/admin/form_edit_news.php?id='.$row->id; ?>" class="table-icon edit" title="Edit"></a>
										<a href="#" class="table-icon archive" title=" View Comment"></a>
										<a onclick="return confirm ('Are you sure to delete this data ?');" href="<?php echo $base_url.'/admin/news_delete.php?id='.$row->id; ?>" class="table-icon delete" title="Delete"></a>
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
					<?php
					// Dapatkan total data
						$sqlTotal = "SELECT * FROM berita";

						$queryTotal = $koneksi->query($sqlTotal);

						$dataTotal = $queryTotal->num_rows;

						// echo $dataTotal; exit();
						$page = ceil($dataTotal/$view_perhalaman);
						// Fungsi ceil untuk pembulatan ke atas Ex. 17/5 = 3,.. Dibulatkan jadi 4
						// echo $page; exit();
					?>
					<div class="pagination">
						<?php
							for ($i= 1; $i <= $page; $i++)
							{
								// Check apakah $i = halaman yang aktif
								if ($i == $active_view)
								{
									// Jika $i = halaman yang aktif maka tambahkan class active
									?>
										<span class="active"><?php echo $i; ?> </span>
									<?php
								} else {
									// Jika tidak maka tampilkan link
									?>
										<a href="news_admin.php?page=<?php echo $i; ?>"> <?php echo $i; ?> </a>
									<?php
								}
							}
						?>
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
