<!doctype html>
<html>
	<head>
		<title> Portopolio </title>
		<link rel="stylesheet" href="style_profile.css" type="text/css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<header>
			<h1><a href="home.php" class="header-name">Booking & Donate</a></h1>
			<nav>
				<ul>
					<li class="active"><a href="home.php">Koleksi</a></li>
					<li><a href="pelanggan.php">Pelanggan</a></li>
					<li><a href="karyawan.php">Karyawan</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</nav>
		</header>
		<div class="gallery-name">
			
		</div>
		<br>
            
            <div>
                <?php
                  include("db.php");
                  $sql = "select * from koleksi";   
                  $query = mysqli_query($mysqli, $sql);
                  while($koleksi = mysqli_fetch_array($query)){
                    echo '<div id="templatemo_content">';
                    echo '<div id="templatemo">';
                    echo '<div class="templatemo_product_box">';
                    echo '<h1>'.$koleksi['kl_judul'].'<span>(by '.$koleksi['kl_penulis'].')</span></h1>';
                    echo '<img src="images/templatemo_image_01.jpg" alt="image" />';
                    echo '<div class="product_info">';
                    echo '<p>Etiam luctus. Quisque facilisis suscipit elit. Curabitur...</p>';
                    echo '<div class="buy_now_button"><a href="subpage.html">Booking now</a></div>';
                    echo '<div class="detail_button"><a href="subpage.html">Detail</a></div>';
                    echo '</div>';
                    echo'<div class="cleaner">&nbsp;</div>';
                    echo '</div>';
                  }
                ?>
            </div>

        </div> 
	</body>
</html>