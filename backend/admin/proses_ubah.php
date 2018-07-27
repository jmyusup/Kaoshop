<?php
include '../koneksi.php';

$id_admin = addslashes(strip_tags($_POST['id_admin']));
$username = addslashes(strip_tags($_POST['username']));
$nama = addslashes(strip_tags($_POST['nama']));
$email = addslashes(strip_tags($_POST['email']));
$password = md5(addslashes(strip_tags($_POST['password'])));

$eksekusi = mysqli_query($connect, "UPDATE admin SET username = '$username', nama='$nama', email='$email', password='$password' WHERE id_admin = '$id_admin' ");

if($eksekusi){
	header("Location: http://localhost/kaoshop/backend/admin/index.php");
}else{
	echo 'input data gagal';
}

mysqli_close($connect);