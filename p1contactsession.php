<?php
//get - informacion de la pagina
$cono=isset($_GET['pagina'])?$_GET['pagina']:"";

session_start();
//get info from usuarios
//print_r($_SESSION);
//$sessionid=$_SESSION['user_id'];
$quer="select * from p1usuarios where userid='$sessionid'";
//print_r($quer);
$comms=$bdd->query($quer);
while ($comm=$comms->fetch()){
    $uid=$comm['id'];
    $nom=$comm['nom'];
    $courriel=$comm['courriel'];
    //print_r($comm);
}
include('conexion.php');
//trois options de chat
//echo $uid;
?>

<nav aria-label="..." id="<?php echo$courriel;?>">
  <ul class="pagination">
    <li class="page-item <?php if($cono==1 || $cono==""){echo"active";}?>"><a class="page-link" style="color:black;" onclick="navcontactsession(this);" id="nav1">Account</a></li>
    <li class="page-item <?php if($cono==2 || $cono==""){echo"active";}?>">
    <a class="page-link" style="color:black;" onclick="navcontactsession(this);" id="nav2">Profile</a>
    </li>
    <li class="page-item <?php if($cono==3 || $cono==""){echo"active";}?>"><a class="page-link" style="color:black;" onclick="navcontactsession(this);" id="nav3">Friends</a></li>
    <li class="page-item <?php if($cono==4 || $cono==""){echo"active";}?>"><a class="page-link" style="color:black;" onclick="navcontactsession(this);" id="nav4">Groups</a></li>
  </ul>
</nav>
<div id="chatbot">
<div class="chatbotc" id="chatbotc1" style="display:<?php if($cono==1 || $cono==""){echo"block";}else{echo "none";}?>;">
<h2>Notification Center</h2>
</div>
<div class="chatbotc" id="chatbotc2"  style="display:<?php if($cono==2 || $cono==""){echo"block";}else{echo "none";}?>;">
<?php include('p1contactsessionpro.php');?>
</div>
<div class="chatbotc" id="chatbotc3" style="display:<?php if($cono==3 || $cono==""){echo"block";}else{echo "none";}?>;">
<?php include('p1contactsessionfr.php');?>
</div>
<div class="chatbotc" id="chatbotc4" style="display:<?php if($cono==4 || $cono==""){echo"block";}else{echo "none";}?>;">
<?php include('p1contactsessiongp.php');?>
</div>
</div>


<?php
//creer un admin gp s il y en a pas encore
$quer="select count(*) as admingp from p1chatgp where chatadminuid=$uid";
$comms=$bdd->query($quer);
while ($comm=$comms->fetch()){
    $adminexist=$comm['admingp'];
    //print_r($comm);
}
if ($adminexist==0){
    //creer un groupe pour lui
    $ahora=date('Y-m-d H:i:s');
    $quer="insert into p1chatgp(nom,dt,cat,taille,chatadminuid) values('Group Admin','$ahora',0,0,$uid)";
    //print_r($quer);
    $bdd->query($quer);
     //gid pour le groupe
     $quer="select id from p1chatgp where chatadminuid=$uid";
     $comms=$bdd->query($quer);
     $comm=$comms->fetch();
     $gadminid=$comm['id'];
 //inserer dans p1chatgp et p1chatgpusuario
 $quer="insert into p1chatgpusuario(gid,uid,valid,dt) values($gadminid,$uid,1,'$ahora')";
 //print_r($quer);
     $bdd->query($quer);
}
   
$quer="select id from p1chatgp where chatadminuid=$uid";
$comms=$bdd->query($quer);
$comm=$comms->fetch();
$gadminid=$comm['id'];

//p1actif chat pis gp
$quer="select count(*) as actifexiste from p1actif where uid=$uid and chattype=0";
//print_r($quer);
$comms=$bdd->query($quer);
while ($comm=$comms->fetch()){
    $exist0=$comm['actifexiste'];
    //print_r($comm);
}
if ($exist0==0){
    $quer="insert into p1actif(uid,chattype,u2gid) values($uid,0,11)";
    //print_r($quer);
    $bdd->query($quer);
}
//gp
$quer="select count(*) as actifexiste from p1actif where uid=$uid and chattype=1";
//print_r($quer);
$comms=$bdd->query($quer);
while ($comm=$comms->fetch()){
    $exist0=$comm['actifexiste'];
    //print_r($comm);
}
if ($exist0==0){
    $quer="insert into p1actif(uid,chattype,u2gid) values($uid,1,$gadminid)";
    $bdd->query($quer);
}

include('p1chat.php');
?>