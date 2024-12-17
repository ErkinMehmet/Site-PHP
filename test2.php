<?php require_once './commonFucntions.php';?>
<?php
   $titre="mon titre hahahahah calis";
   if (isset($_GET['titre'])){
     $titre=$_GET['titre'];
   }
   outputEnTeteHTML5($titre,'UTF-8','myStyle.css');
?>
<?php
   function appliqueTVA($prixHT,$taux) {
     $prixTTC=$prixHT*(1.0+$taux/100.0);
     return $prixTTC;
   }
?>
<h1>Calcul de TVA</h1>
<p>
<?php
   $prix=182.0;
   echo "pour un prix hors taxe de".$prix."euro; et un taux de 19.6%\n";
   echo "le prix TTX est de :".round(appliqueTVA($prix,19.6),2)."Euro;.\n";
   echo "<br/>\n allez on arrondi a:".intval(appliqueTVA($prix,19.6))."euro;.\n";
?>
</p>
<h1>entier</h1>
<p>
<?php
   $tableau=array(23,45,41,6,04);
   echo"(";
   for ($i=0;$i<count($tableau);$i++){
		  echo $tableau[$i];
		  if ($i+1<count($tableau))
			     echo ",";
   }
   echo ")\n";
?>
</p>

<h2>tableau avec des strings</h2>
<p>
<?php
   $str=array('nom'=>'caesar','prenom'=>'Jules');
   echo "<jl>\n";
   echo "<li>acces aux elements du tableau:<br/>";
   echo "Nom:".$str['nom']."<br/>\n";
   echo "prenom:".$str['prenom']."<br/></li>\n";

   echo "<li>les valeurs du tableau sont: <br/></li>\n";
   foreach ($str as $chaine){
     echo $chaine." ";
   }
   echo "<br/>\n";

   echo "<li>les donnees du tableau sont:<br>";
   foreach ($str as $cle=>$chaine){
     echo $cle." : ".$chaine."<br/></li>\n";
   }
   echo "</ul>\n";
?>
</p>

<p>
pour lancer l autre script avec comme texte
<?php
   $texte="bonjour";
   echo $texte;
   echo "<br/> et comme titre";
   $titre="montitre";
   echo $titre." ";
   echo "<a href=\"";
   echo '.\test3.php?texte='
     .$texte
     ."&titre="
     .$titre
     .'">cliquez ici </a>';
?>
</p>
      
		    


<?php
   outputFinFichierHTML5();
?>
