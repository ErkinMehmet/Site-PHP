<?php
$pagina=8;
require('projectaheaderfr.php');

include('conexion.php');

$reponse = $bdd->query("SELECT * FROM employementfr") or die(print_r($bdd->errorInfo()));
?>
<br/><h1>Mon historique d'emploi</h1>
<?php
while ($donnees=$reponse->fetch()) {
?>
&nbsp;&nbsp;&nbsp;&nbsp;<strong><?php echo $donnees[position]; ?></strong> 
<?php echo $donnees['start month']." - "; ?>
<?php echo $donnees['end month']; ?>
<br/>
&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $donnees[company]; ?>
<ul>
<li><?php echo $donnees[task1]; ?></li>
<li><?php echo $donnees[task2]; ?></li>
  <?php
   if (isset($donnees[task3])){
   echo "<li>".$donnees[task3]."</li>";
   }
  ?>
</ul>

<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête
?>

<?php
require('projectafooter.php');
?>
