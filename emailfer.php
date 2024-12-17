<?php
if (isset($_POST['submit'])){
$to="fhuanchaoli@mitosushi.com";
$from=$_POST['email'];
$subject="test email";
$message="hahah".$_POST['message'];
$headers="from test";
mail($to,$subject,$message,$headers);
echo "mail sent";
}
?>
<!doctype html>
<head>
<title>test email</title>
</head>

<body>
<form action="" method="post">
email:<input type="text" name="email"><br/>
message:<textarea row="5" nmae="message" cols="30"></textarea><br/>
<input type="submit" value="submit" name="submit">
</form>
</body>
</html>
