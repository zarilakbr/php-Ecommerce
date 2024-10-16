<?php
	include("function/session.php");
	include("db/dbconn.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>ZarilShop</title>
	<link rel="icon" href="img/zaril1.jpg" />
	<link rel = "stylesheet" type = "text/css" href="css/style.css" media="all">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script src="js/bootstrap.js"></script>
	<script src="js/jquery-1.7.2.min.js"></script>
	<script src="js/carousel.js"></script>
	<script src="js/button.js"></script>
	<script src="js/dropdown.js"></script>
	<script src="js/tab.js"></script>
	<script src="js/tooltip.js"></script>
	<script src="js/popover.js"></script>
	<script src="js/collapse.js"></script>
	<script src="js/modal.js"></script>
	<script src="js/scrollspy.js"></script>
	<script src="js/alert.js"></script>
	<script src="js/transition.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<div id="header">
		<img src="img/zaril1.jpg">
		<label>ZarilShop</label>
			
			<?php
				$id = (int) $_SESSION['id'];
			
					$query = mysqli_query ($conn, "SELECT * FROM customer WHERE customerid = '$id' ") or die (mysqli_error($conn));
					$fetch = mysqli_fetch_array ($query);
			?>
	
			<ul>
				<li><a href="function/logout.php"><i class="icon-off icon-white"></i>logout</a></li>
				<li>Welcome:&nbsp;&nbsp;&nbsp;<a href="#profile" href  data-toggle="modal"><i class="icon-user icon-white"></i><?php echo $fetch['firstname']; ?>&nbsp;<?php echo $fetch['lastname'];?></a></li>
			</ul>
	</div>
	
	<div id="profile" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:700px;">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
					<h3 id="myModalLabel">My Account</h3>
				</div>
					<div class="modal-body">
						<?php
							$id = (int) $_SESSION['id'];
			
								$query = mysqli_query ($conn, "SELECT * FROM customer WHERE customerid = '$id' ") or die (mysqli_error($conn));
								$fetch = mysqli_fetch_array ($query);
						?>
						<center>
					<form method="post">
						<center>
							<table>
								<tr>
									<td class="profile">Name:</td><td class="profile"><?php echo $fetch['firstname'];?>&nbsp;<?php echo $fetch['mi'];?>&nbsp;<?php echo $fetch['lastname'];?></td>
								</tr>
								<tr>
									<td class="profile">Address:</td><td class="profile"><?php echo $fetch['address'];?></td>
								</tr>
								<tr>
									<td class="profile">Country:</td><td class="profile"><?php echo $fetch['country'];?></td>
								</tr>
								<tr>
									<td class="profile">ZIP Code:</td><td class="profile"><?php echo $fetch['zipcode'];?></td>
								</tr>
								<tr>
									<td class="profile">Mobile Number:</td><td class="profile"><?php echo $fetch['mobile'];?></td>
								</tr>
								<tr>
									<td class="profile">Telephone Number:</td><td class="profile"><?php echo $fetch['telephone'];?></td>
								</tr>
								<tr>
									<td class="profile">Email:</td><td class="profile"><?php echo $fetch['email'];?></td>
								</tr>
							</table>
						</center>
					</div>
				<div class="modal-footer">
					<a href="account.php?id=<?php echo $fetch['customerid']; ?>"><input type="button" class="btn btn-success" name="edit" value="Edit Account"></a>
					<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>
				</div>
					</form>
			</div>
	
	
	
	<br>
<div id="container">
	<div class="nav">	
			 <ul>
				<li><a href="home.php">   <i class="icon-home"></i>Home</a></li>
				<li><a href="product1.php"> 			 <i class="icon-th-list"></i>Product</a></li>
				<li><a href="aboutus1.php">   <i class="icon-bookmark"></i>About Us</a></li>
				<li><a href="contactus1.php"><i class="icon-inbox"></i>Contact Us</a></li>
				<li><a href="privacy1.php"><i class="icon-info-sign"></i>Privacy Policy</a></li>
				<li><a href="faqs1.php"><i class="icon-question-sign"></i>FAQs</a></li>
			</ul>
	</div>
	
	<br />
	<br />
	
	<div id="content">
			<legend><h3>Kebijakan perusahan</h3></legend>
				<p>The ZarilShop Incorporated menghormati privasi para pengunjung
					ke situs web ZarilShop.com dan situs web lokal yang terhubung dengannya, dan berhati-hatilah untuk melindungi
					informasi.. Kebijakan privasi ini memberi tahu Anda informasi apa yang kami kumpulkan dari Anda, bagaimana kami dapat menggunakannya dan
					langkah-langkah yang kami ambil untuk memastikan bahwa itu dilindungi.</p>
			<hr>
				<h4>Perlindungan informasi pengunjung</h4>
					<p>Untuk melindungi informasi yang Anda berikan kepada kami dengan mengunjungi situs web kami, kami telah menerapkan berbagai
						langkah-langkah keamanan. Informasi pribadi Anda terkandung di balik jaringan aman dan hanya dapat diakses
						oleh sejumlah orang yang memiliki hak akses khusus dan diwajibkan untuk menyimpan informasi tersebut
						rahasia.Harap diingat bahwa setiap kali Anda memberikan informasi pribadi secara online, ada a
						risiko bahwa pihak ketiga dapat mencegat dan menggunakan informasi tersebut. Sedangkan ZarilShop berusaha untuk melindungi penggunanya
						informasi pribadi dan privasi, kami tidak dapat menjamin keamanan informasi apa pun yang Anda ungkapkan secara online
						dan Anda melakukannya dengan risiko Anda sendiri.</p>
			<hr>
				<h4>Penggunaan cookie</h4>
					<p>Cookie adalah rangkaian kecil informasi yang ditransfer oleh situs web yang Anda kunjungi ke komputer Anda
						tujuan identifikasi. Cookie dapat digunakan untuk mengikuti aktivitas Anda di situs web dan informasi tersebut
						membantu kami memahami preferensi Anda dan meningkatkan pengalaman situs web Anda. Cookie juga digunakan untuk
						ingat misalnya nama pengguna dan kata sandi Anda.</p>
					<p>Anda dapat mematikan semua cookie, jika Anda memilih untuk tidak menerimanya. Anda juga dapat membuat komputer Anda memperingatkan
						Anda setiap kali cookie sedang digunakan. Untuk kedua opsi tersebut Anda harus menyesuaikan pengaturan browser Anda
						(seperti penjelajah internet). Tersedia juga produk perangkat lunak yang dapat mengelola cookie untuk Anda.
						Perlu diketahui bahwa ketika Anda mengatur komputer Anda untuk menolak cookie, itu dapat membatasi
						fungsionalitas situs web yang Anda kunjungi dan mungkin Anda tidak memiliki akses ke beberapa di antaranya
						fitur di situs web.</p>
			<hr>
				<h4>Kebijakan online</h4>
					<p>Kebijakan Privasi tidak mencakup apa pun yang melekat pada pengoperasian internet, dan
						oleh karena itu di luar kendali adidas, dan tidak akan diterapkan dengan cara apa pun yang bertentangan dengan hukum yang berlaku atau
						regulasi pemerintah. Kebijakan privasi online ini hanya berlaku untuk informasi yang dikumpulkan melalui kami
						situs web dan bukan untuk informasi yang dikumpulkan secara offline.</p>
			
		</div>
	<br />
</div>
	<br />
	<div id="footer">
		<div class="foot">
			<label style="font-size:17px;"> Copyrght &copy; </label>
			<p style="font-size:25px;">MUHAMAD ZARIL AKBAR <Inc class="2024"></Inc></p>
		</div>
			
			<div id="foot">
				<h4>Links</h4>
					<ul>
						<a href=""><li>Instagram</li></a>
						<a href=""><li>Twitter</li></a>
						<a href=""><li>Facebook</li></a>
						<a href=""><li>Watssap</li></a>
					</ul>
			</div>
	</div>
</body>
</html>