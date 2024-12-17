<?php include('p1header.php'); ?>
<a href="p1.php">Mon CV</a>
<a href="aspir.php">Services</a>
<a href="arti.php">Articles</a>
<a class="active" href="comm.php">Comments</a>
<a href="rendezvous.php?#">Rendez-vous</a><a href="p1contact.php">Contact</a>
<a href="oth.php">Others</a>
</div>

<?php include('conexion.php'); ?>

<?php
error_reporting(0);       // Turn off error reporting
ini_set('display_errors', 0);
//inserer le commentaire
$comm=$_POST['commentaire'];
if ($comm!="") {
	//print_r($_POST);
if (strlen($comm)>5)
{
	//s assure que c est le meme commentaire que le dernier
	$quer="select * from commentaire ORDER BY id DESC LIMIT 1";
	$commentarios=$bdd->query($quer);
	$ultcommentario=$commentarios->fetch();
	$ult=$ultcommentario['commentaire'];
	//echo "dfadf".$ult;

	$tempscourant=date("Y-m-d H:i:s");
	//traiter commentaires sil ya des graphiques
	$quer="insert into commentaire(nom,commentaire,hidden,temps,lugar,correo,cel,login,pays) values(\"".$_POST['commauteur'];
	
	$commechape=str_replace("\"","\\\"",$_POST['commentaire']);
	$ppays=$_POST['ppays'];


	$quer=$quer."\",\"".$commechape."\",0,\"".$tempscourant."\",";
	$quer.="\"".$_POST['lugar']."\",";
	if (filter_var($_POST['correo'],FILTER_VALIDATE_EMAIL)) {
		$quer.="\"".$_POST['correo']."\",";
	} else {
		$quer.="\"\",";
	}

	$quer.="\"".$_POST['cel']."\",";
	$quer.="\"".$_SERVER['HTTP_USER_AGENT'].$_SERVER['REMOTE_ADDR ']."\"";
	$quer=$quer.",\"".$_POST['ppays']."\")";
	//echo $quer;
	//echo $commechape;
	//echo $ult;
	if ($ult!=$commechape) {
		$resul=$bdd->query($quer);
		//echo $quer;
		echo $mysql_error;
	} else {
		echo "<h2 class=\"error\">Your comment is too short, is identical to another or contains sensitive keys.</h2>";
	}
} else {
	echo "<h2>Please enter your comments again.</h2>";
}
}
?>

<div class="content" style="background:rgb(255,240,254);">

<div id="saisie">
<div id="panel">
<div class="countries" id="countries">
	<h4>All Countries</h4>
<?php
//pour avoir tous les emojis
$repertoire="drapeaux";
$files=scandir($repertoire);
//print_r($files);
$emojinum=0;
foreach ($files as $file) {
	if ($file<>"." and $file<>".." && strpos($file, '.png') !== false) {
		$emojinum+=1;
		echo "<img src=\"drapeaux/".$file."\" width=\"30\" onclick=\"addcountry(this)\">";
		if ($emojinum % 25 ==0) {
			echo "<br/>";
		}

	}
}
?>
</div>
</div>
<div class="lignecomm">
<div class="commentboxl">
<button class="btn btn-success" onclick="showcountries()">Change Flag</button><br/>
<img src="drapeaux/PT.png" id="commpays" width="100">
</div>

<div contentEditable="true" class="commentboxx commentboxr" id="boitedesaisie">
</div>
</div>

<br/><br/>
<form method="post" action="#" id="myForm">
<div class="form-group">
<label for="auteur">Your name:</label>
<input type="text" name="commauteur" id="commauteur" value="Anonymous" class="form-control">
</div>
<div class="form-group">
<label for="correo">Email:</label>
<input type="text" name="correo" id="correo" value="yourname@govr.ar" class="form-control"></div>
<div class="form-group">
<label for="cel">Cellphone:</label>
<input type="text" name="cel" id="cel" value="123456" class="form-control"></div>
<div class="form-group">
<label for="lugar">Place:</label>
<input type="text" name="lugar" id="lugar" value="Santa Fe" class="form-control">
</div>
<input type="hidden" name="ppays" id="ppays" value="drapeaux/AR.png" class="form-control">
<?php
//pour testing
//print_r($_POST);
?>

<br/>
<input type="hidden" name="commentaire" id="commentaire">

</form>
<button class="btn btn-primary submitbutton" onclick="enviar()">Submit</button>
</div>




<div class="comment" id="comment">
<div id="panel2"><h2>Commentaires</h2></div>
<div class="comcon">

