<?php
session_start();
?>
<doctype html>
<html lang="fr">
<head>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" href="t2.css">
  <title>Realtime Chat Application of Fernando</title>
</head>
<body>

<div class="outside">

<div class="bgpic">
</div>

<div class="container">
<form class="login" method="post" action="testajax.php">
<label for="sender">Your name:</label>
<input type="text" id="sender" name="sender" value="<?php echo $_SESSION['sender'];?>" class="champ"><br/>
<label for="receiver">The person you want to reach:</label>
<input type="text" class="champ" id="receiver" name="receiver" value="<?php echo $_SESSION['receiver'];?>">
<input type="submit" class="btn" id="enter" name="submit" value="Enter">
</form>
</div>

</div>

<script>
function nextpage() {
	 
}

function getpw() {
	 pwenter=prompt("Please enter the password to access the content:");
	 
}


</script>
<body>

</html>
