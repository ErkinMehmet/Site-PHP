<?php
	require_once(dirname(__FILE__).'/Telephone.php');
	require_once(dirname(__FILE__).'/Adresse.php');
	require_once(dirname(__FILE__).'/Personne.php');
	use CoursPHP\Metier\Adresse;
	use CoursPHP\Metier\Telephone;
	use CoursPHP\Metier\Personne;
	try {
	    $adresse=new Adresse("0af46ppppp",'10','allee du net','quateri de avenir','63000','cliare-mont','France');
	    $telephones=array(new Telephone("domicile","10 29 00 00 00"),new Telephone("mobile","19 00 00 00 00"));
	    $personne=new Personne("043f4wwwww","obama","barakc",$adresse,$telephones);
	    require ("test5VueNormale.php");
	} catch (Exception $e) {
	    require ("test5VueErreur.php");
        }
?>