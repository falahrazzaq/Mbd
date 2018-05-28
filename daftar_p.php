<?php
$con = mysqli_connect("localhost", "root", "", "booking&donate");

$a_nama = $_POST['firstname'];
$a_telp = $_POST['no_telp'];
$a_alamat = $_POST['alamat'];
$a_tgldaftar = $_POST ['date'];

// Auto generate ID
$id = "SELECT MAX(id_anggota) as nilai_id
       FROM anggota;";

$_id = mysqli_query($con, $id);
$n_id = mysqli_fetch_assoc($_id);
$idnya = number_format(substr($n_id['nilai_id'], 1))+1;

if ($idnya <= 9) {
    $id_anggota = 'A000'.$idnya;
}

if ($idnya <= 99 && $idnya > 9) {
    $id_anggota = 'A00'.$idnya;
}
else if ($idnya <= 999 && $idnya > 99) {
    $id_anggota = 'A0'.$idnya;   
}

echo $id_anggota;
// end generate id

$sql = "INSERT INTO anggota (id_anggota, a_nama, a_telp, a_alamat, a_tgldaftar)" 
        .  "VALUES ('$id_anggota',' $a_nama','$a_telp','$a_alamat','$a_tgldaftar')";

if (mysqli_query($con, $sql)) {
    echo 'sudah masuk';
}

header("location: pelanggan.php");
?> 