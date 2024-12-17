<?php
//prendre les info
//print_r($_GET);
$msg=htmlspecialchars($_GET['msg']);
$s=$_GET['s'];
$r=$_GET['r'];
$tiempo=date('Y-m-d H:i:s',time());
include('conexion.php');
//valider
$test=1;
if (strlen($msg)<10){
    $test=0;
}





//sql
if($test==1){
$quer="insert into convo(msg,time,asendid,arecid) values('$msg','$tiempo',$s,$r)";
//echo $quer;
$bdd->query($quer);
}
?>