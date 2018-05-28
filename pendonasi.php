<?php
require 'db.php';
session_start();
?>
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
					<li><a href="home.php">Koleksi</a></li>
                    <li><a href="pelanggan.php">Pelanggan</a></li>
                    <li class="active"><a href="karyawan.php">Karyawan</a></li>
                    <li><a href="logout.php">Logout</a></li>
				</ul>
			</nav>
		</header>
		<br>
		<!--Table-->
    <div id="content">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Id Karyawan</th>
                        <th>Nama Karyawan</th>
                        <th>Alamat Anggota</th>
                        <th>No Telpon Anggota</th>
                        <th>delete</th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php
                      include("db.php");
                      $sql = "select * from karyawan";
                      $query = mysqli_query($mysqli, $sql);
                      while($karyawan = mysqli_fetch_array($query)){
                        echo "<tr>";
                        echo "<td>".$karyawan['id_karyawan']."</td>";
                        echo "<td>".$karyawan['k_nama']."</td>";
                        echo "<td>".$karyawan['k_alamat']."</td>";
                        echo "<td>".$karyawan['k_telp']."</td>";
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