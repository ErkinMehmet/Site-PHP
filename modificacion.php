<?php
        $nom=isset($_POST['nom'])?$_POST['nom']:"";
        $prenom=isset($_POST['prenom'])?$_POST['prenom']:"";
        $telephone=isset($_POST['telephone'])?$_POST['telephone']:"";

//j ai ajoute ca       
    $mdp=isset($_POST['mdp'])?$_POST['mdp']:"";
    $mdp2=isset($_POST['mdp2'])?$_POST['mdp2']:"";
    $nom=filter_var($nom,FILTER_SANITIZE_SPECIAL_CHARS);
    $prenom=filter_var($prenom,FILTER_SANITIZE_SPECIAL_CHARS);
    $telephone=filter_var($telephone,FILTER_SANITIZE_SPECIAL_CHARS);
    if (strcmp($mdp,$mdp2)<>0) {
       $dataErrors['mdp']="Erreur: les deux mots de passes ne sont pas identiques";
       }
       $mdphash=password_hash($mdp,PASSWORD_DEFAULT);
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

$reponse = $bdd->query('UPDATE personnel SET Prenom=\''.$prenom.'\',Nom=\''.$nom.'\',Mdp=\''.$mdphash.'\' WHERE Telephone='.$telephone) or die(print_r($bdd->errorInfo()));
?>

<h1>Ya cambio el codigo para el telefono<?php echo " ".$telephone;?></h1>
<a href=project2form.html>Regresar a la pagina</a>
<?php
$reponse->closeCursor(); // Termine le traitement de la requête
?>