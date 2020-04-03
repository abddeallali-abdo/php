<?php
  try{
	  
  
    $file1 = fopen("commandes.txt", "r");
    $v1 = fopen("pscde01_CLI1001.txt", "w+");
    $v2 = fopen("psccl01_CLI1004.txt", "w+");
    while(!feof($file1)) {
        $file2 = fgets($file1);
        $fil = explode("|", $file2);
        if($fil[1] == "CLI1001") {
            for ($i=0; $i < count($fil); $i++) { 
                fwrite($v1, $fil[$i] . "|");
            }
            fwrite($v1, "\n");
        } else if($fil[1] == "CLI1004") {
            for ($i=0; $i < count($fil); $i++) { 
                fwrite($v2, $fil[$i] . "|");
            }
            fwrite($v2, "\n");
        }
    }
    fclose($file1);
	
  } catch(exeception $e){
				echo ' l erreur est :$e';
			 }
?>