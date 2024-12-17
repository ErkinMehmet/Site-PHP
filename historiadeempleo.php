<?php
$pagina=8;
require('projectaheader.php');

include('conexion.php');

$reponse = $bdd->query("SELECT * FROM historiadeempleo") or die(print_r($bdd->errorInfo()));
?>
<br/><h1>Mi Historia de Empleo</h1>
<?php
while ($donnees=$reponse->fetch()) {
?>
&nbsp;&nbsp;&nbsp;&nbsp;<strong><?php echo $donnees[posicion]; ?></strong> 
<?php echo $donnees['inicio mes']." - "; ?>
<?php echo $donnees['fin mes']; ?>
<br/>
&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $donnees[empresa]; ?>
<ul>
<li><?php echo $donnees[deber1]; ?></li>
<li><?php echo $donnees[deber2]; ?></li>
  <?php
   if (isset($donnees[deber3])){
   echo "<li>".$donnees[deber3]."</li>";
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
