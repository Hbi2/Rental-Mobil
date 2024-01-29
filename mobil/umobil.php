<?php
include("konek.php");
$kode = $_POST["kode"];
$no_polisi = $_POST['txtPolisi'];
$tahun = $_POST['txtTahun'];
$merk = $_POST['txtMerk'];
$harga = $_POST['txtHarga'];
$status = $_POST['status'];

// Corrected SQL query
$simpan = mysqli_query($konek, "UPDATE mobil SET no_polisi='$no_polisi', tahun='$tahun', merk='$merk', harga='$harga', s_mobil='$status' WHERE id_mobil='$kode'") or die(mysqli_error());

if ($simpan) {
    header("Location:index.php?x=mobil");
} else {
    die(mysqli_error($konek));
}
?>