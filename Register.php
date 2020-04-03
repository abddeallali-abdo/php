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
		<title>Register</title>
		<script type="text/javascript">
			  function PasswordTest(form)
			  {
				if(form.pwd1.value != "" && form.pwd1.value == form.pwd2.value) {
				 
				     	if(form.pwd1.value.length < 8) {
						alert("Error: Password must contain at least eight characters!");
						form.pwd1.focus();
						return false;
					}

			      		tab = /[0-9]/;
			      		if(!tab.test(form.pwd1.value)) {
						alert("Error: password must contain at least one number (0-9)!");
						form.pwd1.focus();
						return false;
			      		}

					tab = /[A-Z]/;
					if(!tab.test(form.pwd1.value)) {
						alert("Error: password must contain at least one uppercase letter (A-Z)!");
						form.pwd1.focus();
						return false;
			     		}
					
					tab = /(\*|\&|\@|\*|\!|\?|\*|\#|\%)/;
					if(!tab.test(form.pwd1.value)) {
						alert("Error: password must contain at least special caratere (*&%$#@ !??/) ");
						form.pwd1.focus();
						return false;
			     		}
					
				}
				else {
					if(form.pwd1.value != form.pwd2.value) {
						alert("Error: Not the same password !");
						form.pwd1.focus();
						return false;
					}
					else{
			      			alert("Error: Please check that you've entered and confirmed your password!");
			     			form.pwd1.focus();
					}
			      		return false;
			    	}

			    return true;
			  }

		</script>
	</head>
	<body>
		<form method="POST" action="authentificationRegister.php" onsubmit="return PasswordTest(this);">
			<div align="center">			
			<ul>
				<dl><input type="txt" name="Username" placeholder="Username" required></input></dl>
				<dl><input type="email" name="Email" placeholder="@Email" required></input></dl>
				<dl><input type="password" name="Password" id="pwd1" placeholder="Password" required></input></dl>
				<dl><input type="password" id="pwd2" placeholder="Repete Password" required></input></dl>
				<dl><input type="submit"></input></dl>
			</ul>
			</div>	
		</form>
	</body>
</html>
