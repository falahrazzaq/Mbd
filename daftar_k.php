<?php
$con = mysqli_connect("localhost", "root", "", "booking&donate");

$k_nama = $_POST['firstname'];
$k_telp = $_POST['no_telp'];
$k_alamat = $_POST['alamat'];

// Auto generate ID
$id = "SELECT MAX(id_karyawan) as nilai_id
       FROM karyawan;";

$_id = mysqli_query($con, $id);
$n_id = mysqli_fetch_assoc($_id);
$idnya = number_format(substr($n_id['nilai_id'], 1))+1;

if ($idnya <= 9) {
    $id_anggota = 'K00'.$idnya;
}
else if ($idnya <= 99 && $idnya > 9) {
    $id_anggota = 'K0'.$idnya;   
}
else if ($idnya <= 999 && $idnya > 99) {
    $id_anggota = 'K'.$idnya;   
}

echo $id_karyawan;
// end generate id

$sql = "INSERT INTO karyawan (id_karyawan, k_nama, k_telp, k_alamat," 
        .  "VALUES ('$id_karyawan',' $k_nama','$k_telp','$k_alamat',)";

if (mysqli_query($con, $sql)) {
    echo 'sudah masuk';
}

header("location: karyawan.php");
?> 