<?php
session_start();
?>
<doctype html>
<html lang="fr">
<head>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" href="chat.css">
  <title>Your chat with <?php echo $_POST["receiver"]; ?></title>
</head>

<body>
<?php
//if (session_id!=''){
//session_destroy();
//}

//properties

$bold=isset($_POST['bold'])?$_POST['bold']:"0";
$italic=isset($_POST['italic'])?$_POST['italic']:0;
$underlined=isset($_POST['underlined'])?$_POST['underlined']:0;
$imp=isset($_POST['imp'])?$_POST['imp']:0;
$color=isset($_POST['color'])?$_POST['color']:"";
$bgcolor=isset($_POST['bgcolor'])?$_POST['bgcolor']:"";

echo $bold;


$sender=isset($_POST['sender'])?$_POST['sender']:$_SESSION['sender'];
$receiver=isset($_POST['receiver'])?$_POST['receiver']:$_SESSION['receiver'];
$message=isset($_POST['message'])?$_POST['message']:"";
$sender=filter_var($sender,FILTER_SANITIZE_SPECIAL_CHARS);
$receiver=filter_var($receiver,FILTER_SANITIZE_SPECIAL_CHARS);
$message=filter_var($message,FILTER_SANITIZE_SPECIAL_CHARS);
//echo $receiver;
$_SESSION['sender']=$sender;
$_SESSION['receiver']=$receiver;
//$cookiesender;
//$cookiereceiver;
//echo $receiver;
//echo $sender;
//print_r($_COOKIE);
//print_r($_SESSION); 
print_r($_POST);
?>

<div class="top">
</div>

<div class="chatwindow">
<div class="title" style="background-color:#fff;width:30%;margin-left:35%;"><p>chat window</p>
</div>

<form method="post" action="chat.php" style="width:100%;text-align:center;margin-left:0px;">

<label for="color" style="display:inline;">Choose your color:</label>

<select name="color" id="color" size="1" class="pro" style="margin-left:0px;display:inline;">
<option value="Brown">Brown</option>
<option value="Blue">Dark Blue</option>
<option value="Black">Black</option>
</select>

<input type="checkbox" name="italic" id="italic" value="yes" class="pro" style="display:inline-block;horizontal-align:middle;floating:left;margin-left:160px;">

<label for="italic" class="formlab" style="display:inline-block;width:0px;text-align:right;floating:right;">Italic</label>


<input type="checkbox" name="bold" id="bold" value="yes" class="pro" style="display:inline-block;horizontal-align:middle;floating:left;">
<label for="bold" class="formlab" style="display:inline-block;width:0px;text-align:right;floating:right;">Bold</label>
<br/>

<label for="bgcolor" style="display:inline;">Choose your background color:</label>

<select name="bgcolor" id="bgcolor" size="1" class="pro" style="display:inline;">
<option value="Pink">Pink</option>
<option value="Green">Green</option>
<option value="Blue">Blue</option>
</select>
<input type="checkbox" name="underlined" id="underlined" value="yes" class="pro" style="display:inline-block;horizontal-align:middle;floating:left;margin-left:100px;">

<label for="underlined" class="formlab" style="display:inline-block;width:0px;text-align:right;floating:right;">Underlined</label>
<input type="checkbox" name="imp" id="imp" value="yes" class="pro" style="display:inline-block;horizontal-align:middle;floating:left;">
<label for="imp" class="formlab" style="display:inline-block;width:0px;text-align:right;floating:right;">Important</label>


<textarea cols="90" rows="3" name="message" id="message" onmouseover="kill()">What do you want to say to <?php echo !empty($receiver)?$receiver:"him/her"; ?>?</textarea>
<input type="submit" value="Send" class="btn" style="font-size:24px;">
<input type="hidden" id="sender" name="sender" value="<?php echo (isset($_POST['sender'])?$_POST['sender']:$sender);?>">
<input type="hidden" id="receiver" name="receiver" value="<?php echo (isset($_POST['receiver'])?$_POST['receiver']:$receiver);?>">
</form>
</div>





<div class="history" id="history">
<?php

include('conexion.php');
//get last message
$reponse2=$bdd->query("SELECT * FROM chats ORDER BY id DESC") or die(print_r($bdd->errorInfo()));
$lastrow=$reponse2->fetch();
$lastmessage=$lastrow['message'];
//echo $lastmessage;

if (!empty($message) && $message!=$lastmessage) {
$reponse0=$bdd->query("INSERT INTO chats(sender,receiver,message,datetime,bold,italic,underlined,imp,color,bgcolor) VALUES('$sender','$receiver','$message',curtime(),'$bold','$italic','$underlined','$imp','$color','$bgcolor')") or die(print_r($bdd->errorInfor()));
}



$reponse=$bdd->query("SELECT * FROM chats WHERE (sender=\"".$sender."\" AND receiver=\"".$receiver."\") OR (sender=\"".$receiver."\" AND receiver=\"".$sender."\") ORDER BY datetime DESC") or die(print_r($bdd->errorInfor()));

while ($donnees=$reponse->fetch()) {


//translate the properties
if ($donnees['italic']) {
   $ita="italic";
} else {
$ita="normal";
};

if ($donnees['sender']==$sender) {
$ligne="<div class=\"mesto\"><p class=\"sent\">To ".$donnees['receiver'].": ".$donnees['message']." at ".$donnees['datetime']."</p></div>";
} else {
$ligne="<div class=\"mesfrom\"><p class=\"received\">From ".$donnees['sender'].": ".$donnees['message']." at ".$donnees['datetime']."</p></div>";
}
echo $ligne;

}
$reponse->closeCursor();
?>




</div>
<div class="bottom">
footer
</div>
<script>
function kill() {
	 var para=document.getElementById("message");
	 if (para.value.match(/What do you want to.*/)) {
	 para.value="";
	 }
}

function mark() {
}

</script>
</body>
</html>
