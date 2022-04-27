<?php 
$DIL=$DILAYAR['Dil'];
define("SYSTEM_LANG", "$DIL");
	switch(SYSTEM_LANG){
		case "TR":
			include "turkce.php";
			break;
		case "EN":
			include "ingilizce.php";
			break;
		case "DE":
			include "almanca.php";
			break;
		case "FR":
			include "fransizca.php";
			break;
		default:
			include "turkce.php";
	}
?>