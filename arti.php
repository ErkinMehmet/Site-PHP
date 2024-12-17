<?php include('p1header.php'); ?>
<a href="p1.php">Mon CV</a>
<a href="aspir.php">Services</a>
<a class="active" href="arti.php">Articles</a>
<a href="comm.php">Comments</a><a href="rendezvous.php?#">Rendez-vous</a><a href="p1contact.php">Contact</a>
<a href="oth.php">Others</a>
</div>

<?php include('conexion.php'); ?>

<?php
error_reporting(0);       // Turn off error reporting
ini_set('display_errors', 0);
//print_r($_GET);
//si l n y a pas de valeurs par get on donne le sommaire sinon on donne un article si le numero
//n est pas trouve on donne une page d erreur
$artnum=$_GET['artnum'];

if ($artnum=="") {
?>

<div class="comment" id="comment">
<div id="panel2"><h2>Articles</h2></div>
<div class="ligne">

<div id="arttrieur" class="gauche">
<?php
$uri_parts = explode('?', $_SERVER['REQUEST_URI'], 2);
$uri_root='http://' . $_SERVER['HTTP_HOST'] . $uri_parts[0];
//get search,lang,cat769583141592
//obtenir les info
$flang=$_GET['lang'];
$fcat=$_GET['cat'];

?>

<div class="form-group">
    <label for="exampleInputEmail1">Search:</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter keywords">
    <small id="emailHelp" class="form-text text-muted">Good luck with your search.</small>
	<button class="btn btn-secondary" type="button" id="dropdownMenuButto1" onclick="articlesfil()">
    Search
  </button>
  <button class="btn btn-secondary" type="button" id="dropdownMenuButto2" onclick="articlesunfil()">
    Clear
  </button>
  </div>
<hr/>
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Language
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  <a class="dropdown-item" href="<?php echo $uri_root."?lang=".""."&cat=".$fcat; ?>">All</a>
    <a class="dropdown-item" href="<?php echo $uri_root."?lang="."English"."&cat=".$fcat; ?>">English</a>
    <a class="dropdown-item" href="<?php echo $uri_root."?lang="."French"."&cat=".$fcat; ?>">French</a>
    <a class="dropdown-item" href="<?php echo $uri_root."?lang="."Spanish"."&cat=".$fcat; ?>">Spanish</a>
  </div>&nbsp;&nbsp;&nbsp;&nbsp;
<span id="langset">Current Language:<?php 
switch ($flang) {
	case "":
		echo " "."All";
	default:
		echo " ".$flang;
}
	?></span>
</div>
<br/>
<br/>

<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Category
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  <a class="dropdown-item" href="<?php echo $uri_root."?lang=".$flang."&cat=".""; ?>">All</a>
    <a class="dropdown-item" href="<?php echo $uri_root."?lang=".$flang."&cat="."Entertainment"; ?>">Entertainment</a>
    <a class="dropdown-item" href="<?php echo $uri_root."?lang=".$flang."&cat="."Linguistics"; ?>">Linguistics</a>
    <a class="dropdown-item" href="<?php echo $uri_root."?lang=".$flang."&cat="."Immigration"; ?>">Immigration</a>
	<a class="dropdown-item" href="<?php echo $uri_root."?lang=".$flang."&cat="."Programming"; ?>">Programming</a>
	<a class="dropdown-item" href="<?php echo $uri_root."?lang=".$flang."&cat="."Life"; ?>">Life</a>
  </div>&nbsp;&nbsp;&nbsp;&nbsp;
<span id="catset">Current Category: 
<?php 
//echo "dd";
switch ($fcat) {
	case "":
		echo " "."All";
	default:
		echo " ".$fcat;
}
	?></span>
</div>
<br/>
</div>

<div class="comcon droite60" id="allarticles">
<?php
$quer="select * from articulos";
//echo $quer;
//lang cat
if ($flang=="") {
	if ($fcat==""){
		$quer.="";
	} else {
		$quer.=" where cat=\"".$fcat."\"";
	}
} else {
	$quer.=" where lang=\"".$flang."\"";
	if ($fcat==""){
		$quer.="";
	}	else {
		$quer.=" and cat=\"".$fcat."\"";
	}
}

$quer.=" order by tiempo desc";

//print_r($quer);
$commentaires=$bdd->query($quer);

$counter=0;
while ($commentaire=$commentaires->fetch())
{
$counter+=1;

if ($counter % 2 ==0) {
	echo "<div class=\"comm commeven\">";
} else {
	echo "<div class=\"comm commodd\">";
}
?>

<p class="commti">
<strong><a class="articuloenlace" href="<?php echo $uri_root;?>?artnum=<?php echo $commentaire['id'];?>"> <?php echo $commentaire['titulo']; ?></a></strong> written on <label><?php echo $commentaire['tiempo']; ?></label> 
</p>
<p class="abstracto">
<?php echo $commentaire['abstracto']; ?>
</p>
</div>
<?php
}
?>
</div>
</div>
</div>
<?php
} else {
    //pour un article ou une page d erreur
    $quer="select * from articulos where id=".$artnum;
    $art=$bdd->query($quer);
    $art2=$art->fetch();
    //echo sizeof($art2);
    if (sizeof($art2)<=1) {
?>
<div class="errorcontainer">
<h1 class="errormsg">Oops! The article you are looking for does not exist.</h1>
    </div>

  <?php      
    } else {
        //info
        //print_r($_POST);
        $titulo=$art2['titulo'];
        $tiempo=$art2['tiempo'];
        $abstracto=$art2['abstracto'];
        $cuerpo=$art2['cuerpo'];
        $ps=$art2['ps'];
        $credito=$art2['credito'];
		$referencia=$art2['referencia'];

        ?>
<div class="articulo">
<h1><?php echo $titulo;?></h1>
<hr/>
<p class="author">Author: Fernando <?php echo "  ".$tiempo;?></p>



<br/>
<div class="cuerpoart">
<?php echo $cuerpo;?>
</div>

<?php
//pour les ps
if ($ps!=""){
?>
    <p class="ps"><h2>P.S.</h2><?php echo $ps;?></p>
<?php
}
?>



<?php
//pour les credits
if ($credito!=""){
?>
    <p class="creditos">Credits to: <?php echo$credito;?></p>
<?php
}
?>
<hr/>


<?php
//pour les references

if ($referencia!=""){
?>
<hr/>
<p class="referencia"><h2>References</h2><br/> <?php echo$referencia;?></p>
<?php
}
?>
    </div>
<hr/>
    <h2>Feedbacks from readers: </h2>

<div id="saisie">
<div id="panel">
<button onclick="bold()">Bold</button>
<button onclick="showcountries()">Countries</button>
<button>Emojis</button>
<br/>
<div class="countries" id="countries">
<?php
//pour avoir tous les emojis
$repertoire="drapeaux";
$files=scandir($repertoire);
//print_r($files);
$emojinum=0;
foreach ($files as $file) {
	if ($file<>"." and $file<>"..") {
		$emojinum+=1;
		echo "<img src=\"drapeaux/".$file."\" width=\"30\" onclick=\"addcountry(this)\">";
		if ($emojinum % 25 ==0) {
			echo "<br/>";
		}

	}
}
?>
</div>

<div class="emojis">

</div>
</div>

<div contentEditable="true" class="commentbox" id="boitedesaisie" onkeydown="changeartcomm(this)"> Please enter your comments over here!

</div>
<br/><br/>
<form method="post" action="#" id="myForm">

<?php
//get info
$auteur = empty($_POST['auteur']) ? null : htmlspecialchars($_POST['auteur']);
$correo = empty($_POST['correo']) ? null : htmlspecialchars($_POST['correo']);
$cel = empty($_POST['cel']) ? null : htmlspecialchars($_POST['cel']);
$lugar = empty($_POST['lugar']) ? null : htmlspecialchars($_POST['lugar']);
$hiddencomm = empty($_POST['hiddencomm']) ? null : $_POST['hiddencomm'];
$tit="title";
$tempscourant=date("Y-m-d H:i:s");
$login=$_SERVER['HTTP_USER_AGENT'].$_SERVEUR['REMOTE_ADDR '];


//obtenir le dernier
//print_r($artnum);
$querder="select * from commarticulos where articuloid=".$artnum." ORDER BY id DESC LIMIT 1";
//print_r($querder);

$der=$bdd->query($querder);
while ($derr=$der->fetch()){
$derrr=$derr['comen'];
}
//assurer que c est pas le meme que le dernier
//rint_r($querder);
//print_r($derrr);
if ($derrr!=$hiddencomm) {
//valider et filtrer
if (!filter_var($_POST['correo'],FILTER_VALIDATE_EMAIL)) {
    $correo="";
}
$hiddencomm=str_replace("\"","\\\"",$hiddencomm);

$quer="insert into commarticulos(articuloid,nombre,correo,tit,comen,tiempo,lugar,cel,login) values(".$artnum.",\"$auteur\",\"$correo\"";
$quer.=",\"$tit\",\"$hiddencomm\",\"$tempscourant\",\"$lugar\",\"$cel\",\"$login\"";
$quer=$quer.")";
//print_r($quer);

//inserer si tout est bon
if ($hiddencomm<>""){
    $resul=$bdd->query($quer);
    //echo $quer;
    echo $mysql_error;
}
}


?>




<label for="auteur">Your name:</label>
<input type="text" name="auteur" id="auteur" value="Alejo Argentina">
<label for="correo">Email:</label>
<input type="text" name="correo" id="correo" value="abc@xd.ar">
<label for="cel">Cellphone:</label>
<input type="text" name="cel" id="cel" value="567890">
<label for="lugar">Place:</label>
<input type="text" name="lugar" id="lugar" value="Santa Fe">
<input type="hidden" id="hiddencomm" name="hiddencomm">
<input type="hidden" name="commentaire" id="commentaire">

</form>
<button class="submitbutton" onclick="enviar()">Submit</button>
<hr/>
<h2>Comments</h2><br/>
<?php
//pour testing
//montrer les commentaires
//print_r($_POST);
$quer="select * from commarticulos where articuloid=".$artnum." ORDER BY id DESC";
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

<p class="commti">
<label><?php echo $commentaire['nombre']; ?></label> a commenté à <label><?php echo $commentaire['tiempo']; ?></label> 
</p>
<p class="commdes">
<?php echo $commentaire['comen']; ?>
</p>
</div>
<?php
} else {
	$pagecourante+=0.1;
}
}
?>

