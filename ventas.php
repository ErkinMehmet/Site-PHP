<doctype html>
<html lang="fr">
<head>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" href="prueba.css">
	<title>La tiendita de Tania</title>
</head>

<div id="tania" style="background-color:#87F3CB;width:60%;font-size:12px;margin-left:20%;border:3px solid #87f3cb; border-radius:20px;">
<h1 style="margin-left:15%;width:70%;text-align:center;">Bienvenue au magasin de Tania</h1>
</div>

<body style="background-color:#CCFFFF">

<div id="menu" style="postion:sticky;top:0px;width:70%;margin-left:15%;horizontal-align:center;"text-align:center;>
<ul style="font-size:20px;">
<li class="lista">À propos</li>
<li class="lista">Produits</li>
<li class="lista">Services</li>
<li class="lista">Contact</li>
</ul>
</div>
<div class="mainbk" id="centro" style="width:70%;background-color:#CCFFCC;">
<?php
//style="width:75%;margin-left:5%;display:grid;grid-template-columns:repeat(3,1fr);grid-gap:5px;grid-auto-rows:320px;"

include('conexion.php');
$reponse=$bdd->query("SELECT * FROM ventas") or die(print_r($bdd->errorInfo()));
while ($donnees=$reponse->fetch()) {
?>

<div class="produit" style="display:inline-block;">
<img src='<?php echo $donnees['image']; ?>' style="margin-left:15%;height:200;width:200;" alt="Image de produit" onmouseover='info();' onmouseout='noinfo()'>

<div class="produitinfo" style="margin-left:10px;">
<p>Nom: <?php echo $donnees['nom']; ?></p>
<p>Description: <?php echo $donnees['description']; ?></p>
<p>Prix: <?php echo $donnees['prix'].' '.$donnees['monnaie']; ?></p>
<p>Stock courant: <?php echo $donnees['quantite'].' '.$donnees['unite']; ?></p>
<p>DMA: <?php echo $donnees['DMA']; ?></p>
<?php
if ($donnees['promotion']){
      echo "<p><strong>En promotion</strong></p>";
}
if ($donnees['popularite']){
      echo "<p><strong>La mode courante</strong></p>";
}
?>

</div>

</div>

<?php
}
$reponse->closeCursor();

?>
</div>


<div id="java" class="mainbk" style="border:3px solid #000000;border-radius:20px;margin-left:20px;background-color:#FF99CC;font-size:22px;">

</div>

<div id="bottom" style="border:3px solid #000000;border-radius:40px;width:80:margin-left:10%;margin-top:10px;">
informations
<a href="projecta.php">
Explorer plus de pages créées par Fernando
</a></div>
<script>
  function info() {
  var para=document.getElementById("java");
  para.innerHTML='<p><?php echo 'infomation'; ?></p>';
}

  function noinfo() {
  var para=document.getElementById("java");
  para.innerHTML='';
}
</script>
</body>
</html>
