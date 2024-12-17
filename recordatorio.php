<doctype html>
<html lang="fr">
<head>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" href="projecta.css">
  <title>Application web: garde-mémoire</title>
</head>

<body>
<p style="margin-left:15%;width:70%;">
<h1 style="margin-left:25%;width:70%;">Bienvenue à la première application web de Fernando!</h1>
</p>

<div style="margin-top:0%;">
Pour savoir plus sur Fernando, veuillez cliquer sur <a href="projectafr.php">ici</a>
</div>
<br/>
<div id="centro" style="margin-left:0;width:70%;">

<?php
include('conexion.php');

$reponse = $bdd->query("SELECT * FROM recordatorio") or die(print_r($bdd->errorInfo()));

$tot0=$bdd->query("SELECT COUNT(*) AS tot FROM recordatorio") or die(print_r($bdd->errorinfo()));
$tot1=$tot0->fetch();

?>


<br/><h1>Liste de tâches<br/>Nombre de tâches: <?php echo $tot1['tot']; ?></h1>
<table style="padding:0;"><tr><td>Numéro</td><td>Début</td><td>Fin</td><td>Description</td><td>État</td><td>Options</td></tr>

<?php
$compteur=0;
while ($donnees=$reponse->fetch()) {
$compteur+=1;?>
<tr><td><?php echo $compteur; ?></td><td><?php echo$donnees['inicio'] ?></td><td><?php echo$donnees['fin'] ?></td><td><?php echo$donnees['descripcion'] ?></td><td><?php if ($donnees['estado']) {echo "Déjà fait";} else {echo "À faire";} ?></td><td>
<form method="post" action="recordatoriobd.php" style="margin-left:10%;;width:80%;">
<p><input type="submit" id="modifier" name="modifier" value="Modifier" style="margin-left:15px;width:100px;"/></p>
<p><input type="submit" id="supprimer" name="supprimer" value="Supprimer" style="margin-left:15px;width:100px;"/></p>
<input type="hidden" id="ident" name="ident" value=<?php echo$donnees['id'] ?>>

</form>
</td></tr>
<?php
}
$reponse->closeCursor(); // Termine le traitement de la requête
?>

</table>
<form method="post" action="recordatoriobd.php">
<input type="submit" id="ajouter" name="ajouter" value="ajouter" style="margin-left:45%;width:30%;"/>
</form>

</div>

</body>

</html>
