<?php
        $nom=isset($_POST['nom'])?$_POST['nom']:"";
        $prenom=isset($_POST['prenom'])?$_POST['prenom']:"";
        $telephone=isset($_POST['telephone'])?$_POST['telephone']:"";
        $email=isset($_POST['email'])?$_POST['email']:"";
	$cat=isset($_POST['categorie'])?$_POST['categorie']:"";
	//j ai ajoute ca
	if (filter_var($email,FILTER_SANITIZE_EMAIL)==false) {
	  $dataErrors['email']="Erreur: l'adresse email est invalide";
	}
	$mdp=isset($_POST['mdp'])?$_POST['mdp']:"";
	$mdp2=isset($_POST['mdp2'])?$_POST['mdp2']:"";
	require_once("validUtils.php");
	$nom=filter_var($nom,FILTER_SANITIZE_SPECIAL_CHARS);
	$prenom=filter_var($prenom,FILTER_SANITIZE_SPECIAL_CHARS);
	$telephone=filter_var($telephone,FILTER_SANITIZE_SPECIAL_CHARS);
	$email=filter_var($email,FILTER_SANITIZE_EMAIL);
	$cat=filter_var($cat,FILTER_SANITIZE_SPECIAL_CHARS);        

	//verifier si les deux mdp sont identiques
	if (strcmp($mdp,$mdp2)<>0) {
	   $dataErrors['mdp']="Erreur: les deux mots de passes ne sont pas identiques";
	}
	$mdphash=password_hash($mdp,PASSWORD_DEFAULT);

        if(empty($dataErrors)){
                require('vueSuccess.php');
        } else {
		echo "error";
                require('vueError.php');
        }

try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=test1;charset=utf8', 'root', 'Fqm123!');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('INSERT INTO personnel(Nom,Prenom,Telephone,Email,Mdp) VALUES(\''.$nom.'\',\''.$prenom.'\','.$telephone.',\''.$email.'\',\''.$mdphash.'\')') or die(print_r($bdd->errorInfo()));
$reponse->closeCursor(); // Termine le traitement de la requête
?>