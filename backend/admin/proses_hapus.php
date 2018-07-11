<?php
include '../koneksi.php';

$id_admin = $_GET['id_admin'];

$eksekusi = mysqli_query($connect, "DELETE FROM admin WHERE id_admin = $id_admin");

if($eksekusi){
	header("Location: http://localhost/kaoshop/backend/admin/index.php");
}else{
	echo 'hapus data gagal';
}

mysqli_close($connect);