<br/>
<ul class="pagination pagination-lg" style="margin:20px 0">



<?php
$uri_parts = explode('?', $_SERVER['REQUEST_URI'], 2);
$uri_root='http://' . $_SERVER['HTTP_HOST'] . $uri_parts[0]."?artnum=".$artnum;

$pagetotal=ceil($pagecourante-0.1);

if ($page==null){
	if ($page==$pagetotal) {
		$uri_nex=$uri_root+"&page=".$page;
	} else {
		$pagenex=$page+1;
		$uri_nex=$uri_root."&page=".$pagenex;
	}
	?>

	<?php
if ($pagetotal>=2&&$pagetotal>9) {
	for ($x = 1; $x <= 9; $x++) {
		$uripage=$uri_root."&page=".$x;
		echo "<li class=\"page-item\"><a class=\"page-link";
		if ($x==1) {
			echo " "."active";
		}
		echo"\" href=\"$uripage\">$x</a></li>";
	  } 
} elseif ($pagetotal>=2) {
	for ($x = 1; $x <= $pagetotal; $x++) {
		$uripage=$uri_root."&page=".$x;
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
		$uri_pre=$uri_root."&page=".$pagepre;
	}

	if ($page==$pagetotal) {
		//echo $uri_root;
		$uri_nex=$uri_root."&page=".$page;
	} else {
		$pagenex=$page+1;
		$uri_nex=$uri_root."&page=".$pagenex;
	}
		
	//echo $pagenex;
	//echo $uri_root;
	echo   "<li class=\"page-item\"><a class=\"page-link\" href=\"$uri_pre\">Previous</a></li>";
	//s il y un numero de page
	if ($pagetotal>=$page&&$pagetotal>$page+8) {
		for ($x = $page; $x <= $page+8; $x++) {
			$uripage=$uri_root."&page=".$x;
			echo "<li class=\"page-item\"><a class=\"page-link";
			if ($x==$page) {
				echo " "."active";
			}
			echo "\" href=\"$uripage\">$x</a></li>";
		  } 
	} elseif ($pagetotal>=$page) {
		for ($x = $page; $x <= $pagetotal; $x++) {
			$uripage=$uri_root."&page=".$x;
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

<?php
    }  
}
?>



<?php include('p1footer.php'); ?>