<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<?php
mysql_connect("adobanyi91.fatcowmysql.com", "adobanyi91", "Adobanyi@912");
    mysql_select_db("kakara");
?>
<html>
<head>
<title>Kakara - Online Market</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Nuevo Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	<script type="applijegleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<!-- Custom Theme files -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />	
	<script src="js/jquery-1.11.1.min.js"></script>
	<!-- start menu -->
	<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
	<script type="text/javascript" src="js/megamenu.js"></script>
	<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
	<script src="js/menu_jquery.js"></script>
	<script src="js/simpleCart.min.js"> </script>
	<!--web-fonts-->
	 <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,300italic,600,700' rel='stylesheet' type='text/css'>
	 <link href='//fonts.googleapis.com/css?family=Roboto+Slab:300,400,700' rel='stylesheet' type='text/css'>
	<!--//web-fonts-->
	 <script src="js/scripts.js" type="text/javascript"></script>
	<script src="js/modernizr.custom.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!--/script-->
	<script type="text/javascript">
				jQuery(document).ready(function($) {
					$(".scroll").click(function(event){		
						event.preventDefault();
						$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
					});
				});
	</script>
</head>
<body>
	<!--start-home-->
	<div class="top_bg" id="home">
		<div class="container">
			<div class="header_top">
				<div class="top_right">
					<ul>
						<li><a href="contact.php">help</a></li>
						<li><a href="contact.php">Contact</a></li>
						<li><a href="#">About Kakara</a></li>
					</ul>
				</div>
				<div class="top_left">
					<h6>Email Us :<span style="text-transform:lowercase"> kakara.nigeria@yahoo.com</span> </h6>
				</div>
					<div class="clearfix"></div>
			</div>
		</div>
	</div>
<!--header-->
<div class="header_bg">
   <div class="container">
	<div class="header">
	  <div class="head-t">
		 <div class="logo">
			  <a href="index.php"><h1>Kakara <span>Online Market</span></h1> </a>
		 </div>
		<div class="header_right">
							 
		</div>
		<div class="clearfix"></div>	
	    </div>
		<!--start-header-menu-->
		<ul class="megamenu skyblue">
			<li><a class="color1" href="index.php">Home</a></li>
			<li><a class="color4" href="products.php">Buy</a></li>
			<li class="grid"><a class="color2" href="sell.php">Sell</a></li>
			<li><a class="color4" href="login.php">Delete Your Item</a></li>
			<li style="float:right;" class="">
			<form method="post"  action="products.php"> 
				Search: <input type="text" name="term" />
				<input type="submit" value="Submit" /> 
			</form> 
			</li>
			<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
			</div>
			 </ul> 
	
	</div>			
	</div>
</div>
 <!--start-content-->
 
