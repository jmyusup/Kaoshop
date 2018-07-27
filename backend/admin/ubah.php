<!DOCTYPE html>
<html>
<head>
	<title>KaoShop | Ubah</title>
	<!--theme-style-->
<link href="../../css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--header-->
<div class="header">
	<div class="header-top">
		<div class="container">
				<div class="col-sm-4 logo animated wow fadeInLeft" data-wow-delay=".5s">
					<h1><a href="http://localhost/kaoshop/backend/home.php">KaoShop</a></h1>	
				</div>
			
			
				   <!-- Link -->
						<ul class="nav navbar-nav nav_1">
							
							<li><a href="http://localhost/kaoshop/backend/home.php" style=text-decoration:none >Home</a></li>
							
							
							<li>

							<a href="http://localhost/kaoshop/backend/products/index.php" style=text-decoration:none >Products</a>
							
							</li>

							<li>

							<a href= "http://localhost/kaoshop/backend/Register/index.php" style=text-decoration:none >Register</a>
							
							</li>

							<li>
							
							<a href="http://localhost/kaoshop/backend/admin/index.php" style=text-decoration:none >Admin</a>

							</li>
							
						</ul>
					 </div>
				  
				</nav>
			</div>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
		body{
			font-family: sans-serif;
		}
		
		form {
			border: 3px solid #f1f1f1;
		}
		
		label {
			font-size: 20px;
			position: relative;
			display: block;
			text-align: left;
			width: 500px;
			height: 30px;
		}

		input {
			width: 500px;
    		padding: 12px 20px;
    		margin: 8px 0;
    		display: inline-block;
    		border: 1px solid #ccc;
    		box-sizing: border-box;
		}

		button {
			width: 100px;
			height: 40px; 
			background-color: black; 
			color: white;
		}
		

	
	</style>
</head>
<body>

	<h1>UBAH ADMIN</h1>
	<center>
	<form method="post" action="http://localhost/kaoshop/backend/admin/proses_ubah.php">
		<br/>
		<br/>

		<?php
			include '../koneksi.php';

			$id_admin = $_GET['id_admin'];

			$ambilDataSesuaiID = mysqli_query($connect, "SELECT * FROM admin WHERE id_admin = '$id_admin'");

			$data = mysqli_fetch_assoc($ambilDataSesuaiID);
		?>
		<label>USERNAME</label>
		<input type="text" placeholder="Enter username" name="username" value="<?php echo $data['username']; ?>" required><br/><br/>

		<label>NAME</label>
		<input type="text" placeholder="Enter Name" name="lname" value="<?php echo $data['nama']; ?>" required><br/><br/>


		<label>EMAIL</label>
		<input type="email" placeholder="Enter Email" name="email" value="<?php echo $data['email']; ?>" required><br/><br/>
		<label>PASSWORD</label>
		<input type="password" placeholder="Enter Password" name="password" value="<?php echo $data['password']; ?>" required><br/><br/>

		<input type="hidden" name="id_admin" value="<?php echo $data['id_admin']; ?>">

		<button type="submit" name="simpan">Simpan</button>
		<button type="submit" name="simpan" a href="http://localhost/kaoshop/backend/user/index.php">Batal</a>

	</form>

</body>
</html>