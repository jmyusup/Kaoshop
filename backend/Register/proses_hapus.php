<?php
include '../koneksi.php';

$id = $_GET['id'];

$eksekusi = mysqli_query($connect, "DELETE FROM user WHERE id = $id");


if($eksekusi){
	header("Location: http://localhost/kaoshop/backend/Register/index.php");
}else{
	echo 'hapus data gagal';
}

mysqli_close($connect);