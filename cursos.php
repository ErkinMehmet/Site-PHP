<?php
$pagina=5;
require('projectaheader.php');

include('conexion.php');

$reponse = $bdd->query("SELECT * FROM cursos") or die(print_r($bdd->errorInfo()));
?>
<br/><h1>Mis cursos completados en la unviversidad<br/>Medio de Nota: 3.5/4</h1>
<table><tr><td>Año</td><td>Curso</td><td>Descripción</td><td>Nota</td></tr>
<?php
while ($donnees=$reponse->fetch()) {
?>
<tr><td><?php echo $donnees['annee'] ?></td><td><?php echo $donnees['cours'] ?></td><td><?php echo $donnees['description'] ?></td><td><?php if (isset($donnees['note'])) {echo $donnees['note'];} else {echo "N/A";}  ?></td></tr>
<?php
}
$reponse->closeCursor(); // Termine le traitement de la requête
?>
</table>
<?php
require('projectafooter.php');
?>
