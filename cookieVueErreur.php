<?php
	echo Vue\VueHtmlUtils::enTeteHTML5("Probleme de recuperation d un cookie",'UTF-8','myStyle');
	echo "<h1>erreur de recuperation de cookie</h1>";
	echo "<p>";
	foreach ($dataError as $field=>$message){
		echo "<i>".$field."</i>:".$message."<br/>";
	}
	echo "</p>";
	echo Vue\VueHtmlUtils::finFichierHTML5();
?>