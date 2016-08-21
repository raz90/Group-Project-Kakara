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
	  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="magic.js"></script> <!-- load our javascript file -->
	<!--//web-fonts-->
	 <script src="js/scripts.js" type="text/javascript"></script>
	<script src="js/modernizr.custom.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript" src="js/my_java.js"></script>
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
			<li  class="active grid" class="grid"><a class="color2" href="sell.php">Sell</a></li>
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
<!--account-->
   <div class="account">
	  <div class="container">
	       <div class="account-bottom">
				<div class="col-md-6 account-left">
					<form id="myForm" action="validSell.php" method="post" enctype="multipart/form-data">
					<div class="account-top heading">
						<h3>Advertise</h3>
					</div>
					<div style="color:red;" id="ack"></div>
					<div class="address"><select class="address" name="category" required>
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
					</div>				
					
					<div class="address">
						<span>Name of Item</span>
						<input type="text" name="name" required>
					</div>
					<div style="address">
					 <p>Upload Image of Item<input type="file" name="file" id="file" onchange="readURL(this);" accept="image/*" />
					 </div>
					 <img src="images/avatar.jpg" id="blah" alt="your image" /></p>
																	<script>
																		 function readURL(input) {
																			if (input.files && input.files[0]) {
																				var reader = new FileReader();

																				reader.onload = function (e) {
																					$('#blah')
																						.attr('src', e.target.result)
																						.width(150)
																						.height(200);
																				};

																				reader.readAsDataURL(input.files[0]);
																			}
																		}
																	</script>
					<div class="address">
						<span>Price in Naira</span>
						<input type="text" name="price" required>
					</div>
					<div class="address">
						<span>Condition</span>
						<input type="radio" name="condition1" value="Second Hand (used)" checked>Second Hand (used)<br />
						<input type="radio" name="condition1" value="New">New
					</div>
					
					<div class="address"><select class="address" name="location" required>
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
					<option value="Taraba">Taraba</option>
					<option value="Yobe">Yobe</option>
					<option value="Zamfara">Zamfara</option>
				</select></div>
					 <div class="address">
						<span>Your City/Town</span>
						<input type="text" name="lga" required>
					</div>
					
					<span>Short Description About Your Product</span><textarea class="contact textarea" rows="4" cols="50" name="about" id="address" required></textarea><br class="clear:both"/><br class="clear:both"/>
						<h3>Your Details</h3>
					<div class="address">
						<span>Your Name</span>
						<input type="text" name="full_name" required>
					</div>
					<div class="address">
						<span>Email Address</span>
						<input type="text" name="email" required>
					</div>					
					<div class="address">
						<span>Phone Number</span>
						<input type="text" name="phone" required>
					</div>
					
					<div class="address">
						<span>BBM Pin (Optional)</span>
						<input type="text" name="bbm">
					</div>					
					
					<div class="address">
						<span>Contact Preference </span>
						<input type="radio" name="preferred" value="Call/SMS ONLY" checked>Call/SMS Preferred<br />
						<input type="radio" name="preferred" value="Whatsapp Preferred" >Whatsapp Preferred<br />
						<input type="radio" name="preferred" value="BBM Preferred">BBM Preferred<br />
						
					</div>
					
					<div class="address">
						<span>Password</span>
						<input type="password"  name="password" id="password" required>
					</div>
					<div class="address">
						<span>Re-enter Password</span>
						<input type="password" name="password2" id="password2" required>
					</div>
					<div class="address new">
						<input type="submit" value="submit" >
					</div>
					</form>
				</div> 
				<div class="col-md-6 account-left second">
					<form>
						<div class="account-top heading">
							<h3>Tips</h3>
						</div>
						<div class="address">
							<p>Do not forget to select a category</p>
							<p>The name of your item should be simple (i.e Samsung S6 Edge)</p>
							<p>To upload a picture of your product click on the choose file button.</p>
							<p>Do not include the word "naira" on the price input box.</p>
							<p>When you are done selling your product simple search for it and click on delete. or Login to delete your items.</p>
						</div>
					
					 </form>
					</div>
				 </div>
				<div class="clearfix"></div>
			</div>
	  </div>
<!-- checkout -->
	 <!--start-bottom-->
		     <!--start-image-cursuals-->
         
 <!--//end-bottom-->
		<!--start-footer-->
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
</html