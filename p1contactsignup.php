<?php include('conexion.php'); ?>

<div class="chatbotlogin">



<?php 
//obtenir post
//print_r($_POST);
$mdp=isset($_POST['mdp'])?$_POST['mdp']:"";
$mdp2=isset($_POST['mdp2'])?$_POST['mdp2']:"";
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
$photo=isset($_POST['avatar'])?$_POST['avatar']:'';
$submit=isset($_POST['submitxxx'])?$_POST['submitxxx']:'';;


//si post0 signup
if ($submit==""){
  include('p1contactsignupform.php');

} else {
//si post1 validation---- corre
//si tous les 4 champs sont remplis1
//$test10=0;
$tests=array(0,0,0,0,0,0,0,0,0);
$errmsgs=array("Some of the necessary fields are missing.","The username needs to contain five characters or more.","The two passwords do not match.");
array_push($errmsgs,"The password needs to contain at lease one capital letter, one small letter and a number, with a length of 8 or more characters.");
array_push($errmsgs,"The email is not valid","The email already exists","The date is not valid.","The weight is not valid.","The height is not valid.");


if ($mdp!=""&&$mdp2!=""&&$nom!=""&&$email!=""){
  $tests[0]=1;
}


//valider nom n est pas tres court2
if (strlen($nom)>=5){
  $tests[1]=1;
}

//les deux mdp sont correct3
// Validate password strength
if ($mdp==$mdp2){
  $tests[2]=1;
}

//le mdp est securitaire4
$uppercase = preg_match('@[A-Z]@', $mdp);
$lowercase = preg_match('@[a-z]@', $mdp);
$number    = preg_match('@[0-9]@', $mdp);
//$specialChars = preg_match('@[^\w]@', $password);
if (strlen($mdp)>=8&&$uppercase&&$lowercase&&$number){
  $tests[3]=1;
}

//le format de courriel est correct5
if (filter_var($email, FILTER_VALIDATE_EMAIL)){
  $tests[4]=1;
}

//le courriel n est pas utilise6
$quer="select count(*) as countemail from p1usuarios where courriel='$email'";
//print_r($quer);
$comms=$bdd->query($quer);
while ($comm=$comms->fetch()){
  $emailexists=$comm['countemail'];
}
if ($emailexists==0){
  $tests[5]=1;
}

//err7 not a valid date
function validateDate($date, $format = 'Y-m-d')
{
    $d = DateTime::createFromFormat($format, $date);
    // The Y ( 4 digits year ) returns TRUE for any integer with any number of digits so changing the comparison from == to === fixes the issue.
    return $d && $d->format($format) === $date;
}
$nais=$year."-".$month."-".$day;
//echo $nais;
//echo validateDate($nais);
if (DateTime::createFromFormat('Y-m-d', $nais) !== FALSE){
  $tests[6]=1;
} elseif ($nais=="--"){
  $nais="";
  $tests[6]=1;
}
if (preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$nais))
    {
        $tests6fac=1;
    }else{
      $tests6fac=0;
  }
  $tests[6]=$tests6fac*$tests[6];

//err8 weight
if (preg_match('/^[1-9][0-9]*$/',$weight)){
  $tests[7]=1;
} elseif ($weight==""){
  $tests[7]=1;
}

//err9 height numberic
if (preg_match('/^[1-9][0-9]*$/',$height)){
  $tests[8]=1;
} elseif ($height==""){
  $tests[8]=1;
}
//print_r($_POST);
//print_r($tests);
$sumtests=0;
for ($x = 0; $x <= 8; $x++) {
  $sumtests=$sumtests+$tests[$x];
} 
//print_r($sumtests);
if ($sumtests==9) {
//si post1correct1 login
//insertion
$harshmdp=password_hash($mdp, PASSWORD_ARGON2I);
//creer un userid
$hoyy=date('H-m-d H:i:s')."tabarnak".$nom;
$quer="insert into p1usuarios(mdp,nom,sexe,nais,courriel,nationalite,cel,poids,prof,facebook,insta,tw,autres,photo,userid) values('$harshmdp','$nom','$sex','$nais','$email','$nationality','$phone','$weight'";
$quer.=",'$profession','','','','','','$hoyy')";
//print_r($quer);
$bdd->query($quer);

//success page
?>
<div class="alert alert-success alert-dismissible fade show">
    <strong>Success!</strong> Your message has been sent successfully.
    <button type="button" class="close" data-dismiss="alert">&times;</button>
</div>
<?php
//login page
include('p1contactlogin.php');
} else {
//erreur msg
$errmsg="";
for ($x = 0; $x <= 8; $x++) {
  if ($tests[$x]==0){
    $errmsg.=$errmsgs[$x];
    $errmsg.="<br/>";
  }
} 
//echo $errmsg;
?>
<div class="alert alert-warning alert-dismissible fade show">
    <strong>Warning!</strong><br/> <?php echo$errmsg;?>
    <button type="button" class="close" data-dismiss="alert">&times;</button>
</div>

<?php
//elseif post1ocrrectnon err
include('p1contactsignupform.php');
}


}
?>


</div>



