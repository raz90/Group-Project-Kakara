<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
	include_once "connection.php";
	
		session_start();
	if (isset($_SESSION['email']))
					{ 
						$email=$_SESSION['email'];
	
		if(isset($_GET['id']))
	{
		$id = $_GET['id'];
				
			  $sql_query = "DELETE FROM products WHERE id = '$id' ";
								
								if (!mysql_query($sql_query))
									  {
									  die('Error: ' . mysql_error());
									  }
									  else { ?>
									
			  <script>
			  alert("Deleted Sucesfully");
			  window.history.back();
			  </script>
					<?php }		} }else { ?>
	<script type="text/javascript">
    window.location.href="login.php";
	</script>

	<?php }?>

</body>
</html>