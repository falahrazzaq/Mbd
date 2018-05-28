<?php
$_SESSION['a_nama'] = $_POST['firstname'];
$_SESSION['a_telp'] = $_POST['no_telp'];
$_SESSION['a_alamat'] = $_POST['alamat'];

$sql = "INSERT INTO anggota (a_nama, last_name, email, password, hash) " 
            . "VALUES ('$first_name','$last_name','$email','$password', '$hash')";
}