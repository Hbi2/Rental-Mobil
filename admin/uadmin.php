<?php
include("konek.php");
$kode = $_POST["kode"];
$nama = $_POST['txtNama'];
$kelamin = $_POST['kelamin'];
$username = $_POST['txtUsername'];
$password = $_POST['txtPassword'];
$level = $_POST['level'];

// Corrected SQL query
$simpan = mysqli_query($konek, "UPDATE admin SET nama_admin='$nama', jenkel_admin='$kelamin', username='$username', password='$password', level='$level' WHERE id_admin='$kode'") or die(mysqli_error());

if ($simpan) {
    header("Location:index.php?x=admin");
} else {
    die(mysqli_error($konek));
}
?>