<!--products-->
	<div class="products">
		<div class="container">
			<div class="products-grids">
				<div class="col-md-10 products-grid-right">
					<div style="width:100%; paddin:auto; margin:auto; position:auto; text-align:center;">
			
			</div>
		
			<div class="products-grid-lft">
			
				<?php 	
					if (!empty($_REQUEST['term'])) {

					$term = mysql_real_escape_string($_REQUEST['term']);     

						 $query = mysql_query("SELECT * FROM products WHERE name LIKE '%".$term."%' OR location LIKE '%".$term."%' ")OR DIE (mysql_error());
						 $num_rows = mysql_num_rows($query);
						 if ($num_rows!=0){
							while ($row = mysql_fetch_assoc($query))
							{
								$id = $row['id'];
								$category = $row['category'];
								$name = $row['name'];
								$img_name = $row['img_name'];
								$img_url = $row['img_url'];
								$price = $row['price'];
								$condition1 = $row['condition1'];
								$location = $row['location'];
								$lga = $row['lga'];
								$about = $row['about'];
								$full_name = $row['full_name'];
								$email = $row['email'];
								$phone = $row['phone'];
								$bbm = $row['bbm'];
								$preferred = $row['preferred'];
								$password = $row['password'];
								$time = $row['time'];
							?>
							<div class="products-grd">
								<div class="p-one simpleCart_shelfItem prd">
									<?php echo "<a href='item.php?id=$id'>" ?>
											<img style="height:280px; width:280px;" src="<?php echo $img_url?>" alt="" class="img-responsive" />
									</a>
									<h4><?php echo $name ?></h4>
									<p><a class="item_add" href="#"><i class="glyphicon glyphicon-shopping-cart"></i> <span class=" item_price valsa">&#8358;<?php echo $price ?></span></a></p>
									<div class="pro-grd">
										<?php echo "<a href='item.php?id=$id'>" ?> View Details</a>
									</div>
								</div>	
							</div>
							 <?php }
						 }
						else if($num_rows==0) {echo "sorry no item found. please try expanding your search (i.e description of the item)";}
					}
						 else if(isset($_POST['category'])){
						 $category = $_POST['category'];
						 $query = mysql_query("SELECT * FROM products WHERE category ='$category' ")OR DIE (mysql_error());
						while ($row = mysql_fetch_assoc($query))
						{
							$id = $row['id'];
							$category = $row['category'];
							$name = $row['name'];
							$img_name = $row['img_name'];
							$img_url = $row['img_url'];
							$price = $row['price'];
							$condition1 = $row['condition1'];
							$location = $row['location'];
							$lga = $row['lga'];
							$about = $row['about'];
							$full_name = $row['full_name'];
							$email = $row['email'];
							$phone = $row['phone'];
							$bbm = $row['bbm'];
							$preferred = $row['preferred'];
							$password = $row['password'];
							$time = $row['time'];
						?>
						<div class="products-grd">
							<div class="p-one simpleCart_shelfItem prd">
								<?php echo "<a href='item.php?id=$id'>" ?>
										<img style="height:280px; width:280px;" src="<?php echo $img_url?>" alt="" class="img-responsive" />
								</a>
								<h4><?php echo $name ?></h4>
								<p><a class="item_add" href="#"><i class="glyphicon glyphicon-shopping-cart"></i> <span class=" item_price valsa">&#8358;<?php echo $price ?></span></a></p>
								<div class="pro-grd">
									<?php echo "<a href='item.php?id=$id'>" ?> View Details</a>
								</div>
							</div>	
						</div>
						 <?php } }else if (isset($_POST['location'])){
							  $location = $_POST['location'];
							$query = mysql_query("SELECT * FROM products WHERE location = '$location' AND category ='$category' ")OR DIE (mysql_error());
						while ($row = mysql_fetch_assoc($query))
						{
							$id = $row['id'];
							$category = $row['category'];
							$name = $row['name'];
							$img_name = $row['img_name'];
							$img_url = $row['img_url'];
							$price = $row['price'];
							$condition1 = $row['condition1'];
							$location = $row['location'];
							$lga = $row['lga'];
							$about = $row['about'];
							$full_name = $row['full_name'];
							$email = $row['email'];
							$phone = $row['phone'];
							$bbm = $row['bbm'];
							$preferred = $row['preferred'];
							$password = $row['password'];
							$time = $row['time'];
						?>
						<div class="products-grd">
							<div class="p-one simpleCart_shelfItem prd">
								<?php echo "<a href='item.php?id=$id'>" ?>
										<img style="height:280px; width:280px;" src="<?php echo $img_url?>" alt="" class="img-responsive" />
								</a>
								<h4><?php echo $name ?></h4>
								<p><a class="item_add" href="#"><i class="glyphicon glyphicon-shopping-cart"></i> <span class=" item_price valsa">&#8358;<?php echo $price ?></span></a></p>
								<div class="pro-grd">
									<?php echo "<a href='item.php?id=$id'>" ?> View Details</a>
								</div>
							</div>	
						</div>  
						 <?php } }else{?>
							 
						<div class="products-grd">
							<div style="width:500px; text-align:center;" class="p-one simpleCart_shelfItem prd">
								<h2 style="width:100%;">Congratulations!!! your item has being placed.<h2>
							</div>	
							<h3>Click <a href="login.php">HERE to Login </a> and view your product.</h3>
						 </div>  <?php }?> 
						
						<div class="clearfix"> </div>
					</div>
					
					
				</div>
			
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
<!-- //products -->
	  <!--start-image-cursuals-->
		  <div class="mid-content"> 
            <div class="container"> 
			  <div class="middle">
			    <div class="mid-top"> 
			      <h3>Advertise Here</h3>
				  <p>click here to advertise on this site</p>
			    </div>
			 </div>
	       </div>
		 </div>
		  <!--start-bottom-->
		   <!--start-image-cursuals-->
           
 <!--//end-bottom-->
		<!--start-footer-->
	    
	<ul class="socials">
				    <li><a class="soc1" href="#"></a></li>
				    <li><a class="soc2" href="#"></a></li>
				    <li><a class="soc3" href="#"></a></li>
				</ul>
	 <!--/start-copyright-->
	 <div class="copy">
		<div class="container">
			<p>&copy; 2015 Kakara Online Market. All Rights Reserved </p>
		</div>
	</div>
	 <!--//end-copyright-->
	<!--end-footer-->
 <!--//end-content-->
    	<!--start-smooth-scrolling-->
						<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>


</body>
</html>