<?php
include('conexion.php');
$postdata=json_decode($_POST['json_name']);
//print_r($postdata);
$uc=property_exists($postdata, 'uc')?$postdata->uc:"";
$fc=property_exists($postdata, 'u2c')?$postdata->u2c:"";
//extraire les donness
$quer="select nom,sexe,nais,nationalite,prof,poids,poidsu,taille,tailleu from p1usuarios where courriel='$fc'";
//print_r($quer);
$comms=$bdd->query($quer);
$comm=$comms->fetch();
$fnom=$comm['nom'];
$fsexe=$comm['sexe'];
$fnais=$comm['nais'];
$fnat=$comm['nationalite'];
$fprof=$comm['prof'];
$fpoids=$comm['poids'];
$fpoidsu=$com['poidsu'];
$ftai=$comm['taille'];
$ftaiu=$comm['tailleu'];

//presenter les donnees
?>
<div class="form-group"><label>Alias:</label><input type="text" id="frsrproalias" class="form-control"/></div>
<hr/>
<p><label>Name:</label><?php echo " $fnom";?></p>
<p><label>Sex:</label><?php echo " $fsexe";?></p>
<p><label>Nais:</label><?php echo " $fnais";?></p>
<p><label>Nationality:</label><?php echo " $fnat";?></p>
<p><label>Job:</label><?php echo " $fprof";?></p>
<p><label>Weight:</label><?php echo " $fpoids"." $fpoidsu";?></p>
<p><label>Height:</label><?php echo " $ftai $ftaiu";?></p>
