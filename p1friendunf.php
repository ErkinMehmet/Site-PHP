<?php
include('conexion.php');
//print_r($_POST);
$postdata=json_decode($_POST['json_name']);
//print_r($postdata->u);

$uc=property_exists($postdata, 'uc')?$postdata->uc:"";
$u2gc=property_exists($postdata, 'u2gc')?$postdata->u2gc:"";
$type=property_exists($postdata, 'statut')?$postdata->statut:"";
//get ids
$quer="select * from p1usuarios where courriel='$uc'";
$comms=$bdd->query($quer);
$comm=$comms->fetch();
$uid=$comm['id'];
$quer="select * from p1usuarios where courriel='$u2gc'";
$comms=$bdd->query($quer);
$comm=$comms->fetch();
$u2gid=$comm['id'];
$ahora=date('Y-m-d H:i:s');
//print_r($ahora);
if ($type==0){
    //add
    $quer="insert into friends(p1,p2,dt) values($uid,$u2gid,'$ahora')";
    //print_r($quer);
    $bdd->query($quer);
} else {
    //get the most recent
    $quer="select id from friends where p1=$uid and p2=$u2gid order by dt desc limit 1";
    //print_r($quer);
    $comms=$bdd->query($quer);
    $comm=$comms->fetch();
    $recentfid=$comm['id'];
    //unadd
    $quer="update friends set dtf='$ahora' where p1=$uid and p2=$u2gid and id=$recentfid";
    //print_r($quer);
    $bdd->query($quer);
}

?>
