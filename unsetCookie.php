<?php
	setcookie("essaiCookie","",time()-3600);
	require_once('VueHtmlUtils.php');
	echo CoursPHP\Vue\VueHtmlUtils::enTeteHTML5("Suppression d un cookie",'UTF-8','myStyle.css');
	echo "<h1>suppression d un cookie</h1>"
	echo "<p><a href=\"retrieveCookie.php\">cliquez ici</a></p>";
	echo CoursPHP\Vue\VueHtmlUtils::finFichierHTML5();
?>