<?php
	echo "hello";
	require_once('VueHtmlUtils.php');
	echo \CourspHP\Vue\VueHtmlUtils::enTeteHTML5('erruer','UTF-8','myStyle.css');
	echo "<h1>erruer ajfadjf</h1>";
	echo "<p>exception recue".$e->getMessage()."</p>";
	echo \CoursPHP\Vue\VueHtmlUtils::finFichierHTML5();
?>