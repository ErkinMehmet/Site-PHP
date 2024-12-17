<?php
	if (isset($_COOKIE['essaiCookie'])){
	   $valeur=$_COOKIE['essaieCookie'];
	   $valeur=filter_var($valeur,FILTER_SANITIZE_STRING);
        }else{
	   $valeur="Je suis la valeur dans le cookie: ".time();
	}
	setcookie("essaieCookie",$valeur,time()+15*60)
	require_once('VueHtmlHTML5.php');
	echo CoursPHP\Vue\VueHtmlUtils::enTeteHtml5("Prolongement d un cookie",'UTF-8','myStyle.css');
	echo "<h1>prolongement d un cookie</h1>"
	echo "<p><a href=\"".basename($SERVER[REQUEST_URI],".php").".php\")>cliquez  ici</a></p>"
	echo CoursPHP\Vue\VueHtmlUtils::finFichierHTML5();
?>