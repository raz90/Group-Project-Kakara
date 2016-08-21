<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
include_once "connection.php";
	
				
			$username=$_POST['username'];
			$password=$_POST['password'];
			$name=$_POST['name'];
		
			
			
		
		$sql_query = "INSERT INTO admin (username, password, name) VALUES ('$username','$password','$name')" OR die (mysql_error());
		
	
		
			 if (!mysql_query($sql_query))
			  {
			  die('Error: ' . mysql_error());
			  }
			  else {
				  $_SESSION["username"] = $username;
				  $_SESSION["password"] = $password; 
				  ?>
			  <script>
			  window.location.href="admin.php"; 
			  </script>
			  <?php }   ?>
			  
</body>
</html>