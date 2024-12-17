<?php include('p3header.php'); 


?>
<a class="active" href="p3inscription.php">Subscription</a>
<a href="p3.php">Log In</a>
</div>


<!-- POUR COMM
<div class="content">
hello this is contenido
<div contentEditable="true" class="commentbox">ddfaf
</div>
</div>
-->
<div class="content">
<div class="ligne">

<div class="gauche">


</div>

<div class="centre">
    <h2>An email has been sent to your email account. Please validate through your email.</h2>
<?php include('conexion.php'); 
//obtenir le courriel
//obtenir les infos pour cette personne ci
$quer="select * from usuarios where nom=\"".$nom."\"";
$existe=$bdd->query($quer);
$existe2=$existe->fetch();
$id=$existe2['id'];
$nom2=$existe2['courriel'];

//obtenir les infos sur l url
$urlnous=$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME'];
$urlnousm=explode("/", $urlnous);
//print_r(count($urlnousm));
//echo $urlnousm[count($urlnousm)-1];
//echo strlen($urlnousm[count($urlnousm)-1]);
$urlult=strlen($urlnousm[count($urlnousm)-1]);
//echo $urlult;
$urllien=substr($urlnous, 0, strlen($urlnous)-$urlult)."p3changermdp.php";
//echo $urlnous.count($urlnousm).$urlult.$urllien;
$lien=$urllien."?id=".$id;
echo $lien;
$to = $nom2;
$subject = "UniGymnacio Validation Email";

$message = "
<html>
<head>
<title>Validation of Password for UniGymnacio</title>
</head>
<body>
";
$message.="Dear ".$nom;

$message.="<br/>
<p>Please follow the link below:</p>

<p><a";
$message.=" href=\"".$lien."\">".$lien;

$message.="</a></p>

</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <admin@fernandodupaysdelicorne.com>' . "\r\n";
//$headers .= 'Cc: myboss@example.com' . "\r\n";
//echo $to;
//echo $message;
//echo $headers;
mail($to,$subject,$message,$headers);



?>










</div>


<div class="droite">

</div>

</div>
</div>


<?php include('p2footer.php'); ?>