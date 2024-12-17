<?php
include('conexion.php');
print_r($_POST);
$postdata=json_decode($_POST['json_name']);
//print_r($postdata->u);

$uc=property_exists($postdata, 'uc')?$postdata->uc:"";
$nom=property_exists($postdata, 'nom')?$postdata->nom:"";
$mdp=property_exists($postdata, 'mdp')?$postdata->mdp:"";
$sexe=property_exists($postdata, 'sexe')?$postdata->sexe:"";
$nais=property_exists($postdata, 'nais')?$postdata->nais:"";
$nationalite=property_exists($postdata, 'nationalite')?$postdata->nationalite:"";
$cel=property_exists($postdata, 'cel')?$postdata->cel:"";
$prof=property_exists($postdata, 'prof')?$postdata->prof:"";
$poids=property_exists($postdata, 'poids')?$postdata->poids:"";
$poidsu=property_exists($postdata, 'poidsu')?$postdata->poidsu:"";

$taille=property_exists($postdata, 'taille')?$postdata->taille:"";
$tailleu=property_exists($postdata, 'tailleu')?$postdata->tailleu:"";
$mdp=password_hash($mdp, PASSWORD_ARGON2I);




//$ent=property_exists($postdata, 'ent')?$postdata->ent:"";
//$tipo=property_exists($postdata, 'tipo')?$postdata->tipo:"";

//necesitamos encontrar el id cachai - de verdad no

$quer="update p1usuarios set nom='$nom', mdp='$mdp', sexe='$sexe', nais='$nais', nationalite='$nationalite', cel='$cel', prof='$prof', poids='$poids'";
$quer.=", poidsu='$poidsu', taille='$taille', tailleu='$tailleu' where courriel='$uc'";
//echo mysql_errno($bdd) . ": " . mysql_error($bdd) . "\n";

print_r($quer);
$bdd->query($quer);
?>