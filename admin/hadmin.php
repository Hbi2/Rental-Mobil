<?php
include("konek.php");
$id = $_GET['id']; // Fix: use square brackets for accessing GET parameters
$hapus = mysqli_query($konek, "DELETE FROM admin WHERE id_admin = $id") or die(mysqli_error());

// Fix: Remove semicolon after if statement
if ($hapus) {
    header("Location: index.php?x=admin");
}
?>
