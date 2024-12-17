<doctype html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="projecta.css">
  <title>Page pour ajouter un item dans la liste</title>
</head>

<body>
<h1>Voici les informations que vous venez de modifier:</h1>

<?php

try
{
	$bdd = new PDO('mysql:host=142.44.214.241;dbname=fernando_essaie;charset=utf8', 'fernando_1', 'fernando');
}
catch(Exception $e)
{       die('Erreur : '.$e->getMessage());
}

$inicio=isset($_POST['inicio'])?$_POST['inicio']:"";
$fin=isset($_POST['fin'])?$_POST['fin']:"";
$descripcion=isset($_POST['descripcion'])?$_POST['descripcion']:"";
$categoria=isset($_POST['categoria'])?$_POST['categoria']:"";
$estado=0;
?>

<?php
if (isset($_POST['inicio'])&&isset($_POST['categoria'])&&isset($_POST['descripcion'])&&isset($_POST['fin'])) {
?>

<ul>
<li><h1>Début: <?php echo $inicio ?></h1></li>
<li><h1>Fin: <?php echo $fin ?></h1></li>
<li><h1>Description: <?php echo $descripcion ?></h1></li>
<li><h1>Catégorie: <?php echo $categoria ?></h1></li>
</ul>
<a href="recordatorio.php">Retourner à la page du mémo</a>
<?php
$reponse = $bdd->query('UPDATE recordatorio SET inicio=\''.$inicio.'\',fin=\''.$fin.'\',descripcion=\''.$descripcion.'\',categoria=\''.$categoria.'\' WHERE id='.$_POST['ident']) or die(print_r($bdd->errorInfo()));

$donnees=$reponse->fetch();
} else {
  echo "Desolé, une erreur est arrivée lorsqu'on essaie d'intégrer les informations que vous avez saisies. Veuillez réessayer une autre fois.";
}
?>


<?php

$reponse->closeCursor(); // Termine le traitement de la requête
?>


</body>

</html>
