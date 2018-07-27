<?php
include '../koneksi.php';

$product_name = addslashes(strip_tags($_POST ['name_product'])) ;
$category = addslashes(strip_tags($_POST['category']));
$price = addslashes(strip_tags($_POST['price']));

$eksekusi = mysqli_query($connect, "INSERT INTO product(id_product, name_product, category, price, photo) VALUES(null, '$product_name', '$category', '$price', 'null.png')");

if($eksekusi){
	header("Location: http://localhost/kaoshop/backend/products/index.php");
}else{
	echo 'input data gagal';
}

mysqli_close($connect);