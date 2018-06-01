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
	<style>
		table{
			width: 100%;
			text-align: center;

		}
		th, td {
			 text-align:center;
		    padding: 20px;
		}
		td{
			font-size: 15px;
		}
	</style>
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
	<h2 style="text-align: center;">YOUR CART</h2>
	<br><br>
	<?php
		$connect=mysql_connect("localhost","root","");// Establishing Connection with Server
		mysql_select_db("coffee",$connect); // Selecting Database from Server
		$SQL = "SELECT * FROM cart";
		$result = mysql_query($SQL);
	?>
		<table cellspacing="20">
			<tr>
				<th></th>
				<th>Price</th>
				<th>Quantity</th>
			</tr>
			<tr><hr></tr>
			
				
		<?php 
			$tot_price=0;
				 while($rows = mysql_fetch_array($result))
					{
						$name1 = str_replace('_', ' ', $rows['Name']);
						$name1=ucwords($name1);
						$delete_item=$rows['id'];
						$tot_price+=($rows['Price']*$rows['Qty']);
		?>

					
			<tr>
				<td>

				 	<a href="product_detail.php?title=<?php echo $name1?>" style="text-decoration: none"><?php echo $name1?></a> 
				 	<br>In Stock
				 	
				 	<br><a href="delete.php?id=<?php echo $delete_item?>" >Remove</a>
				 	
			 	</td>
				<td  align="center"><?php echo "$".$rows['Price']?></td>
				<td  align="center"><?php $qty=$rows['Qty']; echo $qty?></td>
			</tr>
			
			<?php } ?>
			
		</table>
		<br>
		<p align="center"><strong>Total Expenses: $</strong><?php echo $tot_price?>
		<?php
		$_SESSION['total']=$tot_price;
		?>
		<hr>
		
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