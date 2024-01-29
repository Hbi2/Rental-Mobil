<?php
include("konek.php");
$nama = $_POST['txtNama'];
$kelamin = $_POST['kelamin'];
$username = $_POST['txtUsername'];
$password = $_POST['txtPassword'];
$level = $_POST['level'];

// Corrected SQL query
$simpan = mysqli_query($konek, "INSERT INTO admin (nama_admin, jenkel_admin, username,password,level) VALUES ('$nama', '$kelamin', '$username', '$password', '$level')") or die(mysqli_error());

if ($simpan) {
    header("Location:index.php?x=admin");
}
?>