<?php
include('conexion.php');
//print_r($_POST);
$postdata=json_decode($_POST['json_name']);
//print_r($postdata->u);
$courriel=property_exists($postdata, 'uc')?$postdata->uc:"";
$nom=property_exists($postdata, 'nom')?$postdata->nom:"";
$description=property_exists($postdata, 'desc')?$postdata->desc:"";
$cat=property_exists($postdata, 'cat')?$postdata->cat:"";
$taille=property_exists($postdata, 'taille')?$postdata->taille:"";

//obtener el num de indentidad de la persona
$quer="select id from p1usuarios where courriel='$courriel'";
$comms=$bdd->query($quer);
$comm=$comms->fetch();
$uid=$comm['id'];
$ahora=date("Y-m-d H:i:s");

//quer pa crear un grupo
if ($nom!=""){
$quer="insert into p1chatgp(nom,description,dt,chatadminuid,cat,taille) values('$nom','$description','$ahora',$uid,$cat,$taille)";
print_r($quer);
$bdd->query($quer);
}
$quer="select id from p1chatgp where nom='$nom' and dt='$ahora' and chatadminuid=$uid and description='$description' order by dt desc limit 1";
$comms=$bdd->query($quer);
$comm=$comms->fetch();
$gid=$comm['id'];


//crear relacion
$quer="insert into p1chatgpusuario(gid,uid,valid,dt) values($gid,$uid,1,'$ahora')";
print_r($quer);
$bdd->query($quer);

?>