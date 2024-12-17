<?php
$pagina=7;
require('projectaheader.php');

try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=test1;charset=utf8', 'root', 'Fqm123!');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query("SELECT * FROM proyectos") or die(print_r($bdd->errorInfo()));
?>
<br/><h1>La lista de mis proyectos</h1><ul>
<?php
while ($donnees=$reponse->fetch()) {
?>
<li><?php echo $donnees[proyecto] ?></li>
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête
?>
</ul>
<?php
require('projectafooter.php');
?>
