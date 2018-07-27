<?php

if(isset($_POST['simpan'])){
		include('../koneksi.php');
	}


	$username = addslashes(strip_tags($_POST['username']));
	$nama = addslashes(strip_tags($_POST['nama']));
	$email = addslashes(strip_tags($_POST['email']));
	$password = md5(addslashes(strip_tags($_POST['password'])));



	$eksekusi = mysqli_query($connect, "INSERT INTO admin (id_admin, username, nama, email, password) VALUES(null, '$username','$nama', '$email', '$password')");

if($eksekusi){
	header("Location: http://localhost/kaoshop/backend/admin/index.php");
}else{
	echo 'input data gagal';
}

mysqli_close($connect);
