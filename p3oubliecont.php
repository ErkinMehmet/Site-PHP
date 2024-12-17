<?php
$nom=$_POST['nom'];

include('conexion.php');



//peut etre le nom ou le courriel
//tester email
if (filter_var($nom, FILTER_VALIDATE_EMAIL)) {
    $testa=true;
  } else {
      $testa=false;
  }

//tester si username existe
//check si username existe et est valide
$quer="select count(*) as count from usuarios where nom=\"".$nom."\"";
//echo $quer;
$existe=$bdd->query($quer);
$existe2=$existe->fetch();
if ($existe2['count']==0) {
    $testb=false;
} else {
    $testb=true;
}
//echo $testa."s";
//echo $testb."s";
//tester format de nom
if(preg_match('/^[a-zA-Z0-9]{5,}$/', $nom)) { // for english chars + numbers only
    // valid username, alphanumeric & longer than or equals 5 chars
    $testb=$testb&&true;
} else {
 $testb=$testb&&false;
}

//echo $testb."s";

//ensuite si courriel existe
$quer="select count(*) as count from usuarios where courriel=\"".$nom."\"";
$existe=$bdd->query($quer);
$existe2=$existe->fetch();
if ($existe2['count']==0) {
    $testc=true;
} else {
    $testc=false;
}

//echo $testc;


//si c est courriel on va envoyer un courriel directement
if ($testa&&$testc) {
    include('p3oubliecourriel.php');
} elseif ($testb) {
    include('p3oublieusager.php');
} elseif (!$testa||!$testc) {
    include('p3oubliecourrieler.php');
} else {
    include('p3oublieusagerer.php');
}

//si le courriel n existe pas on envoie un message d erreur

//sinon on va valider le nom et trouver le courriel va envoyer le courriel

//si l on ne trouve pas le nom ou le courriel on envoie un message d erreur








?>