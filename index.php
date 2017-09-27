<?php

	$username = "jeeva";
	$password = "simple";

	if(!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW']) || ($_SERVER['PHP_AUTH_USER']) != $username || ($_SERVER['PHP_AUTH_PW']) != $password){
		
		header('HTTP/1.1 401 Unauthorized');
		header("WWW-Authenticate: Basic realm='MyApplication'");
		exit('<p> Problem authenticating!');
	}
?>

<!DOCTYPE html>
<head>
<title> Title </title>
<link rel="stylesheet" href="main.css" />



</head>
<body> 
 

</form>

</body>
</html> 
