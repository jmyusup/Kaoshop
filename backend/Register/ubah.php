<!DOCTYPE html>
<html>
<head>
	<title>KaoShop | Login</title>
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
		input[type=password] {
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

	<h1>UBAH PRODUCT</h1>
	<center>
	<form method="post" action="http://localhost/kaoshop/backend/register/proses_tambah.php">
		<br/>
		<br/>

		<?php
			include '../koneksi.php';

			$id = $_GET['id'];

			$ambilDataSesuaiID = mysqli_query($connect, "SELECT * FROM user WHERE id = '$id'");

			$data = mysqli_fetch_assoc($ambilDataSesuaiID);
		?>
		<label>FIRST NAME</label>
		<input type="text" placeholder="Enter Firstname" name="fname" value="<?php echo $data['fname']; ?>" required><br/><br/>

		<label>LAST NAME</label>
		<input type="text" placeholder="Enter Lastname" name="lname" value="<?php echo $data['lname']; ?>" required><br/><br/>

		<label>PHONE NUMBER</label>
		<input type="text" placeholder="Enter Phone Number" name="pnumber" value="<?php echo $data['pnumber']; ?>" required><br/><br/>

		<label>EMAIL</label>
		<input type="email" placeholder="Enter Email" name="email" value="<?php echo $data['email']; ?>" required><br/><br/>
		<label>PASSWORD</label>
		<input type="password" placeholder="Enter Password" name="password" value="<?php echo $data['password']; ?>" required><br/><br/>

		<input type="hidden" name="id" value="<?php echo $data['id']; ?>">

		<button type="submit" name="simpan">Simpan</button>
		<button type="submit" name="simpan" a href="http://localhost/kaoshop/backend/register/index.php">Batal</a>

	</form>

</body>
</html>