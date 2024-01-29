<?php
include("konek.php");
$nama = $_POST['txtNama'];
$hp = $_POST['txtHp'];
$jabatan = $_POST['txtJabatan'];


// Corrected SQL query
$simpan = mysqli_query($konek, "INSERT INTO karyawan (nama,hp,jabatan) VALUES ('$nama', '$hp', '$jabatan')") or die(mysqli_error());

if ($simpan) {
    header("Location:index.php?x=karyawan");
}
?>