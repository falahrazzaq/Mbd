<?php
  include('db.php');
  $id = $_GET['id_karyawan'];
  echo "$id";

  $sql = "DELETE FROM karyawan WHERE id_karyawan ='$id'";

  if ($mysqli->query($sql) === TRUE) {
      echo "Record deleted successfully";
      header("location: karyawan.php");
  } else {
      echo "Error deleting record: " . $mysqli->error;
  }

 ?>