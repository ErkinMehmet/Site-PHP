<?php
include('conexion.php');
//print_r($_POST);
$postdata=json_decode($_POST['json_name']);
//print_r($postdata->u);

$uc=property_exists($postdata, 'uc')?$postdata->uc:"";
$u2gnom=property_exists($postdata, 'u2gnom')?$postdata->u2gnom:"";
$type=property_exists($postdata, 'statut')?$postdata->statut:"";
//get ids
$quer="select * from p1usuarios where courriel='$uc'";
$comms=$bdd->query($quer);
$comm=$comms->fetch();
$uid=$comm['id'];
$quer="select * from p1chatgp where nom='$u2gnom'";
$comms=$bdd->query($quer);
$comm=$comms->fetch();
$gid=$comm['id'];
$ahora=date('Y-m-d H:i:s');
//print_r($ahora);
if ($type==0){
    //add
    $quer="insert into p1chatgpusuario(uid,gid,valid,dt) values($uid,$gid,1,'$ahora')";
    print_r($quer);
    $bdd->query($quer);
} else {
    //get the most recent
    $quer="select id from p1chatgpusuario where uid=$uid and gid=$gid order by dt desc limit 1";
    print_r($quer);
    $comms=$bdd->query($quer);
    $comm=$comms->fetch();
    $recentfid=$comm['id'];
    //unadd
    $quer="update p1chatgpusuario set dtf='$ahora',valid=0 where uid=$uid and gid=$gid and id=$recentfid";
    print_r($quer);
    $bdd->query($quer);
}

?>
