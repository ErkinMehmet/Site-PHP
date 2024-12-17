<doctype html>
<html lang="fr">
<head>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" href="projecta.css">
	<title>Opération en cours pour la base de donnée...</title>
</head>

<body>
<?php
//pour modifier
if (isset($_POST['modifier'])){
?>

<?php 
try
{
	$bdd = new PDO('mysql:host=142.44.214.241;dbname=fernando_essaie;charset=utf8', 'fernando_1', 'fernando');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
$reponse = $bdd->query("SELECT * FROM recordatorio WHERE id=".$_POST['ident']) or die(print_r($bdd->errorInfo()));
$donnees=$reponse->fetch();
?>

<h1>Voici le formulaire à remplir pour modifier les informations dans la BD</h1

<form method="post" action="ss.php">
</form>
<form method="post" action="recordatoriobdmodifier.php">
 <label for="inicio">Début: </label>
  <input type="text" id="inicio" name="inicio" value=<?php echo $donnees['inicio'] ?>>
  <br/><br/>
  <label for="inicio">Fin: </label>
  <input type="text" id="fin" name="fin" value=<?php echo $donnees['fin'] ?>>
  <br/><br/>
  <label for="inicio">Description: </label>
  <input type="text" id="descripcion" name="descripcion" value=<?php echo $donnees['descripcion'] ?>>
  <br/><br/>

  <label for="inicio">Catégorie: </label>
  <input type="text" id="categoria" name="categoria" value=<?php echo $donnees['categoria'] ?>>
  <br/><br/>
  <input type="hidden" id="ident" name="ident" value=<?php echo $_POST['ident'] ?>>
  <input type="submit" value="confirmer">
</form>
<a href="recordatorio.php">Retourner dans l'application</a>


<?php
$reponse->closeCursor();
//pour supprimer
}else if (isset($_POST['supprimer'])) {
?>
<h1>Vous avez déjà supprimé la tâche qui s'affiche ci-dessous de la BD:</h1>

<?php 
try
{
	$bdd = new PDO('mysql:host=142.44.214.241;dbname=fernando_essaie;charset=utf8', 'fernando_1', 'fernando');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
$reponse = $bdd->query("SELECT * FROM recordatorio WHERE id=".$_POST['ident']) or die(print_r($bdd->errorInfo()));
$donnees=$reponse->fetch();
?>
<ul>
<li><h1>Début: <?php echo $donnees['inicio'] ?></h1></li>
<li><h1>Fin: <?php echo $donnees['fin'] ?></h1></li>
<li><h1>Description: <?php echo $donnees['descripcion'] ?></h1></li>
<li><h1>Catégorie: <?php echo $donnees['categoria'] ?></h1></li>
</ul>
<a href="recordatorio.php">Retourner dans l'application</a>
<?php
$reponse = $bdd->query("DELETE FROM recordatorio WHERE id=".$_POST['ident']) or die(print_r($bdd->errorInfo()));
$reponse->closeCursor();
//pour ajouter
}else if (isset($_POST['ajouter'])) {
?>
<h1>Voici le formulaire à remplir pour ajouter une tâche dans la liste:</h1>
<form method="post" action="recordatoriobdajouter.php">
<label for="inicio">Début: </label>
<input type="text" id="inicio" name="inicio"/>
<br/><br/>
<label for="inicio">Fin: </label>
<input type="text" id="fin" name="fin"/>
<br/><br/>
<label for="inicio">Description: </label>
<input type="text" id="descripcion" name="descripcion"/>
<br/><br/>
<label for="inicio">Catégorie: </label>
<input type="text" id="categoria" name="categoria"/>
<br/><br/>
<input type="submit" value="confirmer">
</form>

<?php
}
?>

</body>
</html>
