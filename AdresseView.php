<?php
namespace CoursPHP\Vue;

class AdresseView {
      public static function getHtmlDevelopped($adresse){
      	     $htmlCode="";
	     $htmlCode.="<strong>Adresse; </strong><br/>\n";
	     $htmlCode.=$adresse->getNumeroRue();
	     if (!empty($adresse->getNumeroRue()))
	     	$htmlCode.=", ";
	     $htmlCode.=$adresse->getRue();
	     if (!empty($adresse->getRue()))
	     	$htmlCode.="<br/>";
	     $htmlCode.=$adresse->getComplementAddr();
	     if (!empty($adresse->getComplementAddr()))
	     	$htmlCode.="<br/>";
	     $htmlCode.=$adresse->getCodePostal()." ";
	     $htmlCode.=$adresse->getVille();
	     if (!empty($adresse->getVille()))
	     	$htmlCode.="<br/>";
	     $htmlCode.=$adresse->getPays()."<br/>";
	     return $htmlCode;
       }

       public static function getHtmlCompact($adresse) {
       	      $htmlCode="";
	      $htmlCode.=$adresse->getNumeroRue();
	     if (!empty($adresse->getNumeroRue()))
	     	$htmlCode.=", ";
	     $htmlCode.=$adresse->getRue();
	     if (!empty($adresse->getRue()))
	     	$htmlCode.=", ";
	     $htmlCode.=$adresse->getComplementAddr();
	     if (!empty($adresse->getComplementAddr()))
	     	$htmlCode.=", ";
	     $htmlCode.=$adresse->getCodePostal()." ";
	     $htmlCode.=$adresse->getVille();
	     if (!empty($adresse->getVille()))
	     	$htmlCode.=", ";
	     $htmlCode.=$adresse->getPays();
	     return $htmlCode;
	}
}
?>