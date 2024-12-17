<?php
	echo "hello";
	require_once(dirname(__FILE__).'/VueHtmlUtils.php');
	require_once(dirname(__FILE__).'/AdresseView.php');
	require_once(dirname(__FILE__).'/PersonneView.php');
	use \CoursPHP\Vue\PersonneView;
	echo \CoursPHP\Vue\VueHtmlUtils::enTeteHTML5('construction et affichage d une personne','UTF-8','myStyle.css');
	echo "<p>";
	echo PersonneView::getHtmlDevelopped($personne);
	echo "</p>";
	cho \CoursPHP\Vue\VueHtmlUtils::finFichierHTML5();
?>