<?php
include('conexion.php');

$tracking_page_name="example";
$ref=$_SERVER['HTTP_REFERER'];
$agent=$_SERVER['HTTP_USER_AGENT'];
$ip=$_SERVER['HTTP_ADDR'];
$hostname=gethostbyaddr($_SERVER['REMOTE_ADDR']);


$reponse2=$bdd->query("SELECT MAX(id) AS visited FROM visitors") or die(print_r($bdd->errorInfo()));
$row = $reponse2->fetch();
$number=$row["visited"]+1;


$reponse=$bdd->query("INSERT INTO visitors(id,tm,ref,agent,ip,tracking_page_name,host_name) VALUES($number,curtime(),'$ref','$agent','$ip','$tracking_page_name','$host_name')") or die(print_r($bdd->errorInfo()));

$reponse->closeCursor();
?>
