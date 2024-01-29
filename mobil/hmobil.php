<?php
include("konek.php");

// Fix: use square brackets for accessing GET parameters
$id = $_GET['id'];

// Use prepared statement to prevent SQL injection
$hapus = mysqli_prepare($konek, "DELETE FROM mobil WHERE id_mobil = ?");
mysqli_stmt_bind_param($hapus, 'i', $id);
mysqli_stmt_execute($hapus);

// Check if the deletion was successful
if (mysqli_stmt_affected_rows($hapus) > 0) {
    header("Location: index.php?x=mobil");
} else {
    // Handle the case where no rows were affected (e.g., the ID didn't exist)
    echo "No rows were deleted.";
}

// Close the statement
mysqli_stmt_close($hapus);

// Close the database connection
mysqli_close($konek);
?>
