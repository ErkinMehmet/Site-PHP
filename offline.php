<?php
session_start();
$sender=$_SESSION['sender'];
include('conexion.php');
//print_r($bdd);
$reponse=$bdd->query("UPDATE chatters SET online=0 WHERE name=\"".$sender."\"") or die(print_r($bdd->errorInfo()));

print_r($reponse);

$reponse1=$bdd->query("UPDATE chatters SET typing=0 WHERE name=\"".$sender."\"") or die(print_r($bdd->errorInfo()));

?>