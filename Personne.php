<?php
namespace CoursPHP\Metier;
echo "ok2";
require_once(dirname(__FILE__).'/PersonnePropertiesTrait.php');
class Personne{
      protected $idPersonne;
      protected $nom;
      protected $prenom;
      protected $adresse;
      protected $telephones;
      use PersonneProperties;

      public function __construct($idPersonne,$nom,$prenom,$adresse,$telephones){
      $this->setIdPersonne($idPersonne);
      $this->setNom($nom);
      $this->setPrenom($prenom);
      $this->setAdresse($adresse);
      $this->setTelephones($telephones);
      }
}
?>
