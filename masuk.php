<?php
include("konek.php");
$username = $_POST['txtUsername'];
$password = $_POST['txtPassword'];

// echo $username;
// echo $password;
$query = "select * from admin where username='".$username."' and password='".$password."'";
// echo $query;

$cek = mysqli_query($konek, $query) or die(mysqli_error());
$data = mysqli_fetch_array($cek);
$banyak = mysqli_num_rows($cek);
echo $banyak;
if ($banyak > 0) {
    session_start();
    $_SESSION['username'] = $data['username'];
    $_SESSION['id_admin'] = $data['id_admin'];
    $_SESSION['level'] = $data['level'];
    $_SESSION['password'] = $data['password'];
    
    header("Location:index.php");
} else { ?>
    <script type="text/javascript"> {alert("username atau password Salah");}
        <?php
        header("location:login.php");
}