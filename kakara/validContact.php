<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
include_once "connection.php";
	
				
			$name=$_POST['name'];
			$email=$_POST['email'];
			$phone=$_POST['phone'];
			$message=$_POST['message'];
		
			
			
		
		$sql_query = "INSERT INTO contact (name, email, phone, message, time) VALUES ('$name','$email','$phone','$message', NOW())" OR die (mysql_error());
		
	
		
			 if (!mysql_query($sql_query))
			  {
			  die('Error: ' . mysql_error());
			  }
			  else {
				  ?>
			  <script>
				  window.location.href="msg.php"; 
			  </script>
			  <?php }   ?>
			  
</body>
</html>