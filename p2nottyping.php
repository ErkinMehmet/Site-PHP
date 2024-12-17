<?php
print_r($_GET);
$r=$_GET['q'];
$s=$_GET['p'];

//$sender="Fernando";
//print_r($sender);
include('conexion.php');
//print_r($bdd);
$quer="UPDATE convo SET typing=0 WHERE asendid=$s and arecid=$r";
echo $quer;
$reponse=$bdd->query($quer) or die(print_r($bdd->errorInfo()));

//print_r($reponse);
?>