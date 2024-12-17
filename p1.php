<?php include('p1header.php'); ?>
<a class="active" href="p1.php">Mon CV</a>
<a href="aspir.php">Services</a>
<a href="arti.php">Articles</a>
<a href="comm.php">Comments</a><a href="rendezvous.php?#">Rendez-vous</a>
<a href="p1contact.php">Contact</a>
<a href="oth.php">Others</a>
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

<div>
	<strong style="color:black;">Fernando, </strong>
    <strong style="color:black;">Consultant en informatique</strong>
</div>
<hr>

<div class="picframe">
	<img src="fer5.jpg" alt="Fernando" width="300">
</div>

<hr>
<div class="introme">
<p>Je suis venu au Canda le 30 août, 2014 pour mes études à l'Université de l'Alberta, puis j'ai demenagé à Montréal le 28 avril, 2018 pour travailler en français. <br/><br/>
Montréal est la meilleure place où j'aie vécu et c'est là où j'ai trouvé mon premier job en informatique. Je ne cesse jamais d'apprendre plus tant sur le côté 
technique que sur le côté des soft skills. J'aspire développer une belle carrièere en informatique ou analyse de données à Montréal.
</p>
</div>

</div>

<div class="centre">
<?php include('conexion.php'); ?>

<?php
$reponse = $bdd->query("SELECT * FROM employementfr ORDER BY id DESC") or die(print_r($bdd->errorInfo()));
?>
<h1 style="font-size:24px;">Projets</h1>

<?php
while ($donnees=$reponse->fetch()) {
?>
&nbsp;&nbsp;&nbsp;&nbsp;<strong><?php echo $donnees[position]; ?></strong> 
<?php echo $donnees['start month']." - "; ?>
<?php echo $donnees['end month']; ?>
<br/>
&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $donnees[company]; ?>
<ul>
<li><?php echo $donnees[task1]; ?></li>
<li><?php echo $donnees[task2]; ?></li>
  <?php
   if (isset($donnees[task3]) and $donnees[task3]!=""){
   echo "<li>".$donnees[task3]."</li>";
   }
  ?>
</ul>

<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête
?>
</div>


<div class="droite">
<h1 style="font-size:24px;">Langues</h1>

<span><img src="drapeaux/CA.png" width="20"> &nbsp;Anglais - Avancé</span><br/>
<span><img src="drapeaux/AR.png" width="20"> &nbsp;Espagnol - Avancé</span><br/>
<span><img src="drapeaux/FR.png" width="20"> &nbsp;Français - Avancé</span><br/>
<span><img src="drapeaux/SG.png" width="20"> &nbsp;Mandarin - Avancé</span><br/>
<span><img src="drapeaux/HK.png" width="20"> &nbsp;Cantonais - Avancé</span><br/>
<span><img src="drapeaux/JP.png" width="20"> &nbsp;Japonais - Intermédaire</span>



<hr/>
<h1 style="font-size:24px;">Éducation</h1>
Bsc. en <strong>Génie chimique</strong> <br/>obtenu à <strong>Université d l'Alberta</strong><br/>Moyenne: 3.5 avec distinction, 2018
<hr/>
<h1 style="font-size:24px;">Activités</h1>
<li>Danser, cuisiner, guitare</li>
<li>Polyglotte</li>
<li>Musique: Les Cowboys Fringants</li>
<hr/>

</div>

</div>
</div>


<?php include('p1footer.php'); ?>