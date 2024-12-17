<?php
include('conexion.php');
print_r($_POST);
$postdata=json_decode($_POST['json_name']);
//print_r($postdata->u);

$uc=property_exists($postdata, 'uc')?$postdata->uc:"";
$ent=property_exists($postdata, 'ent')?$postdata->ent:"";
$tipo=property_exists($postdata, 'tipo')?$postdata->tipo:"";
$tipos=['nom','mdp','sexe','nais','nationalite','cel','prof'];
if ($tipo=="1"){
    $ent=password_hash($ent, PASSWORD_ARGON2I);
}

//necesitamos encontrar el id cachai - de verdad no
if ($tipo=="7"||$tipo=="8"){
    //sep
    $entx=explode("sep",$ent);
    $ent1=$entx[0];
    $ent2=$entx[1];
    if ($tipo=="7"){
        $quer="update p1usuarios set poids=$ent1,poidsu='$ent2' where courriel='$uc'";
    }else {
        $quer="update p1usuarios set taille=$ent1,tailleu='$ent2' where courriel='$uc'";
    }

    //qeury
} else {
$quer="update p1usuarios set ".$tipos[intval($tipo)]."='$ent' where courriel='$uc'";
//echo mysql_errno($bdd) . ": " . mysql_error($bdd) . "\n";
}
print_r($quer);
$bdd->query($quer);
?>