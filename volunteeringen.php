<?php
$pagina=9;
require('projectaheaderen.php');

include('conexion.php');

$reponse = $bdd->query("SELECT * FROM volunteeringen") or die(print_r($bdd->errorInfo()));
?>
<br/><h1>My volunteering experiences</h1>
<ul>
<?php
while ($donnees=$reponse->fetch()) {
?>

<?php echo "&nbsp;&nbsp;&nbsp;&nbsp;".$donnees[year]." - " ?><?php echo $donnees[organization]." - " ?><?php echo "<strong>".$donnees[position]."</strong>" ?><li> &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $donnees[task] ?></li><br/><br/>


<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête
?>
</ul>
<?php
require('projectafooter.php');
?>
