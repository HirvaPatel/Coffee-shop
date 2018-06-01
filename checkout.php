<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>
	<title>Coffee Shop</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div>
			<hr>
				<img class="logo" src="images/logo.png" style="margin-left: 30px">
					<ul class="user-menu" >	
						<li><?php if(!isset($_SESSION['loggedin'])){ ?>
							<a href="login.php">Login</a>
						<?php }else{ ?>
							<a href="logout.php">Logout</a>
						<?php }?></li>		
						<li><a href="checkout.php">Checkout</a></li>							
						<li><a href="cart.php">Cart</a></li>
						<li><a href="index.php">Home</a></li>
					</ul>
		</div>
			<hr style="margin-top: 30px; height: 1px;">
		<div class="row">
			<div class="col-xs-12">		
				<img src="images/carousel/banner.png" class="banner" style=" display: block; margin-right: auto; margin-left: auto; height:350px;    width:800px;    overflow:hidden;">
			</div>
		</div>
		<br><br>
	<p align="center">Before Logging out you need to pay the bill.<br>Your <strong>Total Expenses:</strong> $<?php echo $_SESSION['total']?></p>

	<?php
	session_unset();
	?>
	<br><br><br>
	<section class="footer">
				<div class="links" style="background-color: #444444;padding-top: 10px;">
					<ul>
						<li><a href="index.php" style="color: white;">Homepage</a></li>
						<li><a href="About.php"  style="color: white;">About</a></li>
	
					<li><a href="Contact.php" style="color: white;">Contact Us</a></li>
						<li><a href="cart.php" style="color: white;">Your Cart</a></li>
						<li><a href="login.php" style="color: white;">Login</a></li>
					</ul>
					<div class="copyright" style="background-color: black;margin-top: 0px">
						<p style="padding-left: 40px; color: white">	&copy; COPYRIGHT 2018 ALL RIGHTS RESERVED</p>
					</div>
				</div>
		</section>
</body>
</html>