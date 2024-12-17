<?php
include('conexion.php');
print_r($_GET);
//echo "ss";
$est=$_GET['est'];
$plid=$_GET['plid'];
$est2=1-$est;

//sql
$quer="update planificados set estado=".$est2." where id=".$plid;
echo $quer;
$existe=$bdd->query($quer);

?>