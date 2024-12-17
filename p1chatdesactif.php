<?php
include('conexion.php');
print_r($_POST);
$postdata=json_decode($_POST['json_name']);
//print_r($postdata->u);

$u=property_exists($postdata, 'u')?$postdata->u:"";
$u2g=property_exists($postdata, 'u2g')?$postdata->u2g:"";
$type=property_exists($postdata, 'type')?$postdata->type:"";
$quer="delete from p1actif where uid=$u and u2gid=$u2g and chattype=$type";
print_r($quer);
$bdd->query($quer);


?>