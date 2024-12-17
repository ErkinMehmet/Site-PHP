<?php
 // Always start this first
 session_start();
include('conexion.php');
//get info
$bbq=$_SESSION['user_id'];
  $queru="select * from p1usuarios where userid='$bbq'";
    print_r($queru);
    $commsu=$bdd->query($queru);
    $commu=$commsu->fetch();
    $uid=$commu['id'];
    //get info login
    $quer="select * from p1login where uid=$uid order by dt desc limit 1";
    print_r($quer);
    $comms=$bdd->query($quer);
    $comm=$comms->fetch();
    $logid=$comm['id'];
  
  //change p1login1
  $ahora=date('Y-m-d H:i:s');
  $quer="update p1login set dtf='$ahora' where id=$logid";
 $bdd->query($quer); 
 
  
  // Destroying the session clears the $_SESSION variable, thus "logging" the user
  // out. This also happens automatically when the browser is closed
  session_destroy();
?>