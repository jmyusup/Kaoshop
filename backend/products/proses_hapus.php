<?php
include '../koneksi.php';

$id_product = $_GET['id_product'];

$eksekusi = mysqli_query($connect, "DELETE FROM product WHERE id_product = $id_product");

if($eksekusi){
	header("Location: http://localhost/kaoshop/backend/products/index.php");
}else{
	echo 'hapus data gagal';
}

mysqli_close($connect);