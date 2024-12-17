<?php
namespace CoursPHP\Metier;
echo "hi";
class Telephone {
   private $numero;
   private $libelle;

   public function getNumero() {
     return $this->numero;
   }

   public function getLibelle() {
     return $this->numero;
   }

   public function setNumero($numero) {
     if (empty($numero))
       $this->numero="";
     else
       $this->numero=$numero;
   }

   public function setLibelle($libelle){
     if (empty($libelle))
       $this->libelle="";
     else
       $this->libelle=$libelle;
   }

   public function __construct($libelle,$numero) {
     $this->setLibelle($libelle);
     $this->setNumero($numero);
   }

   public function toHTML() {
     return $this->libelle."Enbsp;: ".$this->numero;
   }
}

