<?php
try{
	echo "<h1>Validation de la date</h1>";
    echo "La date saisie est: " . $_POST["jour"] . "/" . $_POST["mois"] . "/" . $_POST["annee"] . "<br/>";

    function anneeValide($annee) {
        if($annee % 4 == 0)  {
            echo "l'annee " . $annee . " est valid ";
            echo '<p style="color: green; display: inline-block"> DATE VALIDE </p>';
        } else {
            echo "l'annee " . $annee . " est non valide ";
            echo '<p style="color: green; "> DATE NON VALIDE </p>';
        }
    }
    
    echo anneeValide($_POST["annee"]);
	
}catch(exeception $e){
				echo ' l erreur est :$e';
			 }
}
    
?>