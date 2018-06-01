<!DOCTYPE html>
<html>
<head>
<?php
	session_start();
?>
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
	</header>

	<h2 style="text-align: center;">PRODUCT DETAILS</h2>
	<br><br>		
	<?php
		$name=$_GET['title'];
		$connect=mysql_connect("localhost","root","");// Establishing Connection with Server
		mysql_select_db("coffee",$connect); // Selecting Database from Server

		$q="SELECT prize FROM menu WHERE product_name LIKE '$name'";
		$result=mysql_query($q);
		mysql_close($connect);
		
	?>		
	<section class="content">

	<div class="row" style="line-height: 1.6; font-size: 15px">
		<div class="col-md-6 col-xs-12">
		<img style="margin-left:30px;  width: 350px;height: 200px; border-style: double;" src="images/<?php echo $name.".jpg";?>">
		</div>
		<div class="col-md-6 col-xs-12">
		<form method="POST">
			<p style="float: right; margin-right: 500px">
			<strong>Product:</strong>  <?php
			$name1 = str_replace('_', ' ', $name);
			$name1=ucwords($name1);
			 echo $name1; ?>
			<br>
			<strong>Availability:</strong> In Stock
			<br>
			<strong>Prize:</strong> <?php while ($rows = mysql_fetch_array($result)) {
			
			$prize = $rows['prize'];
			print "$".$prize;
				} ?>
			<br>
			<strong>Qty:</strong> <input type="number" name="quantity" style="border-radius: 5px; width:3em">
			
			<input type="submit" name="submit" onclick="fun()" value="Add to Cart" style="border-radius: 5px; background-color: black; color: white; padding: 5px">
			
			<?php
				if(isset($_POST['submit']) && !empty($_POST['submit']) && isset($_SESSION['loggedin']))
				{	
					$connect1=mysql_connect("localhost","root","");// Establishing Connection with Server
					mysql_select_db("coffee",$connect1); // Selecting Database from Server
					$qty=$_POST['quantity'];
					$SQL = "INSERT INTO cart(Name, Price, Qty) VALUES ('$name', '$prize', '$qty')";
				    $result = mysql_query($SQL);
				    echo("<script>location.href = 'index.php';</script>");
				}
				
			?>
			</form>
			</p>
		</div>	
	</div>
		<div class="description">
		<h3 style="margin-left: 30px;">Description</h3>
		<hr>
			<p style="margin: 20px 60px 20px 20px; font-size: 15px">A caffè, is a chocolate-flavored variant of a caffè latte. Other commonly used spellings are mochaccino and also mochachino. The name is derived from the city of Yemen which was one of the centers of early coffee trade.<br>Caffè, in its most basic formulation, can also be referred to as hot chocolate with (e.g., a shot of) espresso added. Like cappuccino, caffè typically contain the distinctive milk froth on top, although, as is common with hot chocolate, they are sometimes served with whipped cream instead. They are usually topped with a dusting of either cinnamon or cocoa powder, and marshmallows may also be added on top for flavor and decoration.</p>
		</div>
	</section>
	<section class="footer">
				<div class="links" style="background-color: #444444;padding-top: 10px;">
					<ul>
						<li><a href="index.php" style="color: white;">Homepage</a></li>
						<li><a href="About.php"  style="color: white;">About</a></li>
						<li><a href="Contact.php" style="color: white;">Contact Us</a></li>
						<li><a href="cart.php" style="color: white;">Your Cart</a></li>
						<li><a href="login.php" style="color: white;">Login</a></li>
					</ul>
				<div class="copyright" style="background-color: black;margin-top: : 0px">
					<p style="padding-left: 40px; color: white">	&copy; COPYRIGHT 2018 ALL RIGHTS RESERVED</p>
				</div>
				</div>
			</section>
		
			<script type="text/javascript">
			function fun()
				{
					<?php if(!isset($_SESSION['loggedin'])){ ?>
						alert("<?php echo "First you have to login."?>");	
					<?php }else{ ?>
						alert("<?php echo $name1 ?> added to your Cart!");
					<?php }?>
					
				}
			</script>
</body>
</html>