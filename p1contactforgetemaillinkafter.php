<?php
//obtenir les info par post
//print_r($_POST);
$mdp=isset($_POST['mdp'])?$_POST['mdp']:"";
$mdp2=isset($_POST['mdp2'])?$_POST['mdp2']:"";


$tests=array(0,0);
//si les deux sont les memes
if ($mdp==$mdp2){
    $tests[0]=1;
  }

//si le mdp est securitaire
$uppercase = preg_match('@[A-Z]@', $mdp);
$lowercase = preg_match('@[a-z]@', $mdp);
$number    = preg_match('@[0-9]@', $mdp);
//$specialChars = preg_match('@[^\w]@', $password);
if (strlen($mdp)>=8&&$uppercase&&$lowercase&&$number){
  $tests[1]=1;
}
//print_r($tests);
$sumtests=0;
for ($x = 0; $x <= 1; $x++) {
  $sumtests=$sumtests+$tests[$x];
} 
//print_r($sumtests);
if ($sumtests==2){
    //echo "succ";
//get usuario id
$quer="select * from p1pwch where clef='$paramclef'";
//print $quer;
  $comms=$bdd->query($quer);
  while ($comm=$comms->fetch()){
    $timed=$comm['timed'];
    $timec=$comm['timec'];
    $mdpa=$comm['mdpa'];
    $idusuario=$comm['idusuario'];
    //print_r($comm);
  }
//mdp validation et c correct
//modifier le mot de passe
$harshmdp=password_hash($mdp, PASSWORD_ARGON2I);
$quer="update p1usuarios set mdp='$harshmdp' where id=$idusuario";
//print_r($quer);
$bdd->query($quer);

$timecnew=date('Y-m-d H:i:s');
//un enregistrement dans le tableau p1pwch
$quer="update p1pwch set mdpa='$harshmdp', timec='$timecnew' where clef='$paramclef'";
//print_r($quer);
$bdd->query($quer);

//msg success
?>
<div class="alert alert-success alert-dismissible fade show">
    <strong>Success!</strong> Your password has been changed.
    <button type="button" class="close" data-dismiss="alert">&times;</button>
</div>
<?php
//envoie le formulaire
include('p1contactloginform.php');
} else {
    //echo "fail";
//msg echec
?>
<div class="alert alert-warning alert-dismissible fade show">
    <strong>Warning!</strong> Please try again. The password needs to contain at least on capital letter, one small letter and one number, with an overall length
     of more than 8 characters.
    <button type="button" class="close" data-dismiss="alert">&times;</button>
</div>

<?php
    //mdp pas correct envoyer le formulaireune autre fois 
    //include("p1contactforgetemaillink.php");

    //mdp pas correct envoyer le formulaireune autre fois 
    include("p1contactforgetemaillink.php");
}



?>
