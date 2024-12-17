<?php
$pagina=9;
require('projectaheader.php');

include('conexion.php');

$reponse = $bdd->query("SELECT * FROM experenciavoluntaria") or die(print_r($bdd->errorInfo()));
?>
<br/><h1>Mis experencias voluntarias</h1>
<ul>
<?php
while ($donnees=$reponse->fetch()) {
?>

<?php echo "&nbsp;&nbsp;&nbsp;&nbsp;".$donnees['ano']." - " ?><?php echo $donnees['organizacion']." - " ?><?php echo "<strong>".$donnees['posicion']."</strong>" ?><li> &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $donnees['deber'] ?></li><br/><br/>


<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête
?>
</ul>
<?php
require('projectafooter.php');
?>
