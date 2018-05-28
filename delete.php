<?php
  include('db.php');
  $id = $_GET['id_anggota'];
  echo "$id";

  $sql = "DELETE FROM anggota WHERE id_anggota ='$id'";

  if ($mysqli->query($sql) === TRUE) {
      echo "Record deleted successfully";
      header("location: pelanggan.php");
  } else {
      echo "Error deleting record: " . $mysqli->error;
  }

 ?>