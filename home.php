<!doctype html>
<html>
	<head>
		<title> Portopolio </title>
		<link rel="stylesheet" href="style_profile.css" type="text/css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

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
		<div class="container">
		    <div class="row text-center">
                <?php
                  include("db.php");
                  $sql = "select * from koleksi";   
                  $query = mysqli_query($mysqli, $sql);
                  while($koleksi = mysqli_fetch_array($query)){
                    echo '<div class="col-lg-3 col-md-6 mb-4">';
                    echo '<div class="card">';
                    echo '<img class="card-img-top" src="http://placehold.it/500x325" alt="">';
                    echo '<div class="card-body">';
                    echo '<h4 class="card-title">'.$koleksi['kl_judul'].'</h4>
              <p class="card-text">'.$koleksi['kl_penulis'].'</p>
            </div>';
                    echo '<div class="card-footer">';
                    echo '<a href="#" class="btn btn-primary">Find Out More!</a>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                  }
                ?>
        	</div>
        </div> 
	</body>
</html>