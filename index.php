<html>
<?php
session_start();
?>
	<head><title>Coffee Shop</title>
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

						<li>
						<?php if(!isset($_SESSION['loggedin'])){ ?>
							<a href="login.php">Login</a>
						<?php }else{ ?>
							<a href="logout.php">Logout</a>
						<?php }?>
						</li>

						<li>
						<?php if(isset($_SESSION['loggedin'])){ if(!($_SESSION['username']=='admin')) {?>
						<a href="checkout.php">Checkout</a>
						<?php }else{?>
						<a href="customer_detail.php">Customer Details</a>
						<?php }}
						else{?>
						<a href="checkout.php">Checkout</a>
						<?php }?>
						</li>

						<li><a href="cart.php">Cart</a></li>
						<li><a href="index.php">Home</a></li>
					</ul>
					<?php if(isset($_SESSION['loggedin'])) {?>
					<p style="float: right; margin-right: 25px;" >Welcome <?php echo $_SESSION['username'] ."!!" ?></p>
					<?php }?>
			</div>
			<br>
				<hr style="margin-top: 30px; height: 1px;">
					
				<div class="container">
				  <br>
				  <div id="myCarousel" class="carousel slide" data-ride="carousel">
				    <!-- Indicators -->
				    <ol class="carousel-indicators">
				      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				      <li data-target="#myCarousel" data-slide-to="1"></li>
				       <li data-target="#myCarousel" data-slide-to="2"></li>
				    </ol>

				    <!-- Wrapper for slides -->
				    <div class="carousel-inner" role="listbox">

				      <div class="item active">
				        <img src="images/carousel/bg.jpg" alt="Coffee" style="display: block; margin-right: auto; margin-left: auto;height:350px;    width:800px;    overflow:hidden;">
				      </div>

				      <div class="item">
				        <img src="images/carousel/bg1.jpg" alt="Coffee" style="display: block; margin-right: auto; margin-left: auto;height:350px;    width:800px;    overflow:hidden;">
				      </div>

				       <div class="item">
				        <img src="images/carousel/bg2.png" alt="Coffee" style="display: block; margin-right: auto; margin-left: auto;height:350px;    width:800px;    overflow:hidden;">
				      </div>
				  
				    </div>

				    <!-- Left and right controls -->
				    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				      <span class="sr-only">Previous</span>
				    </a>
				    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				      <span class="sr-only">Next</span>
				    </a>
				  </div>
				</div>
			<section class="header_text" >
				<br/>Procaffeination (noun): <br/>the tendency to not start anything until you've had a cup of coffee.
			</section>
			<hr>
			<section class="main_content">
						<h4 style="text-align: center;">COFFEE MENU</h3>
									<ul class="products_images" style="display: inline">
												<li class="span3">
													<div class="product-box" class="col-lg-4 col-sm-6">
														<span class="sale_tag"></span>
														<p><a href="product_detail.php?title=mocha"><img src="images/mocha.jpg" style="height:150px;    width:200px;    overflow:hidden;" alt="" /></a></p>
														<a href="product_detail.php" class="title" style="padding-left: 80px;">Miracle Mocha</a><br/>
														<p class="price" style="padding-left: 100px;">$17.25</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box" class="col-lg-4 col-sm-6">
														<span class="sale_tag"></span>
														<p><a href="product_detail.php?title=vanilla_latte"><img src="images/vanilla_latte.jpg" style="height:150px;    width:200px;    overflow:hidden;" alt="" /></a></p>
														<a href="product_detail.php" class="title" style="padding-left: 80px;">Vanilla Latte</a><br/>
														<p class="price" style="padding-left: 100px;">$32.50</p>
													
													</div>
												</li>
												<li class="span3">
													<div class="product-box" class="col-lg-4 col-sm-6">
														<p><a href="product_detail.php?title=cafe_mocha"><img src="images/cafe_mocha.jpg"  style="height:150px;    width:200px;    overflow:hidden;" alt="" /></a></p>
														<a href="product_detail.php" class="title" style="padding-left: 80px;">Cafe Mocha</a><br/>
														<p class="price" style="padding-left: 100px;">$14.20</p>
													
													</div>
												</li>
												<li class="span3">
													<div class="product-box" class="col-lg-4 col-sm-6">
														<p><a href="product_detail.php?title=white_mocha"><img src="images/white_mocha.jpg"  style="height:150px;    width:200px;    overflow:hidden;" alt="" /></a></p>
														<a href="product_detail.php" class="title" style="padding-left: 80px;">White Mocha</a><br/>
														<p class="price" style="padding-left: 100px;">$31.45</p>
													</div>
													
												</li>
						
												<li class="span3">
													<div class="product-box" class="col-lg-4 col-sm-6">
														<p><a href="product_detail.php?title=cafe_latte"><img src="images/cafe_latte.jpg"  style="height:150px;    width:200px;    overflow:hidden;" alt="" /></a></p>
														<a href="product_detail.php" class="title" style="padding-left: 90px;">Cafe Latte</a><br/>
														<p class="price" style="padding-left: 100px;">$27.20</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box" class="col-lg-4 col-sm-6">
														<p><a href="product_detail.php?title=vanilla_creme"><img src="images/vanilla_creme.jpg" style="height:150px;    width:200px;    overflow:hidden;" alt="" /></a></p>
														<a href="product_detail.php" class="title" style="padding-left: 80px;">Vanilla Creme</a><br/>
														<p class="price" style="padding-left: 100px;">$40.25</p>
													</div>
													
												</li>
												<li class="span3">
													<div class="product-box" class="col-lg-4 col-sm-6">
														<p><a href="product_detail.php?title=hot_chocolate_frozen"><img src="images/hot_chocolate_frozen.jpg" style="height:150px;    width:200px;    overflow:hidden;" alt="" /></a></p>
														<a href="product_detail.php" class="title" style="padding-left: 60px;">Hot Chocolate Frozen</a><br/>
														<p class="price" style="padding-left: 100px;">$10.45</p>
													</div>
													
												</li>
												<li class="span3">
													<div class="product-box" class="col-lg-4 col-sm-6">
														<p><a href="product_detail.php?title=fruit_smoothie"><img src="images/fruit_smoothie.jpg" style="height:150px;    width:200px;    overflow:hidden;" alt="" /></a></p>
														<a href="product_detail.php" class="title" style="padding-left: 80px;">Fruit Smoothie</a><br/>
														<p class="price" style="padding-left: 100px;">$35.50</p>
													</div>
												</li>
									</ul>	

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
				<div class="copyright" style="background-color: black;margin-top: 0px">
					<p style="padding-left: 40px; color: white">	&copy; COPYRIGHT 2018 ALL RIGHTS RESERVED</p>
				</div>
				</div>
			</section>
	</body>
</html>
