<!DOCTYPE html>
<html>
<head>
	<title>KaoShop | Register</title>
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

	<h1>DATA REGISTER</h1>
	<a href="http://localhost/kaoshop/backend/Register/tambah.php">Tambah</a>
	<table border="1">
		<tr>
			<td>First Name</td>
			<td>Last Name</td>
			<td>Phone Number</td>
			<td>Email</td>
			<td>Action</td>
		</tr>

		<!-- data yang diambil dari database -->

		<?php
			include '../koneksi.php';

			if ($ambilDataDB = mysqli_query($connect, 'SELECT * FROM user')) {

			    /* fetch associative array */
			    while ($row = mysqli_fetch_assoc($ambilDataDB)) {
		?>
	    	<tr>
				<td><?php echo $row['fname']?></td>
				<td><?php echo $row['lname']?></td>
				<td><?php echo $row['pnumber']?></td>
				<td><?php echo $row['email']?></td>
				<td>
					<a href="http://localhost/kaoshop/backend/Register/ubah.php?id=<?php echo $row['id']?>">Ubah</a>
					|
					<a href="http://localhost/kaoshop/backend/Register/proses_hapus.php?id=<?php echo $row['id']?>">Hapus</a>
				</td>
			</tr>

		<?php
					
			    }
			}

		?>

	</table>


</body>
</html>
