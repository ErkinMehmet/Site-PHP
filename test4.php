<?php
   echo "hi";
   require_once(dirname(__FILE__).'/Telephone.php');
   require_once(dirname(__FILE__).'/Adresse.php');
   $telephone=new CoursPHP\Metier\Telephone("Travail","01 23 45 89 88");
   $adresse1=new CoursPHP\Metier\Adresse("0adfjadofjadof",'10','alle du net','quartier de lavenir','63000','claimont-ferrand','France');
   $adresse2=new CoursPHP\Metier\Adresse("22323434355",'10','downing streeet',null,null,'london','UK');
   require('vue.php');
?>
