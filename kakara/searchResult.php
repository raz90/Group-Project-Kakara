<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<?php
mysql_connect("localhost", "root", "");
    mysql_select_db("kakara");
?>
<html>
<head>
<title>Kakara - Campus Market</title>
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
					<li><a href="help.php">help</a></li>
					<li><a href="contact.html">Contact</a></li>
					<li><a href="#">About Kakara</a></li>
				</ul>
			</div>
			<div class="top_left">
				<h6><span></span> Email Us : </h6>
			</div>
				<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--header-->
<div class="header_bg">
   <div class="container">
	<div class="header">
	  <div class="head-t">
		 <div class="logo">
			  <a href="index.html"><h1>Kakara <span>Online Market</span></h1> </a>
		 </div>
		<div class="header_right">
							 
		</div>
		<div class="clearfix"></div>	
	    </div>
		<!--start-header-menu-->
		<ul class="megamenu skyblue">
			<li class="active grid"><a class="color1" href="index.php">Home</a></li>
			<li><a class="color4" href="products.php">Buy</a>
			<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4></h4>
								<ul>
									<li><a class="color2" href="product.html">Mobile Phones and Gadgets</a></li>
									<li><a href="product.html">Computer Accessory</a></li>
									<li><a href="product.html">Games and Consoles</a></li>
									<li><a href="product.html">Bags & Wallets</a></li>
									<li><a href="product.html">Shoes</a></li>
									<li><a href="product.html">Watches $ Fashion Accessories</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4></h4>
								<ul>
									<li><a href="product.html">Clothes</a></li>
									<li><a href="product.html">Health & Beauty</a></li>
									<li><a href="product.html">Wedding</a></li>
									<li><a href="product.html">Home Appliances & Kitchen</a></li>
									<li><a href="product.html">Furniture & Decoration</a></li>
									<li><a href="product.html">Garden Items</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col2">
							<div class="h_nav">
								<h4></h4>
								<ul>
									<li><a href="product.html">Textbooks</a></li>
									<li><a href="product.html">Sports & Outdoors</a></li>
									<li><a href="product.html">Music/Movies/Books/Magazines</a></li>
									<li><a href="product.html">Pets</a></li>
									<li><a href="product.html">Music Instruments</a></li>
									<li><a href="product.html">Laptop bags</a></li>
								</ul>	
							</div>												
						</div>
						
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    		</div></li>
			<li class="grid"><a class="color2" href="#">Sell</a></li>
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
				<select style="margin:0,50;"class="address" name="category" required>
					<option>Select -CATEGORY-</option>
					<option value="Mobile Phones and Gadgets">Mobile Phones and Gadgets</option>
					<option value="Computer Accessory">Computer Accessory</option>
					<option value="Games and Consoles">Games and Consoles</option>
					<option value="Bags & Wallets">Bags & Wallets</option>
					<option value="Shoes">Shoes</option>
					<option value="Watches $ Fashion Accessories">Watches $ Fashion Accessories</option>
					<option value="Clothes">Clothes</option>
					<option value="Health & Beauty">Health & Beauty</option>
					<option value="Wedding">Wedding</option>
					<option value="Home Appliances & Kitchen">Home Appliances & Kitchen</option>
					<option value="Furniture & Decoration">Furniture & Decoration</option>
					<option value="Garden Items">Garden Items</option>
					<option value="Textbooks">Textbooks</option>
					<option value="Sports & Outdoors">Sports & Outdoors</option>
					<option value="Music/Movies/Books/Magazines">Music/Movies/Books/Magazines</option>
					<option value="Pets">Pets</option>
					<option value="Music Instruments">Music Instruments</option>
				</select>
				<select class="address" name="location" required>
					<option>Select -LOCATION-</option>
					<option value="Abia">Abia</option>
					<option value="Abuja FCT">Abuja FCT</option>
					<option value="Adamawa">Adamawa</option>
					<option value="Akwa Ibom">Akwa Ibom</option>
					<option value="Anambra">Anambra</option>
					<option value="Bauchi">Bauchi</option>
					<option value="Bayelsa">Bayelsa</option>
					<option value="Benue">Benue</option>
					<option value="Borno">Borno</option>
					<option value="Cross RIver">Cross RIver</option>
					<option value="Delta">Delta</option>
					<option value="Ebonyi">Ebonyi</option>
					<option value="Edo">Edo</option>
					<option value="Ekiti">Ekiti</option>
					<option value="Enugu">Enugu</option>
					<option value="Gombe">Gombe</option>
					<option value="Imo">Imo</option>
					<option value="Jigawa">Jigawa</option>
					<option value="Kaduna">Kaduna</option>
					<option value="Kano">Kano</option>
					<option value="Katsina">Katsina</option>
					<option value="Kebbi">Kebbi</option>
					<option value="Kogi">Kogi</option>
					<option value="Kwara">Kwara</option>
					<option value="Lagos">Lagos</option>
					<option value="Nassarawa">Nassarawa</option>
					<option value="Niger">Niger</option>
					<option value="Ogun">Ogun</option>
					<option value="Ondo">Ondo</option>
					<option value="Osun">Osun</option>
					<option value="Oyo">Oyo</option>
					<option value="Plateau">Plateau</option>
					<option value="Rivers">Rivers</option>
					<option value="Sokoto">Sokoto</option>
					<option value="Tataraba">Tataraba</option>
					<option value="Yobe">Yobe</option>
					<option value="Zamfara">Zamfara</option>
				</select>
			</div>
					<div class="products-grid-lft">
					<?php
					if (!empty($_REQUEST['term'])) {

					$term = mysql_real_escape_string($_REQUEST['term']);     

						 $query = mysql_query("SELECT * FROM products WHERE name OR location OR about LIKE '%".$term."%'")OR DIE (mysql_error());
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
					}?>
						<div class="products-grd">
							<div class="p-one simpleCart_shelfItem prd">
								<a href="single.html">
										<img src="images/p1.jpg" alt="" class="img-responsive" />
								</a>
								<h4>New style Bag</h4>
								<p><a class="item_add" href="#"><i class="glyphicon glyphicon-shopping-cart"></i> <span class=" item_price valsa">$729</span></a></p>
								<div class="pro-grd">
									<a href="single.html">Quick View</a>
								</div>
							</div>	
						</div>
						<div class="products-grd">
							<div class="p-one simpleCart_shelfItem prd">
								<a href="single.html">
										<img src="images/p3.jpg" alt="" class="img-responsive" />
								</a>
								<h4>Rim Frames</h4>
								<p><a class="item_add" href="#"><i class="glyphicon glyphicon-shopping-cart"></i> <span class=" item_price valsa">$729</span></a></p>
								<div class="pro-grd">
									<a href="single.html">Quick View</a>
								</div>
							</div>	
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="products-grid-lft">
						<div class="products-grd">
							<div class="p-one simpleCart_shelfItem prd">
								<a href="single.html">
										<img src="images/p2.jpg" alt="" class="img-responsive" />
								</a>
								<h4>Running Shoes</h4>
								<p><a class="item_add" href="#"><i class="glyphicon glyphicon-shopping-cart"></i> <span class=" item_price valsa">$729</span></a></p>
								<div class="pro-grd">
									<a href="single.html">Quick View</a>
								</div>
							</div>	
						</div>
						<div class="products-grd">
							<div class="p-one simpleCart_shelfItem prd">
								<a href="single.html">
										<img src="images/p7.jpg" alt="" class="img-responsive" />
								</a>
								<h4>Elevation Jacket</h4>
								<p><a class="item_add" href="#"><i class="glyphicon glyphicon-shopping-cart"></i> <span class=" item_price valsa">$729</span></a></p>
								<div class="pro-grd">
									<a href="single.html">Quick View</a>
								</div>
							</div>	
						</div>
						<div class="products-grd">
							<div class="p-one simpleCart_shelfItem prd">
								<a href="single.html">
										<img src="images/p9.jpg" alt="" class="img-responsive" />
								</a>
								<h4>Lifestyle Shoes</h4>
								<p><a class="item_add" href="#"><i class="glyphicon glyphicon-shopping-cart"></i> <span class=" item_price valsa">$729</span></a></p>
								<div class="pro-grd">
									<a href="single.html">Quick View</a>
								</div>
							</div>	
						</div>
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