<?php
$quer="select * from commentaire ORDER BY id DESC";
$commentaires=$bdd->query($quer);

$counter=0;

//par page
//get page first
//sil y a pas de page c la premiere
$page=empty($_GET['page']) ? null : htmlspecialchars($_GET['page']);
if ($page==null){
	$page=1;
}
$premier=$page*10-9;
$dernier=$page*10;

while ($commentaire=$commentaires->fetch())
{
$counter+=1;



if ($counter<=$dernier && $counter>=$premier){
	if ($counter % 2 ==0) {
		echo "<div class=\"comm commeven\">";
	} else {
		echo "<div class=\"comm commodd\">";
	}
	//il va falloir utiliser ceil pour savoir la page
	$pagecourante+=0.1;
?>
<div class="commentbox lignecomm">
<div class="commentboxl">
<img src="<?php if ($commentaire['pays']==""){
	echo "drapeaux/AR.png";
} else {
	echo $commentaire['pays'];
} 
?>" width="100">





<br/>
<label><?php echo $commentaire['nom']; ?></label>
</div>

<div class="commentboxr">
<div class="commentboxru">
<p class="commti">
Commented on <label><?php echo " ".$commentaire['temps']; ?></label> 
</p>
</div>

<div class="commentboxru">
<p class="commdes" class="centerimg">
<?php echo $commentaire['commentaire']; ?>
</p>
</div>

</div>
</div>




</div>
<?php
} else {
	$pagecourante+=0.1;
}
?>
<?php
}
?>

<br/>
<ul class="pagination pagination-lg" style="margin:20px 0">



<?php
$uri_parts = explode('?', $_SERVER['REQUEST_URI'], 2);
$uri_root='http://' . $_SERVER['HTTP_HOST'] . $uri_parts[0];

$pagetotal=ceil($pagecourante-0.1);

if ($page==null){
	if ($page==$pagetotal) {
		$uri_nex=$uri_root+"?page=".$page;
	} else {
		$pagenex=$page+1;
		$uri_nex=$uri_root."?page=".$pagenex;
	}
	?>

	<?php
if ($pagetotal>=2&&$pagetotal>9) {
	for ($x = 1; $x <= 9; $x++) {
		$uripage=$uri_root."?page=".$x;
		echo "<li class=\"page-item\"><a class=\"page-link";
		if ($x==1) {
			echo " "."active";
		}
		echo"\" href=\"$uripage\">$x</a></li>";
	  } 
} elseif ($pagetotal>=2) {
	for ($x = 1; $x <= $pagetotal; $x++) {
		$uripage=$uri_root."?page=".$x;
		echo "<li class=\"page-item\"><a class=\"page-link";
		if ($x==1) {
			echo " "."active";
		}
		echo "\" href=\"$uripage\">$x</a></li>";
	  } 
	  echo   "<li class=\"page-item\"><a class=\"page-link\" href=\"$uri_nex\">Next</a></li>";
}
} else {
	if ($page==1) {
		$uri_pre=$uri_root;
	} else {
		$pagepre=$page-1;
		$uri_pre=$uri_root."?page=".$pagepre;
	}

	if ($page==$pagetotal) {
		//echo $uri_root;
		$uri_nex=$uri_root."?page=".$page;
	} else {
		$pagenex=$page+1;
		$uri_nex=$uri_root."?page=".$pagenex;
	}
		
	//echo $pagenex;
	//echo $uri_root;
	echo   "<li class=\"page-item\"><a class=\"page-link\" href=\"$uri_pre\">Previous</a></li>";
	//s il y un numero de page
	if ($pagetotal>=$page&&$pagetotal>$page+8) {
		for ($x = $page; $x <= $page+8; $x++) {
			$uripage=$uri_root."?page=".$x;
			echo "<li class=\"page-item\"><a class=\"page-link";
			if ($x==$page) {
				echo " "."active";
			}
			echo "\" href=\"$uripage\">$x</a></li>";
		  } 
	} elseif ($pagetotal>=$page) {
		for ($x = $page; $x <= $pagetotal; $x++) {
			$uripage=$uri_root."?page=".$x;
			echo "<li class=\"page-item\"><a class=\"page-link";
			if ($x==$page) {
				echo " "."active";
			}
			echo "\" href=\"$uripage\">$x</a></li>";
		  } 
	}
	echo   "<li class=\"page-item\"><a class=\"page-link\" href=\"$uri_nex\">Next</a></li>";
}
?>
  
  
</ul>


</div>





</div>



<?php include('p1footer.php'); ?>