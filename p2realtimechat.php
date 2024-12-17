<?php
//print_r($_GET);
$r=$_GET["s"];
$s=$_GET["r"];



include('conexion.php');

//get last message
//$reponse2=$bdd->query("SELECT * FROM chats ORDER BY id DESC") or die(print_r($bdd->errorInfo()));
//$lastrow=$reponse2->fetch();
//$lastmessage=$lastrow['message'];

//if (!empty($message) && $message!=$lastmessage) {
//$reponse0=$bdd->query("INSERT INTO chats(sender,receiver,message,datetime,bold,italic,underlined,imp,color,bgcolor) VALUES('$sender','$receiver','$message',curtime(),'$bold','$italic','$underlined','$imp','$color','$bgcolor')") or die(print_r($bdd->errorInfor()));
//}

//obtenir les noms des deux personnes
$sender=$s;
$receiver=$r;

$quer="select anom from accounts where id=".$s;
$existe=$bdd->query($quer);
$existe2=$existe->fetch();
$sender=$existe2['anom'];
$existe=$bdd->query($quer);
$existe2=$existe->fetch();
$receiver=$existe2['anom'];





//tell if the other is online or typing
$rep=$bdd->query("SELECT online FROM accounts WHERE id=$s") or die(print_r($bdd->errorInfo()));
$repp=$rep->fetch();

//print_r($repp);
if ($repp['online']==1){
  echo "<div style=\"padding-left:10px;\">".$receiver." is online now</div><hr/>";
  } else {
  echo "<div style=\"padding-left:10px;\">".$receiver." is offline now</div><hr/>";
  }

  $rep=$bdd->query("SELECT typing FROM convo WHERE arecid=$r and asendid=$s") or die(print_r($bdd->errorInfo()));
$repp=$rep->fetch();
  if ($repp['typing']){
    echo "<div class=\"mesfrom\"><p class=\"received typing\">".$receiver." is typing...</p></div>";
  }

  $quer="SELECT * FROM convo WHERE (asendid=\"".$s."\" AND arecid=\"".$r."\") OR (asendid=\"".$r."\" AND arecid=\"".$s."\")  ORDER BY time DESC LIMIT 5";
 //echo $quer;
 $reponse=$bdd->query($quer);

  $compte=0;
  echo "<div style=\"padding:0;\">";
 while ($donnees=$reponse->fetch()) {
  

  if ($donnees['asendid']==$s) {
  $ligne="<div class\"mesto\" style=\"background-color:lightgrey; margin:0;\"><p class=\"sent\"><small>To ".$receiver.":</small><br/><br/><strong>".$donnees['msg']." </strong><br/><small>at ".$donnees['time']."</small></p></div>";
  } else {
  $ligne="<div class\"mesfrom\" style=\"background-color:lightgrey; margin:0;\"><p class=\"received\"><small>From ".$receiver.":</small><br/><br/><strong>".$donnees['msg']." </strong><br/><small>at ".$donnees['time']."</small></p></div>";
  }
  echo $ligne;
  }
  echo "</div>";
?>



