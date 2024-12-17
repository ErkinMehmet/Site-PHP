<?php
namespace CoursPHP\Metier;
require_once(dirname(__FILE__).'/AdressePropertiesTrait.php');
class Adresse {
   private $idAdresse;
   private $numeroRue;
   private $rue;
   private $complementAddr;
   private $codePostal;
   private $ville;
   private $pays;
   use AdresseProperties;
   public function __construct($idAdresse,$numeroRue,$rue,$complementAddr,$codePostal,$ville,$pays) {
   $this->setIdAdresse($idAdresse);
   $this->setNumeroRue($numeroRue);
   $this->setRue($rue);
   $this->setComplementAddr($complementAddr);
   $this->setCodePostal($codePostal);
   $this->setVille($ville);
   $this->setPays($pays);
   }
}
?>
