<?php
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

$reponse = $bdd->query("SELECT * FROM cursos") or die(print_r($bdd->errorInfo()));
?>
<br/><h1>Mis cursos completados en la unviversidad</h1>
<table><tr><td>Año</td><td>Curso</td><td>Descripción</td><td>Nota</td></tr>
<?php
while ($donnees=$reponse->fetch()) {
?>
<tr><td><?php echo $donnees[annee] ?></td><td><?php echo $donnees[cours] ?></td><td><?php echo $donnees[description] ?></td><td><?php echo $donnees[note]  ?></td></tr>
<?php
}
$reponse->closeCursor(); // Termine le traitement de la requête
?>
</table>
<?php
require('projectafooter.php');
?>
