<?php
	session_start(); 
	if(isset($_POST['Username']) && isset($_POST['Password'])){	
		$f= fopen( "Logins.txt", "r");
		while($s=fgets($f)){
			$tab=explode( '|', $s);
			if($tab[0]==$_POST['Username'] || $tab[2]==$_POST['Email'] ){
				echo "<center><h1>User Alerdy Exisit !!</h1></br> <h1>try Another One...</h1><center>";
				$var = -1;
				header( "refresh:2;url=Register.php" );	
			}
		}
		fclose($f);
		if($var!=-1){
			$f= fopen( "Logins.txt", "a");
			fputs($f,"\n");
			$s=$_POST['Username'].'|'.$_POST['Password'].'|'.$_POST['Email'];
			fputs($f,$s);
			fclose($f);
			$_SESSION['acces']="oui";  
		    	$_SESSION['nom']=$_POST['Username'];  
			echo "<center><h1>Register Complete !!</h1></br> <h1>Redirection...</h1><center>";
			header( "refresh:2;url=accueil.php" );	
		}
	}
	else{
		echo '<center><h1>You are Aren\'t Allowed here!!</h1></center>';
		header( "refresh:2;url=accueil.php" );
	}
?>
