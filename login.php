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
<hr>
			<div class="row">
			<div class="col-md-4 col-xs-8">
				
				<img class="logo" src="images/logo.png" style="margin-left: 30px">
			</div>
			<div class="col-md-8 col-xs-12">
					<ul class="user-menu" >	
						<li><a href="login.php">Login</a></li>		
						<li><a href="checkout.php">Checkout</a></li>							
						<li><a href="cart.php">Cart</a></li>
						<li><a href="index.php">Home</a></li>
					</ul>
			</div>
			</div>

			<hr style="margin-top: 30px; height: 1px;">
	<div class="row">
		<div class="col-xs-12">		
			<img src="images/carousel/banner.png" class="banner" style=" display: block; margin-right: auto; margin-left: auto; height:350px;    width:800px;    overflow:hidden;">
		</div>
	</div>
				<h2 style="text-align: center;">LOGIN</h2>
				<br><br>
	<div class="row">
		<div class="col-md-12 col-xs-12">
			<form method="post" style="text-align: center;">
					
					<div data-validate = "Enter username">
						<input type="text" name="name" placeholder="Username">
				
					</div>
					<br>
					<div data-validate="Enter password">
						<input type="password" name="pass" placeholder="Password">
				
					</div>
					<br>
					
					<div>
						<button name="login">
							Login
						</button>
					</div>
					<br>
					<div class="text-center p-t-90">
						<a class="txt1" href="#">
							Forgot Password?
						</a>
					</div>
					<br>
						<div class="text-center p-t-90">
						<a class="txt1" href="register.php">
							Create new account
						</a>
					</div>
					<br>
					<?php

						$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
						$db = mysql_select_db("coffee", $connection); // Selecting Database from Server
						
						if(isset($_POST['login'])){// Fetching variables of the form which travels in URL
							
							$name = $_POST['name'];
							$q="select * from login where username='".$name."'";
							$query = mysql_query($q);
									
							if($query === false){
							    throw new Exception(mysql_error($connection));
							}

							while($row = mysql_fetch_array($query))
								{
									if($_POST['name']==$row['username'] && $_POST['pass']==$row['password'])
											{	
												$_SESSION['loggedin']='1';
												$_SESSION['username']= $row['name'];
												header('Location: index.php');
											}
										else
										{
											echo "Login Failed!!";
										}
								}
								mysql_close($connection); // Closing Connection with Server						

						}
					?>
				</form>
		
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
