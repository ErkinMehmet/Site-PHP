<?php
$pagina=5;
require('projectaheaderen.php');

include('conexion.php');

$reponse = $bdd->query("SELECT * FROM coursesen") or die(print_r($bdd->errorInfo()));
?>
<br/><h1>My completed courses in university<br/>GPA: 3.5/4</h1>
<table><tr><td>Year</td><td>Course</td><td>Description</td><td>Grade</td></tr>
<?php
while ($donnees=$reponse->fetch()) {
?>
<tr><td><?php echo $donnees[year] ?></td><td><?php echo $donnees[course] ?></td><td><?php echo $donnees[description] ?></td><td><?php if (isset($donnees[grade])) {echo $donnees[grade];} else {echo "N/A";}  ?></td></tr>
<?php
}
$reponse->closeCursor(); // Termine le traitement de la requête
?>
</table>
<?php
require('projectafooter.php');
?>
