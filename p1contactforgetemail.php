<?php
$email=isset($_POST['email'])?$_POST['email']:'';
$submit=isset($_POST['submitxxx'])?$_POST['submitxxx']:'';;
if ($submit==""){
  //si pas d inscription on envoie le formulaire a remplir
  include('p1contactforgetform.php');
} else {
//on doit verifer le courriel. s il n existe pas on envoie une page d erreur
$quer="select count(*) as countemail from p1usuarios where courriel='$email'";
//print_r($quer);
$comms=$bdd->query($quer);
while ($comm=$comms->fetch()){
  $emailexists=$comm['countemail'];
}
if ($emailexists==0){

?>
<div class="alert alert-warning alert-dismissible fade show">
    <strong>Warning!</strong><br/> The email address does not exists. Please try again.
    <button type="button" class="close" data-dismiss="alert">&times;</button>
</div>
<?php
include('p1contactforgetform.php');

}else {
  $quer="select * from p1usuarios where courriel='$email'";
  //print_r($quer);
  $comms=$bdd->query($quer);
  while ($comm=$comms->fetch()){
    $nom=$comm['nom'];
    $idusuario=$comm['id'];
    $mdpde=$comm['mdp'];
  }
//on doit creer un lien et un enregistrement pour le changement de mdp - il faut une base de donnees
$ahora=new DateTime();
$ahoratimestamp=$ahora->getTimeStamp();
$clef=strval($ahoratimestamp.$nom);
//print_r($clef);
$current_url = explode("?", $_SERVER['REQUEST_URI']);
$pwchlink=$current_url[0] ;
$pwchlink.="?forget=y&param=".$clef;
//print_r($pwchlink);
$ahoraymdhms=$ahora->format('Y-m-d H:i:s');
$visitor=$_SERVER['REMOTE_ADDR'];
$quer="insert into p1pwch(timed,idusuario,clef,visitor,mdpde) values('$ahoraymdhms',$idusuario,'$clef','$visitor','$mdpde')";
//print_r($quer);
$bdd->query($quer);

//si le lien est valide (le temps est ok et n est pas utilise encore) on procede avec le changement sinon desole il faut qu on envoie le formulaire
//une autre fois
//$quer="select * from p1pwch where ";

//on va envoyer un courriel si le courriel existe
$emailsub="Change of Password for Web Page Fernandodupaysdelicorne";

$msg="<html>
<head>
<title>Password Change</title>
</head>
<body>
<p>"."Hello ".$nom.","."</p><p>Please follow this link to change your password:<a href='$pwchlink'>Password Change</a></p>



</body>
</html>";


// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
// More headers
$headers .= 'From: <webmaster@example.com>' . "\r\n";
$headers .= 'Cc: myboss@example.com' . "\r\n";
//$msg = wordwrap($msg,70);
//print_r($email);
mail($email,$emailsub,$msg,$headers);


//page success
?>
<div class="alert alert-success alert-dismissible fade show">
    <strong>Success!</strong> A message has been sent to your email address! Please follow the instructions to change your password.
    <button type="button" class="close" data-dismiss="alert">&times;</button>
</div>
<?php
}
}
?>
