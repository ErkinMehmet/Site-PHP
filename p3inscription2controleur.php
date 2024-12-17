<?php
//info
include('conexion.php');
//print_r($_POST);

$nom=isset($_POST['nom'])?$_POST['nom']:"";
$email=isset($_POST['email'])?$_POST['email']:'';
$sex=isset($_POST['sex'])?$_POST['sex']:'';
$year=(int)(isset($_POST['year'])?$_POST['year']:'');
$month=(int)(isset($_POST['month'])?$_POST['month']:'');
$day=(int)(isset($_POST['day'])?$_POST['day']:'');
$nationality=isset($_POST['nationality'])?$_POST['nationality']:'';
$phone=isset($_POST['phone'])?$_POST['phone']:'';
$profession=isset($_POST['profession'])?$_POST['profession']:'';
$weight=isset($_POST['weight'])?$_POST['weight']:'';
$weightu=isset($_POST['weightu'])?$_POST['weightu']:'';
$height=isset($_POST['height'])?$_POST['height']:'';
$heightu=isset($_POST['heightu'])?$_POST['heightu']:'';
$type=isset($_POST['type'])?$_POST['type']:'';
$weightd=isset($_POST['weightd'])?$_POST['weightd']:'';
$weightdu=isset($_POST['weightdu'])?$_POST['weightdu']:'';
$fre=isset($_POST['fre'])?$_POST['fre']:'';
$photo=isset($_POST['avatar'])?$_POST['avatar']:'';

include('conexion.php');
//validation
setlocale(LC_TIME, ['fr', 'fra', 'fr_FR']);
$testdate=false;
$testcel=false;
//la date
if(checkdate($month,$day,$year)||$month.$year.$day==""){
    $testdate=true;
    $nais=$year.'-'.$month.'-'.$day.' 00:00:00';
}
//le cellulaire
$phone2=str_replace(array('(',')','-'), array('','',''), $phone);
if(preg_match('/^[0-9]*$/', $phone2)) { // for english chars + numbers only
    // valid username, alphanumeric & longer than or equals 5 chars
    $testcel=true;
}
//taille poids et poids espere
if(preg_match('/^[0-9]*[.,]?[0-9]*$/', $weight)) { // for english chars + numbers only
    // valid username, alphanumeric & longer than or equals 5 chars
    $testw=true;
}
if(preg_match('/^[0-9]*[.,]?[0-9]*$/', $height)) { // for english chars + numbers only
    // valid username, alphanumeric & longer than or equals 5 chars
    $testh=true;
}
if(preg_match('/^[0-9]*[.,]?[0-9]*$/', $weightd)) { // for english chars + numbers only
    // valid username, alphanumeric & longer than or equals 5 chars
    $testwd=true;
}

//$quer="update usuarios set nationalite='$nationality' where nom='$nom'";
//echo $quer;
//$existe=$bdd->query($quer);
//modification sql pour inserer les informations + vues d erreur
if ($testdate==true && $testcel==true && $testw==true && $testwd==true && $testh==true) {
    //sql
    //$quer="update usuarios set nationalite='$nationality' where nom='$nom' and courriel='$email'";
    $quer="update usuarios set nationalite='$nationality',sexe='$sex',nais='$nais',prof='$profession',cel='$phone',poids='$weight'";
    $quer.=",poidsesp='$weightd',taille='$height',typecorps='$type',freq='$fre',tailleu='$heightu',poidsu='weightu',poidseu='$weightdu',photo='$photo'";
    $quer.=" where nom='$nom'";
    //echo $quer;
    $existe=$bdd->query($quer);
?>
    <div class="alert alert-success alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Success!</strong> Now you could proceed to log in!
</div>
<?php
    include('p3.php');
} else {


    
 //vue d erreur et page d inscription2 pour que le client puisse refaire mais avec les info deja saisies
    include('p3inscription2.php');
}



?>