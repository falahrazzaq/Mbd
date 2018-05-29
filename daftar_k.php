<?php
$con = mysqli_connect("localhost", "root", "", "booking&donate");

$k_nama = $_POST['name'];
$k_telp = $_POST['no_telp'];
$k_alamat = $_POST['alamat'];

// Auto generate ID
$id = "SELECT MAX(id_karyawan) as nilai_id
       FROM karyawan;";

$_id = mysqli_query($con, $id);
$n_id = mysqli_fetch_assoc($_id);
$idnya = number_format(substr($n_id['nilai_id'], 1))+1;

if ($idnya <= 9) {
    $id_karyawan = 'K000'.$idnya;
}
else if ($idnya <= 99 && $idnya > 9) {
    $id_karyawan = 'K00'.$idnya;   
}
else if ($idnya <= 999 && $idnya > 99) {
    $id_karyawan = 'K0'.$idnya;   
}

// end generate id

$sql = "INSERT INTO karyawan (id_karyawan, k_nama, k_alamat, k_telp)"
        .  "VALUES ('$id_karyawan',' $k_nama', '$k_alamat', '$k_telp')";

if (mysqli_query($con, $sql)) {
    echo 'sudah masuk';
}

header("location: karyawan.php");
?> 