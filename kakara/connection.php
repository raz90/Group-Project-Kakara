<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$host="localhost"; // Host name 
$Username="root"; // Mysql username 
$Password=""; // Mysql password 
$db_name="kakara"; // Database name
$tbl_name="products";




// Connect to server and select database.
$con=mysql_connect("$host", "$Username", "$Password")or die("cannot connect"); 
$select=mysql_select_db("$db_name")or die("cannot select DB");
?>

</body>
</html>
