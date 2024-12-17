<?php
session_start();
$sender=$_SESSION['sender'];
//$sender="Fernando";
//print_r($sender);
include('conexion.php');
print_r($bdd);
$reponse=$bdd->query("UPDATE chatters SET typing=1 WHERE name=\"".$sender."\"") or die(print_r($bdd->errorInfo()));

print_r($reponse);
?>