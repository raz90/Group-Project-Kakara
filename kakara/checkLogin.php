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
$email =mysql_real_escape_string($_POST["email"]); 
$password = mysql_real_escape_string($_POST["password"]);

$sql="SELECT * FROM products WHERE email ='$email' and password='$password'";
$result= mysql_query($sql);

// Mysql_num_row is counting table row
$count= mysql_num_rows($result);

//If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
// Register $myusername, $mypassword and redirect to file "login_success.php"
$_SESSION["email"] = $email;
$_SESSION["password"] = $password; 

?>
<script type="text/javascript">
window.location.href="delete.php";
</script>
<?php
}
else {
	?>
	<script type="text/javascript">
	alert("Password or Email not correct");
	window.history.back();
	</script>

	<?php
}

ob_end_flush();

?>
</body>
</html>
