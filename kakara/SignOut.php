<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Sign Out </title>
</head>

<body>
<?php 

session_start();
if(isset($_SESSION['email']))
 unset($_SESSION['email']);

?>
	<script type="text/javascript">
	
	window.location.href = "index.php";
	</script>
 

<!--<br>
<a href="login.html"> Login Here </a> -->

</body>
</html>