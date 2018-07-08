<?php
include '../koneksi.php';

$id_product = $_POST['id_product'];
$product_name = $_POST['name_product'];
$category = $_POST['category'];
$price = $_POST['price'];

$eksekusi = mysqli_query($connect, "UPDATE product SET name_product = '$product_name', category = '$category', price = '$price' WHERE id_product = '$id_product'");

if($eksekusi){
	header("Location: http://localhost/kaoshop/backend/products/index.php");
}else{
	echo 'input data gagal';
}

mysqli_close($connect);