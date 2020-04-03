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
		<title>Login</title>
	</head>
	<body>
		<form method="POST" action="authentificationLogin.php" onsubmit="return PasswordTest(this);">
			<div align="center">			
			<ul>
				<dl><input type="txt" name="Username" placeholder="Username" required></input></dl>
				<dl><input type="password" name="Password" id="pwd1" placeholder="Password" required></input></dl>
				<dl><input type="submit"></input></dl>
			</ul>
			</div>	
		</form>
	</body>
</html>
