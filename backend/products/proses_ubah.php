<?php
include '../koneksi.php';

$id_product = addslashes(strip_tags($_POST['id_product']));
$product_name = addslashes(strip_tags($_POST['name_product']));
$category = addslashes(strip_tags($_POST['category']));
$price = addslashes(strip_tags($_POST['price']));

$eksekusi = mysqli_query($connect, "UPDATE product SET name_product = '$product_name', category = '$category', price = '$price' WHERE id_product = '$id_product'");

if($eksekusi){
	header("Location: http://localhost/kaoshop/backend/products/index.php");
}else{
	echo 'input data gagal';
}

mysqli_close($connect);