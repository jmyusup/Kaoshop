<?php

if(isset($_POST['simpan'])){
		include('../koneksi.php');
	}


	$id = $_POST['id'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$pnumber = $_POST['pnumber'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);


	$eksekusi = mysqli_query($connect, "UPDATE user SET fname='$fname', lname='$lname', pnumber='$pnumber', email='$email', password='$password' WHERE id='$id'");

	if($eksekusi){
	header("Location: http://localhost/kaoshop/backend/register/index.php");
}else{
	echo 'input data gagal';
}

mysqli_close($connect);