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
					<h1><a href="index.html">KaoShop</a></h1>	
				</div>
			
			
				   <!-- Link -->
						<ul class="nav navbar-nav nav_1">
							
							<li><a href="index.html" style=text-decoration:none >Home</a></li>
							
							
							<li>

							<a href="products.html" style=text-decoration:none >Products</a>
							
							</li>

							<li>

							<a href="checkout.html" style=text-decoration:none >Pemesanan</a>
							
							</li>

							<li>
							
							<a href="account.html" style=text-decoration:none >Sign In</a>

							</li>
							
							<li class="last">
							
							<a href="contact.html" style=text-decoration:none >Contact</a>

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

		input[type=email], 
		input[type=password],
		input[type=fname],
		input[type=lname],
		input[type=gender],
		input[type=pnumber] {
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

	<h1>DATA ADMIN</h1>
	<a href="http://localhost/kaoshop/backend/admin/tambah.php">Tambah</a>
	<table border="1">
		<tr>
			<td>Userame</td>
			<td>Name</td>
			<td>Email</td>
			<td>Action</td>
		</tr>

		<!-- data yang diambil dari database -->

		<?php
			include '../koneksi.php';

			if ($ambilDataDB = mysqli_query($connect, 'SELECT * FROM admin')) {

			    /* fetch associative array */
			    while ($row = mysqli_fetch_assoc($ambilDataDB)) {
		?>
	    	<tr>
				<td><?php echo $row['username']?></td>
				<td><?php echo $row['nama']?></td>
				<td><?php echo $row['email']?></td>
				<td>
					<a href="http://localhost/kaoshop/backend/admin/ubah.php?id_admin=<?php echo $row['id_admin']?>">Ubah</a>
					|
					<a href="http://localhost/kaoshop/backend/admin/proses_hapus.php?id_admin=<?php echo $row['id_admin']?>">Hapus</a>
				</td>
			</tr>

		<?php
					
			    }
			}

		?>

	</table>


</body>
</html>
