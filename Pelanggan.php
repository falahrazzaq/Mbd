<?php
require 'db.php';
session_start();
?>
<!doctype html>
<html>
	<head>
    <title> Pelanggan </title>
    <link rel="stylesheet" href="style_profile.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<header>
			<h1><a href="home.php" class="header-name">Booking & Donate</a></h1>
			<nav>
				<ul>
					<li><a href="home.php">Koleksi</a></li>
                    <li class="active"><a href="pelanggan.php">Pelanggan</a></li>
                    <li><a href="karyawan.php">Karyawan</a></li>
                    <li><a href="logout.php">Logout</a></li>
				</ul>
			</nav>
		</header>
		<br>
		<!--Table-->
        <li><a href="daftar_pelanggan.php">tambah pelanggan</a></li>
    <div id="content">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Id Anggota</th>
                        <th>Nama Anggota</th>
                        <th>Tanggal Mendaftar</th>
                        <th>No Telpon Anggota</th>
                        <th>Alamat Anggota</th>
                        <th>delete</th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php
                      include("db.php");
                      $sql = "select * from anggota";
                      $query = mysqli_query($mysqli, $sql);
                      while($anggota = mysqli_fetch_array($query)){
                        echo "<tr>";
                        echo "<td>".$anggota['id_anggota']."</td>";
                        echo "<td>".$anggota['a_nama']."</td>";
                        echo "<td>".$anggota['a_tgldaftar']."</td>";
                        echo "<td>".$anggota['a_telp']."</td>";
                        echo "<td>".$anggota['a_alamat']."</td>";
                      ?>
                      <td><a href="delete.php?id_anggota=<?php echo $anggota['id_anggota'];?>">Delete</a></td>
                      <?php
                        echo "</tr>";
                      }
                      ?>
                    </tbody>
                </table>
            </div>
        </body> 
</html>