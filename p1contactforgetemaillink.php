<?php
//verifier si existe
  $quer="select * from p1pwch where clef='$paramclef'";
//print $quer;
  $comms=$bdd->query($quer);
  while ($comm=$comms->fetch()){
    $timed=$comm['timed'];
    $timec=$comm['timec'];
    $mdpa=$comm['mdpa'];
    //print_r($comm);
  }

  if ($timed!=""){
    //valider
    //si c est valide encore: mdpa est vide+timec est vide+timed > now-1jour mais <now
    $timedts=strtotime($timed);
    //print_r($timed);
    $now=date("Y-m-d H:i:s");
    $timedts=strtotime($timed);
    $nowts=strtotime($now);
    //print_r($timedts);
    //print_r($nowts);
    $difff=($nowts-$timedts)/3600/24;
    if ($difff>=0&&$difff<=1) {
    //success
    //formulaire
include('p1contactforgetemaillinkform.php');
} else {
    //erreur expire
?>
<div class="alert alert-warning alert-dismissible fade show">
    <strong>Warning!</strong><br/> It seems that the link has expired. Plus try again.
    <button type="button" class="close" data-dismiss="alert">&times;</button>
</div>
<?php
    include('p1contactforgetform.php');
}
//end pour if
}else {
  //si pas de resultat
//inclure encore le formulaire
include('p1contactforgetemail.php');
}
?>