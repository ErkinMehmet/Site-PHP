<?php
namespace CoursPHP\Metier;
echo "ok";
trait PersonneProperties {
      public function getidPersonne(){
      	     return $this->idPersonne;
      }
      public function getNom(){
      	     return $this->nom;
      }
      public function getPrenom(){
      	     return $this->prenom;
      }
      public function getAdresse(){
      	     return $this->adresse;
      }
      public function getTelephones(){
      	     return $this->telephones;
      }
      public function getTelephone($libelle){
      	     if (empty($this->telephones[$libelle])){
	     	throw new \Exception('desole, '.$libelle.'n existe pas');
             }
      	     return $this->telephones[$libelle];
      }

      public function setIdpersonne($idPersonne) {
      if (empty($idPersonne)){
      	 throw new \Exception('setidpersonneerreur');
      }else{
	$this->idPersonne=$idPersonne;
	}
      }
      public function setNom($nom){
      if (empty($nom)||strlen($nom)>100){
      	 throw new \Exception('erreur de nom');
      }else{
	$this->nom=$nom;
	}
      }
      public function setPrenom($prenom){
      if (empty($prenom)||strlen($prenom)>100){
      	 throw new \Exception('erreur de prenom');
      }else{
	$this->prenom=$prenom;
	}
      }
      public function setAdresse($adresse){
      if ($adresse==null||get_class($adresse)!='Cours\Metier\Adresse'){
      	 throw new \Exception('erreur de l adresse');
      }else{
	$this->adresse=$adresse;
	}
      }
      public function setTelephones($telephones){
      if (!is_array($telephones)){
      	 throw new \Exception('erreur de tele');
      }else{
	$this->telephones=$telephones;
	}
      }
      public function addTelephone($libelle,$numero){
      if (!isempty($numero)&&strlen($numero)<=15){
      	 if (!is_array($this->telephones)){
      	    $this->telephones=array();
	 }
	 $this->telephones[$libelle]=new Telephone($libelle,$numero);
      }else{
	throw new \Exception('erreur');
      }
      }
      public function removeTelephone($libelle){
      	     if (!empty($this->telephone[$libelle])){
	     	unset($this->telephone[$libelle]);
		}
      }
}
?>




	