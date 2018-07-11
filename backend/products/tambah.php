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
		input[type=password],
		input[type=text]  {
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

	<h1>TAMBAH PRODUCT</h1>
	<center>
	<form method="post" action="http://localhost/kaoshop/backend/products/proses_tambah.php">
		<br/>
		<br/>

		<label>Product Name</label>
		<input type="text" placeholder="Product Name" name="name_product" required><br/><br/>

		<label>Category Name</label>
		<input type="text" placeholder="Category Name" name="category" required><br/><br/>

		<label>Price</label>
		<input type="text" placeholder="Price" name="price" required><br/><br/>

		<label>Photo</label>
		<input type="file" name="photo"><br/><br/>

		<button type="submit" name="simpan">Simpan</button>
		<button type="submit" name="batal" a href="http://localhost/kaoshop/backend/products/index.php">Batal</a>

	</form>

</body>
</html>