<?php
session_start();

//print_r($_POST);exit();
include 'koneksi.php';

$email    = mysqli_real_escape_string($connect, $_POST["email"]);
$password = md5($_POST["password"]);

$q        = "SELECT * FROM user WHERE email='$email' and password='$password'";
$r        = mysqli_query($connect, $q);
$d        = mysqli_fetch_object($r);

if (mysqli_num_rows($r) > 0) {
    $_SESSION["email"]   = $d->email;
    $_SESSION["password"] = $d->password;
    header("Location: http://localhost/kaoshop");
} else {
    header("Location: http://localhost/kaoshop/backend/login.php");
}
?>
