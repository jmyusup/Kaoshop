<?php

if(isset($_POST['simpan'])){
		include('koneksi.php');
	}


	$fname = ($_POST['fname']);
	$lname = ($_POST['lname']);
	$pnumber = ($_POST['pnumber']);
	$email = ($_POST['email']);
	$password = md5($_POST['password']);



	$eksekusi = mysqli_query($connect, "INSERT INTO user (id, fname, lname, pnumber, email, password) VALUES(null, '$fname','$lname', '$pnumber', '$email', '$password')");

if($eksekusi){
	header("Location: http://localhost/kaoshop");
}else{
	echo 'input data gagal';
}

mysqli_close($connect);
