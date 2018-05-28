<?php
  include('db.php');
  print $_GET('id_anggota');
  echo "$id";

  $sql = "DELETE FROM anggota WHERE id='$id'";

  if ($conn->query($sql) === TRUE) {
      echo "Record deleted successfully";
      header ('pelanggan.php');
  } else {
      echo "Error deleting record: " . $conn->error;
  }
 ?>