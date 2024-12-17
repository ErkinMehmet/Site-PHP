<?php
$pagina=5;
require('projectaheaderfr.php');

include('conexion.php');

$reponse = $bdd->query("SELECT * FROM coursesfr") or die(print_r($bdd->errorInfo()));
?>
<br/><h1>Les cours que j'ai finis à la fac<br/>Note moyenne: 3.5/4</h1>
<table><tr><td>Année</td><td>Cours</td><td>Description</td><td>Note</td></tr>
<?php
while ($donnees=$reponse->fetch()) {
?>
<tr><td><?php echo $donnees['year'] ?></td><td><?php echo $donnees['course'] ?></td><td><?php echo $donnees['description'] ?></td><td><?php if (isset($donnees['grade'])) {echo $donnees['grade'];} else {echo "N/A";}  ?></td></tr>
<?php
}
$reponse->closeCursor(); // Termine le traitement de la requête
?>
</table>
<?php
require('projectafooter.php');
?>
