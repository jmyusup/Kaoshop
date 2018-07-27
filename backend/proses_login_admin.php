<?php
session_start();

//print_r($_POST);exit();
include 'koneksi.php';

$username    = mysqli_real_escape_string($connect, $_POST["username"]);
$password = md5($_POST["password"]);

$q        = "SELECT * FROM admin WHERE username ='$username' and password='$password'";
$r        = mysqli_query($connect, $q);
$d        = mysqli_fetch_object($r);

if (mysqli_num_rows($r) > 0) {
    $_SESSION["username"]   = $d->username;
    $_SESSION["password"] = $d->password;
    header("Location: http://localhost/kaoshop/backend");
} else {
    header("Location: http://localhost/kaoshop/backend/loginadmin.php?error=1");
}
?>
