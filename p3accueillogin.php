<?php 
include('conexion.php');
session_start();
//print_r($_SESSION);
//print_r($_POST);
//print_r($_GET);
$page=$_GET['page'];
//echo $_SESSION['userid'];
$usuario=$_SESSION['userid'];

//obtenir toutes les information
$quer="select * from usuarios where id=".$usuario;
$existe=$bdd->query($quer);
$existe2=$existe->fetch();
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

include('p3header.php'); 
//exit();?>
<a <?php if ($page==""||$page==1) {echo 'class="active"';}?> href="p3accueillogin.php?page=1">Planning</a>
<a <?php if ($page==2) {echo 'class="active"';}?> href="p3accueillogin.php?page=2">Periodic</a>
<a <?php if ($page==3) {echo 'class="active"';}?> href="p3accueillogin.php?page=3">View</a>
<a <?php if ($page==4) {echo 'class="active"';}?> href="p3accueillogin.php?page=4">Profile</a>
<a href="p3accueillogout.php">Log Out</a>
</div>

<div class="row loginfo">
Greetings<?php echo " ".$nomb."!";?>
</div>


<!-- POUR COMM
<div class="content">
hello this is contenido
<div contentEditable="true" class="commentbox">ddfaf
</div>
</div>
-->
<div class="content">
<?php
switch($page) {
    case 1:
    include('p3accueilloginpage1.php');
    break;
    case 2:
    include('p3accueilloginpage2.php');
    break;
    case 3:
    include('p3accueilloginpage3.php');
    break;
    case 4:
    include('p3accueilloginpage4.php');
    break;
    default:
    include('p3accueilloginpage1.php');
}

?>





</div>
<?php include('p3footer.php'); ?>