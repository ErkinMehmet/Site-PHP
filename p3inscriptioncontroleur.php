<?php
//info
include('conexion.php');

$nom=$_POST['nom'];
$mdp=$_POST['mdp'];
$mdp2=$_POST['mdp2'];
$email=$_POST['email'];

include('conexion.php');
//check si username existe
$quer="select count(*) as count from usuarios where nom=\"".$nom."\"";
$existe=$bdd->query($quer);
$existe2=$existe->fetch();

if ($existe2['count']==0) {
    $test1=true;
} else {
    $test1=false;
}



//check si les deux mdp sont bons
if ($mdp==$mdp2) {
    $test2=true;
} else {
    $test2=false;
}


//tester format de nom
if(preg_match('/^[a-zA-Z0-9]{5,}$/', $nom)) { // for english chars + numbers only
    // valid username, alphanumeric & longer than or equals 5 chars
    $test3=true;
} else {
 $test3=false;
}

//tester email
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $test4=true;
} else {
    $test4=false;
}

$quer="select count(*) as count from usuarios where courriel=\"".$email."\"";
$existe=$bdd->query($quer);
$existe2=$existe->fetch();

if ($existe2['count']==0) {
    $test4=$test4&&true;
} else {
    $test4=$test4&&false;
}


if ($test1==true && $test2==true && $test3==true && $test4==true) {
    //sql
$mdp=password_hash($mdp, PASSWORD_DEFAULT);
    $quer="insert into usuarios(nom,mdp,courriel) values('$nom','$mdp','$email')";
    $existe=$bdd->query($quer);

    include('p3inscription2.php');
} elseif ($test1==false) {
    include('p3inscriptionerreur.php');
} elseif ($test2==false) {
    include('p3inscriptionerreur2.php');
} elseif ($test3==false) {
    include('p3inscriptionerreur3.php');
} else {
    include('p3inscriptionerreur4.php');
}



?>