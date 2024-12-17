<?php
session_start();
//$sendercookie=isset($_POST['sender'])?$_POST['sender']):"";
//setcookie('sender',$sendercookie,time() + (86400 * 30), "/");
?>
<!Doctype html>
<html>
<head>

<meta charset="UTF-8"/>
  <link rel="stylesheet" href="chat.css">
  <title>Your realtime chat</title>
<script>

function nottyping(){
var xmlhttp =  new XMLHttpRequest();
xmlhttp.onreadystatechange=function(){
           if (this.readyState == 4 && this.status == 200) {
                
}
};
        xmlhttp.open("GET", "nottyping.php", true);
        xmlhttp.send();
}

function typing(){
var xmlhttp =  new XMLHttpRequest();
xmlhttp.onreadystatechange=function(){
           if (this.readyState == 4 && this.status == 200) {
                
}
};
        xmlhttp.open("GET", "typing.php", true);
        xmlhttp.send();
}


function offline(){
var xmlhttp =  new XMLHttpRequest();
xmlhttp.onreadystatechange=function(){
           if (this.readyState == 4 && this.status == 200) {
                
}
};
        xmlhttp.open("GET", "offline.php", true);
        xmlhttp.send();
}


function realtime() {
	 setInterval(refresh,100);
}

function refresh() {

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("history").innerHTML = this.responseText;
}
};
        xmlhttp.open("GET", "realtimechat.php", true);
        xmlhttp.send();
}

window.onbeforeunload=offline;
</script>
</head>

<body onload="realtime()">
<?php
//if (session_id!=''){
//session_destroy();
//}

//properties

$bold=isset($_POST['bold'])?$_POST['bold']:0;
$italic=isset($_POST['italic'])?$_POST['italic']:0;
$underlined=isset($_POST['underlined'])?$_POST['underlined']:0;
$imp=isset($_POST['imp'])?$_POST['imp']:0;
$color=isset($_POST['color'])?$_POST['color']:"";
$bgcolor=isset($_POST['bgcolor'])?$_POST['bgcolor']:"";



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
//print_r($_POST);
//print_r($sender);
//print_r($receiver);
//print_r($_SESSION['receiver']);

include('conexion.php');
//create an account if not created

$rep=$bdd->query("SELECT COUNT(*) AS exist FROM chatters WHERE name=\"".$sender."\"") or die(print_r($bdd->errorInfo()));
$repp=$rep->fetch();

if ($repp['exist']==0) {
$bdd->query("INSERT INTO chatters(name) VALUES('$sender')") or die(print_r($bdd->errorInfo()));
}
//
$rep1=$bdd->query("SELECT COUNT(*) AS exist FROM chatters WHERE name=\"".$receiver."\"") or die(print_r($bdd->errorInfo()));
$repp1=$rep1->fetch();

if ($repp1['exist']==0) {
$bdd->query("INSERT INTO chatters(name) VALUES('$receiver')") or die(print_r($bdd->errorInfo()));
}

//change state to online
$bdd->query("UPDATE chatters SET online=1 WHERE name=\"".$sender."\"");



//get last message
$reponse2=$bdd->query("SELECT * FROM chats ORDER BY id DESC") or die(print_r($bdd->errorInfo()));
$lastrow=$reponse2->fetch();
$lastmessage=$lastrow['message'];


if (!empty($message) && $message!=$lastmessage) {
$reponse0=$bdd->query("INSERT INTO chats(sender,receiver,message,datetime,bold,italic,underlined,imp,color,bgcolor) VALUES('$sender','$receiver','$message',curtime(),'$bold','$italic','$underlined','$imp','$color','$bgcolor')") or die(print_r($bdd->errorInfor()));
}


?>

<div class="top">
</div>

<div class="chatwindow">
<div class="title" style="background-color:#fff;width:30%;margin-left:35%;"><p>chat window</p>
</div>

<form method="post" action="testajax.php" style="width:100%;text-align:center;margin-left:0px;">

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


<textarea cols="90" rows="3" name="message" id="message" onmouseover="kill()" onfocus="typing()" onblur="nottyping()">What do you want to say to <?php echo !empty($receiver)?$receiver:"him/her"; ?>?</textarea>
<input type="submit" value="Send" class="btn" style="font-size:24px;">
<input type="hidden" id="sender" name="sender" value="<?php echo (isset($_POST['sender'])?$_POST['sender']:$sender);?>">
<input type="hidden" id="receiver" name="receiver" value="<?php echo (isset($_POST['receiver'])?$_POST['receiver']:$receiver);?>">
</form>
</div>


<div id="history"></div>

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
