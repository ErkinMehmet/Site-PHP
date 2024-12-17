<?php
	echo "hi1";
	require_once(dirname(__FILE__).'/VueHtmlUtils.php');
	require_once(dirname(__FILE__).'/AdresseView.php');
	echo CoursPHP\Vue\VueHtmlUtils::enTeteHTML5('Ma premiere classe PHP','UTF-8','myStyle.css');
	echo "<h1>test de classe</h1>";
	echo "<p>";
	echo "<strong>telephone </strong>".$telephone->toHTML()."<br/>";
	echo "<strong>adresse au format compact$nbsp;:</strong><br/>".CoursPHP\Vue\AdresseView::getHtmlCompact($adresse1)."<br/>";
	echo CoursPHP\Vue\AdresseView::getHtmlDevelopped($adresse2)."<br/>";
	echo "</p>";
	echo CoursPHP\Vue\VueHtmlUtils::finFichierHTML5();
?>