<?php
try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=142.44.214.241;dbname=fernando_essaie;charset=utf8', 'fernando_1', 'fernando');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}
?>