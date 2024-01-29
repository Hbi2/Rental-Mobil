<?php
include("konek.php");
$no_polisi = $_POST['txtPolisi'];
$merk = $_POST['txtMerk'];
$tahun = $_POST['txtTahun'];
$harga = $_POST['txtHarga'];
$smobil = $_POST['status'];

// Corrected SQL query
$simpan = mysqli_query($konek, "INSERT INTO mobil (no_polisi, merk, tahun,harga,s_mobil) VALUES ('$no_polisi', '$merk', '$tahun', '$harga', '$smobil')") or die(mysqli_error());

if ($simpan) {
    header("Location:index.php?x=mobil");
}
?>