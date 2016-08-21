<!DOCTYPE html >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
session_start();
ob_start();

include_once "connection.php";

// details sent from form 
$username = mysql_real_escape_string($_POST["username"]); 
$password = mysql_real_escape_string($_POST["password"]);

$sql="SELECT * FROM admin WHERE username='$username' and password='$password'";
$result	= mysql_query($sql);

// Mysql_num_row is counting table row
$count= mysql_num_rows($result);

//If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
// Register $myusername, $mypassword and redirect to file "login_success.php"
$_SESSION["username"] = $username;
$_SESSION["password"] = $password; 

?>
<script type="text/javascript">
alert("Login Successful");
window.location.href = "admin.php";
</script>
<?php
}
else {
	?>
	<script type="text/javascript">
	alert("You Are not Authorized");
	window.history.back();
	</script>
	
	<?php
}

ob_end_flush();

?>
</body>
</html>
