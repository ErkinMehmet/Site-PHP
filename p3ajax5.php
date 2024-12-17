<?php
include('conexion.php');
print_r($_GET);
//obtenir les info

$fecha=$_GET['fecha'];
$hora=$_GET['hora'];
$ej=$_GET['ej'];
$cant=$_GET['cant'];
$plid=$_GET['plid'];

//find ejid
//$quer="select * from planificados";
$quer="select * from ejercicios where nombre='$ej'";
echo $quer;
$existe=$bdd->query($quer);
$existe2=$existe->fetch();
$ejid=$existe2['id'];

$quer="update planificados set ejid=$ejid,dia='$fecha',hora='$hora',cant=$cant where id=$plid";
echo $quer;
$existe=$bdd->query($quer);

?>

