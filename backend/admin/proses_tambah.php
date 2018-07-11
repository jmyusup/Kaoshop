<?php

if(isset($_POST['simpan'])){
		include('../koneksi.php');
	}


	$username = ($_POST['username']);
	$nama = ($_POST['nama']);
	$email = ($_POST['email']);
	$password = md5($_POST['password']);



	$eksekusi = mysqli_query($connect, "INSERT INTO admin (id_admin, username, nama, email, password) VALUES(null, '$username','$nama', '$email', '$password')");

if($eksekusi){
	header("Location: http://localhost/kaoshop/backend/admin/index.php");
}else{
	echo 'input data gagal';
}

mysqli_close($connect);
