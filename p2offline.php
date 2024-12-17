<?php
$sender=$_GET['p'];
include('conexion.php');
//print_r($bdd);
$reponse=$bdd->query("UPDATE accounts SET online=0 WHERE id=\"".$sender."\"") or die(print_r($bdd->errorInfo()));

print_r($reponse);

$reponse1=$bdd->query("UPDATE convo SET typing=0 WHERE arecid=\"".$sender."\"") or die(print_r($bdd->errorInfo()));

?>