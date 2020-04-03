<?php	
	session_start(); 
	if(isset($_POST['Username']) && isset($_POST['Password'])){ 
	$f= fopen( "Logins.txt", "r");
	while($s=fgets($f)){
		$tab=explode( '|', $s);
		if($tab[0]==$_POST['Username'] && $tab[1]==$_POST['Password'] ){
			
			echo "<center><h1>Welcome Back!!</h1></br><center>";
			$var = -1;
			$_SESSION['acces']="oui";  
    			$_SESSION['nom']=$_POST['Username'];  
			header( "refresh:2;url=accueil.php" );	
		}
	}
	fclose($f);
	if($var!=-1){
	echo "<center><h1>Wrong Login!!</h1></br><center>";
	header( "refresh:2;url=Login.php" );	
	}
	}
	else{
		echo '<center><h1>You are Aren\'t Allowed here!!</h1></center>';
		header( "refresh:2;url=accueil.php" );
	}
?>
