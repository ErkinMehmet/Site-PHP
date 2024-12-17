<?php

include('conexion.php');
//print_r($_POST);
$postdata=json_decode($_POST['json_name']);
//print_r($postdata->u);

$img=property_exists($postdata, 'imgBase64')?$postdata->imgBase64:"";
$uc=property_exists($postdata, 'uc')?$postdata->uc:"";;
$img = str_replace('data:image/png;base64,', '', $img);
	$img = str_replace(' ', '+', $img);
	$data = base64_decode($img);
    define('UPLOAD_DIR', 'drapeaux/');
    $file = UPLOAD_DIR . uniqid() . '.png';
    $success = file_put_contents($file, $data);
    
print_r($success);
    //sql update image
$quer="update p1usuarios set photo='$file' where courriel='$uc'";
$bdd->query($quer);
print_r("fuckyou");
print_r($file);

?>