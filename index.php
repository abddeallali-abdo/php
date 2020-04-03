<?php
session_start();
if(isset($_SESSION['acces'])){
    if($_SESSION['acces']="oui"){ 
	header('Location: accueil.php');
    }
}

?>
<!doctype html>
<html>
	<head>
		<title>Welcome At Home</title>
	</head>
	</body>	
		<div align="center">
			<a href="Login.php">Login</a>
			<a href="Register.php">Register</a>
		</div>	
	</body>

</html>
