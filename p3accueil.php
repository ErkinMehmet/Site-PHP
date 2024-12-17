<?php
ob_start();
print_r($_POST);

//les info
$nomcou=isset($_POST['nom'])?$_POST['nom']:'';
$mdp=isset($_POST['mdp'])?$_POST['mdp']:'';

//connecter a sql
include('conexion.php');

//deteminer l info qu on utilise
if(strpos($_POST['nom'],"@") !== false){
    $echoix=true;
    //si le client utilise le courriel
    $quer="select * from usuarios where courriel=\"".$nomcou."\"";
} else{
    $echoix=false;
    //au cas d un nom de compte
    $quer="select * from usuarios where nom=\"".$nomcou."\"";
}

//requete de sql pour obtenir les info de cette personne-ci
$existe=$bdd->query($quer);
$existe2=$existe->fetch();
$matchmdp=password_verify ($mdp,$existe2['mdp']);
//echo $mdp.$existe2['mdp'];
//if (password_verify ($mdp,$existe2['mdp'])) {
 //   echo 'Password is valid!';
//} else {
 //   echo 'Invalid password.';
//}

//comparer le mdp avec celui correct pour voir si on procede avec la page de connexion ou la page d erreur
if ($matchmdp) {
 //collecter les info a partir de sql
 $sex=$existe2['sexe'];
 $nais=$existe2['nais'];
 $cel=$existe2['cel'];
 $poids=$existe2['poids'];
 $poidsu=$existe2['poidsu'];
 $poidse=$existe2['poidsesp'];
 $poidseu=$existe2['poidseu'];
 $prof=$existe2['prof'];
 $niveau=$existe2['niveau'];
 $taille=$existe2['taille'];
 $tailleu=$existe2['tailleu'];
 $type=$existe2['typecorps'];
 $freq=$existe2['freq'];
 $fb=$existe2['facebook'];
 $ins=$existe2['insta'];
 $tw=$existe2['tw'];
 $aut=$existe2['autres'];
 $nat=$existe2['nationalite'];
 $nomb=$existe2['nom'];
 $cour=$existe2['courriel'];
 $id=$existe2['id'];

    //commmencer la session
session_start();
    //session
    $_SESSION['userid']=$id;
    $_SESSION['err']="";
    
    $_SESSION['key']=$existe2['mdp'];
    //echo  $_SESSION['userid'];
    ob_start();
    //
    header('location:p3accueillogin.php');
    //include('location:p3accueillogin.php');
} else {
    session_start();
    $_SESSION['userid']="";
    $_SESSION['err']="Password is not correct.";
    header('location:p3accueillogerr.php');
    echo "error";
}

//finir la session
//exit();
ob_end_flush();
?>