<?php require_once './commonFucntions.php';?>
<?php
   $titre='mon titre par defaut';
   if (isset($_GET['titre'])){
     $titre=$_GET['titre'];
   }
   outputEnTeteHTML5($titre,'UTF-8','myStyle.css');
?>
<p>
<?php
   if (isset($_GET['texte'])){
     echo $_GET['texte'];
   } else {
     echo "non hay";
   }
?>
<?php
   outputFinFichierHTML5();
?>
