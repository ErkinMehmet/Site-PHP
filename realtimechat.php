<?php
session_start();
$sender=$_SESSION["sender"];
$receiver=$_SESSION["receiver"];
include('conexion.php');



//get last message
//$reponse2=$bdd->query("SELECT * FROM chats ORDER BY id DESC") or die(print_r($bdd->errorInfo()));
//$lastrow=$reponse2->fetch();
//$lastmessage=$lastrow['message'];

//if (!empty($message) && $message!=$lastmessage) {
//$reponse0=$bdd->query("INSERT INTO chats(sender,receiver,message,datetime,bold,italic,underlined,imp,color,bgcolor) VALUES('$sender','$receiver','$message',curtime(),'$bold','$italic','$underlined','$imp','$color','$bgcolor')") or die(print_r($bdd->errorInfor()));
//}

//tell if the other is online or typing
$rep=$bdd->query("SELECT typing, online FROM chatters WHERE name=\"".$receiver."\"") or die(print_r($bdd->errorInfo()));
$repp=$rep->fetch();
//print_r($repp);
if ($repp['online']){
echo $receiver." is online now";
} else {
echo $receiver."is offline now";
}

if ($repp['typing']){
echo "<div class=\"mesfrom\"><p class=\"received typing\">".$receiver." is typing...</p></div>";
}

//now get this history
$reponse=$bdd->query("SELECT * FROM chats WHERE (sender=\"".$sender."\" AND receiver=\"".$receiver."\") OR (sender=\"".$receiver."\" AND receiver=\"".$sender."\")  ORDER BY datetime DESC LIMIT 5") or die(print_r($bdd->errorInfor()));


while ($donnees=$reponse->fetch()) {


//translate the properties
//if ($donnees['italic']) {
  // $ita="italic";
//} else {
//$ita="normal";
//};

if ($donnees['sender']==$sender) {
$ligne="<div class=\"mesto\"><p class=\"sent\"><small>To ".$donnees['receiver'].":</small><br/><br/><strong>".$donnees['message']." </strong><br/><small>at ".$donnees['datetime']."</small></p></div>";
} else {
$ligne="<div class=\"mesfrom\"><p class=\"received\"><small>From ".$donnees['sender'].":</small><br/><br/><strong>".$donnees['message']." </strong><br/><small>at ".$donnees['datetime']."</small></p></div>";
}
echo $ligne;
}

$reponse->closeCursor();


?>
