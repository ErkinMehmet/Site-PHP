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

//si no existe en la base de datos de los chatters vamos a agregar una cuenta
$quer="select count(*) as counta from accounts where uid=".$usuario;
$existe=$bdd->query($quer);
$existe2=$existe->fetch();
//echo $existe2['counta'];
if ($existe2['counta']<=0) {
//si no existe todavia va a crear una
$quer="insert into accounts(uid,anom) values($usuario,'$nomb')";
//echo $quer;
$existe=$bdd->query($quer);
}

//obtenir de toute facon l id du compte
$quer="select * from accounts where uid=".$usuario;
$existe=$bdd->query($quer);
$existe2=$existe->fetch();
$aid=$existe2['id'];


include('p2header.php'); 
//exit();?>
<a <?php if ($page==""||$page==1) {echo 'class="active"';}?> href="p2accueillogin.php?page=1">Home</a>
<a <?php if ($page==2) {echo 'class="active"';}?> href="p2accueillogin.php?page=2">Chats</a>
<a <?php if ($page==3) {echo 'class="active"';}?> href="p2accueillogin.php?page=3">Profile</a>
<a <?php if ($page==4) {echo 'class="active"';}?> href="p2accueillogin.php?page=4">Music</a>
<a <?php if ($page==5) {echo 'class="active"';}?> href="p2accueillogin.php?page=5">Contact</a>
<a href="p2accueillogout.php">Log Out</a>
</div>

<div class="row loginfo" id="loginfo">
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
    include('p2accueilloginpage1.php');
    break;
    case 2:
    include('p2accueilloginpage2.php');
    break;
    case 3:
    include('p2accueilloginpage3.php');
    break;
    case 4:
    include('p2accueilloginpage4.php');
    break;
    case 5:
    include('p2accueilloginpage5.php');
    break;
    default:
    include('p2accueilloginpage1.php');
}

?>





</div>
<?php include('p2footer.php'); ?>