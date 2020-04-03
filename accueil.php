<?php
session_start();
if(isset($_SESSION['acces'])){
	echo '<div align="center"><h3>Welcome :'.$_SESSION['nom'].'</h3></div>';
	
}
else{
	header('Location: index.php');
}

?>
<!doctype html>
<html>
	<head>
		<title>Welcome At Home</title>
	</head>
	</body>	
		<div align="center">
		  <a href="logout.php">Logout</a>
		</div> 
	</body>

</html>
