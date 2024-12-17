<?php
include('conexion.php');
print_r($_POST);
$postdata=json_decode($_POST['json_name']);
//print_r($postdata->u);
$msg=property_exists($postdata, 'msgsent')?$postdata->msgsent:"";
$uid=property_exists($postdata, 'u')?$postdata->u:"";
$u2gid=property_exists($postdata, 'u2g')?$postdata->u2g:"";
$type=property_exists($postdata, 'type')?$postdata->type:"";

//print_r($msg);
//echo $u2gid;
//echo $uid;
//echo $type;

$ahora=date('Y-m-d H:i:s');
//insertion
if ($type==0){
//chat
    $quer="insert into p1chathist(senid,recid,msg,dt) values($uid,$u2gid,'$msg','$ahora')";
} elseif ($type==1) {
    //gp
    $quer="insert into p1chatgphist(senid,gid,msg,dt) values($uid,$u2gid,'$msg','$ahora')";
    echo $quer;
}
$bdd->query($quer);
?>