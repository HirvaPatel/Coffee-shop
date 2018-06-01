<!DOCTYPE html>
<html>
<head>
	<title>Coffee Shop</title>

	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<header>
		<div>
				<hr>
				<img class="logo" src="images/logo.png" style="margin-left: 30px">
					<ul class="user-menu" >	
						<li><a href="login.php">Login</a></li>		
						<li><a href="checkout.php">Checkout</a></li>							
						<li><a href="cart.php">Cart</a></li>
						<li><a href="index.php">Home</a></li>
					</ul>
		</div>
		<hr style="margin-top: 30px; height: 1px;">
		<a href="#scroll">Click to register</a>
		<img src="images/carousel/banner.png" class="banner" style=" display: block; margin-right: auto; margin-left: auto; height:350px;    width:800px;    overflow:hidden;">
	</header>

	<h2 style="text-align: center;">REGISTER</h2>
	<br><br>
	
			<div class="row">
			<div class="col-md-12 col-xs-12">
			<div id="scroll">
				<form method="POST" style="text-align: center;">
				
					<div class data-validate = "Enter fullname">
						<input type="text" name="name" placeholder="Full Name">
						
					</div>
					<br>
					<div class data-validate="Enter email">
						<input type="email" name="email" placeholder="Email">
						
					</div>
					<br>
					
					<div class data-validate="Enter username">
						<input type="text" name="username" placeholder="Username">
						
					</div>
					<br>
					<div data-validate="Enter password">
						<input type="password" name="pass" placeholder="Password">
						
					</div>
					<br>
					<div class data-validate="Enter password">
						<input type="password" name="repass" placeholder="Re-enter Password">
						
					</div>
					<br>
					<div>
						<div>
							<div></div>
							<button name="submit">
								Sign Up
							</button>
						</div>
					<br>
						<?php
 								$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
								$db = mysql_select_db("coffee", $connection); // Selecting Database from Server
							if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
								
								$name = $_POST['name'];
								$email = $_POST['email'];
								$username = $_POST['username'];
								$pass = $_POST['pass'];
								$repass = $_POST['repass'];
								if($name !=''||$email !=''){
								//Insert Query of SQL
									if($pass == $repass)
									{
										$query = mysql_query("insert into login(name, mail, username, password) values ('$name', '$email', '$username', '$repass')");
										echo("<script>location.href = 'login.php';</script>");
									}
									else
									{
										echo "Registeration Failed!!";
									}
								}
								mysql_close($connection); // Closing Connection with Server
							}
							?>
					</div>
					</div>
				</form>
				</div>
			</div>
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