<?php
	$telefonoentrada=isset($_POST['telefonoentrada'])?$_POST['telefonoentrada']:"";
	$codigoentrada=isset($_POST['codigoentrada'])?$_POST['codigoentrada']:"";
	$errores="";
	// validacion
	//if ((empty($errores)) {
	  //echo "ok";
	  // require('project2vue.php');
	//} else {
	  //echo "not ok";
	  // require('project2error.php');
	//}

	try
	{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=test1;charset=utf8', 'root', 'Fqm123!');
	} catch(Exception $e) {
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
	}

	$reponse = $bdd->query('SELECT * FROM personnel WHERE Telephone='.$telefonoentrada) or die(print_r($bdd->errorInfo()));
	$donnees = $reponse->fetch();
	if (password_verify($codigoentrada,$donnees['Mdp'])) {
	  require('aceptado.php');
	} else {
	  require('noaceptado.php');
	}

	$reponse->closeCursor(); // Termine le traitement de la requête
?>

