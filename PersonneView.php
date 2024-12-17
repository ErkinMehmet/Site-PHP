<?php
echo "hello";
namespace CoursPHP\Vue;
class PersonneView{
      public static function getHtmlDevelopped($personne){
      	     $htmlCode="";
	     $htmlCode.="nom:".$personne->getNom()."<br/>\n";
	     if (strlen($personne->getPrenom())>=1)
	     	$htmlCode.="prenom:".$personne->getPrenom()."<br/>\n";
	     $htmlCode.=AdresseView::getHtmlDevelopped($personne->getAdresse());
	     $count=0;
	     foreach ($personne->getTelephones() as $telephone) {
	     	     if ($count!=0){
	     	     	$htmlCode.="<br/>";
	     	     }
	     	     $count++;
	     	     $htmlCode.=$telephone->toHTML();
	     }
	     $htmlCode.="<br/>\n";
	     return $htmlCodes;
      }

      public static function getHtmlTableRow($personne){
	       $htmlCode="<tr>";
	       $htmlCode.="<td>".$personne->getNom()."</td>";
	       $htmlCode.="<td>".$personne->getPrenom()."</td>";
	       $htmlCode.="<td>".$AdresseView::getHtmlCompact($personne->getAdresse())."</td>";
	       $htmlCode.="<td>";
	       $count=0;
	       foreach ($personne->getTelephones() as $telephone) {
	       	       if ($count!=0){
		       	  $htmlCode.="<br/>";
		       }
		       $count++;
		       $htmlCode.=$telephone->toHTML();
	       }
	       $htmlCode.="</td></tr>";
	       return $htmlCode;
	}

	public static function getHtmlTableHeads(){
	       $htmlCode="<tr><th>Nom</th><th>prenom</th><th>Adresse</th><th>Telephone</th></tr>";
	       return $htmlCode;
	}
}
?>