<?php
//print_r($_POST);
//echo "test";
//obtener informacion
//[sex] => M [year] => [month] => [day] => [nationality] => [phone] => [profession] => [weight] => [weightu] => kg 
//[height] => [heightu] => cm [type] => muscular [weightd] => [weightdu] => kg [fre] => [nom] => [email] => )
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
//3 nouveaux
$facebook=isset($_POST['facebook'])?$_POST['facebook']:'';
$insta=isset($_POST['insta'])?$_POST['insta']:'';
$tw=isset($_POST['tw'])?$_POST['tw']:'';

$usuario=isset($_POST['usuarioid'])?$_POST['usuarioid']:'';


//verificar
setlocale(LC_TIME, ['fr', 'fra', 'fr_FR']);
$testdate=0;
$testcel=0;
$testw=0;
$testh=0;
$testwd=0;

//if (!$testh){echo "dd";}
//la date
if(checkdate($month,$day,$year)||$month.$year.$day==""){
    $testdate=1;
    $nais=$year.'-'.$month.'-'.$day.' 00:00:00';
} else {
    echo "wrong";
}
//le cellulaire
$phone2=str_replace(array('(',')','-'), array('','',''), $phone);
if(preg_match('/^[0-9]*$/', $phone2)) { // for english chars + numbers only
    // valid username, alphanumeric & longer than or equals 5 chars
    $testcel=1;
} else {
    echo "wrong";
}
//taille poids et poids espere
if(preg_match('/^[0-9]*[.,]?[0-9]*$/', $weight)) { // for english chars + numbers only
    // valid username, alphanumeric & longer than or equals 5 chars
    $testw=1;
} else {
    echo "wrong";
}
if(preg_match('/^[0-9]*[.,]?[0-9]*$/', $height)) { // for english chars + numbers only
    // valid username, alphanumeric & longer than or equals 5 chars
    $testh=1;
} else {
    echo "wrong";
}
if(preg_match('/^[0-9]*[.,]?[0-9]*$/', $weightd)) { // for english chars + numbers only
    // valid username, alphanumeric & longer than or equals 5 chars
    $testwd=1;
} else {
    echo "wrong";
}
//test pour les trois siteweb
$site1=($facebook=='')||(filter_var($facebook,FILTER_VALIDATE_URL));
$site2=($insta=='')||(filter_var($insta,FILTER_VALIDATE_URL));
$site3=($tw=='')||(filter_var($tw,FILTER_VALIDATE_URL));

if (!$site1||!$site2||!$site3){
    $sites=0;
} else {
    $sites=1;
}

//$quer="update usuarios set nationalite='$nationality' where nom='$nom'";
//echo $quer;
//$existe=$bdd->query($quer);
//modification sql pour inserer les informations + vues d erreur
//echo $testwd;
$testfinal=($testdate*$testcel*$testw*$testwd*$testh*$sites);
//seulement pour mes tests
//echo "sdfsd";

//pour nos test
//$testfinal=1;

if ($testfinal!=0) {

//vue
include('p3header.php'); 
//exit();?>
<a <?php if ($page==1) {echo 'class="active"';}?> href="p3accueillogin.php?page=1">Planning</a>
<a <?php if ($page==2) {echo 'class="active"';}?> href="p3accueillogin.php?page=2">Periodic</a>
<a <?php if ($page==3) {echo 'class="active"';}?> href="p3accueillogin.php?page=3">View</a>
<a <?php if ($page==""||$page==4) {echo 'class="active"';}?> href="p3accueillogin.php?page=4">Profile</a>
<a href="p3accueillogout.php">Log Out</a>
</div>
<div class="row loginfo">
Greetings
</div>
<div class="content">
<?php
//sql
$quer="update usuarios set nationalite='$nationality',sexe='$sex',nais='$nais',prof='$profession',cel='$phone',poids='$weight'";
$quer.=",poidsesp='$weightd',taille='$height',typecorps='$type',freq='$fre',tailleu='$heightu',poidsu='weightu',poidseu='$weightdu',photo='$photo'";
$quer.=",facebook='$facebook',tw='$tw',insta='$insta' where id=$usuario";
//echo $quer;




?>
 <?php   
include('p3accueilloginpage4.php');
$existe=$bdd->query($quer);
?>



</div>
<?php 
//$existe=$bdd->query($quer);
include('p3footer.php'); 

}?>
