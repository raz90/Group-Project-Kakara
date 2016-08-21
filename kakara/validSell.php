<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
include_once "connection.php";
	
				
			$category=$_POST['category'];
			$name=$_POST['name'];
			$price=$_POST['price'];
			$condition1=$_POST['condition1'];
			$location=$_POST['location'];
			$lga=$_POST['lga'];
			$about=$_POST['about'];
			$full_name=$_POST['full_name'];
			$email=$_POST['email'];
			$phone=$_POST['phone'];
			$bbm=$_POST['bbm'];
			$preferred=$_POST['preferred'];
			$password=$_POST['password'];
			
			$img_name = $_FILES['file']['name'];
			$temp = $_FILES['file']['tmp_name'];
		    $file_size = $_FILES['file']['size'];
            $file_type = $_FILES['file']['type'];
			
			if (empty($_POST['name']))
        $errors['name'] = 'Name is required.';

		
	if(isset($_FILES['file'])){
		$errors= array();
	
      

      
      if($file_size > 2097152) {
         $errors[]='File size is too large MB';
      }

      if($file_size < 2) {
         $errors[]='File Size is too small, please select another image';
      }
	  $check = getimagesize($_FILES["file"]["tmp_name"]);
		if($check == false) {
			 $error[] = "File is not an image.";
		}

      if(empty($errors)==true) {
         move_uploaded_file($temp, "images/".$img_name);
		$img_url  = "images/$img_name";
      }else{
         print_r($errors);
		 exit();
      }
	  
	}
	else {
		echo "Please upload an image";
		exit(); 
	}
	
		if (empty($lga))
		{
			echo "email cannot be empty";
			exit();
		}
		$sql_query = "INSERT INTO products (category, name, img_name, img_url, price, condition1, location, lga, about, full_name, email, phone, bbm, preferred, password, time) VALUES ('$category','$name', '$img_name','$img_url','$price','$condition1','$location','$lga','$about', '$full_name', '$email', '$phone', '$bbm', '$preferred', '$password', NOW() )" OR die (mysql_error());
		
		if(!get_magic_quotes_gpc())
		{
			$_POST['email'] = addslashes($_POST['email']);
		}
	
			$email = $_POST['email'];	
		
			 if (!mysql_query($sql_query))
			  {
				  echo"Something went wrong, could not save";
			  die('Error: ' . mysql_error());
			  }
			  else {
				  ?>
			  <script>
			  window.location.href="congrats.php"; 
			  </script>
			  <?php }   ?>
			  
</body>
</html>