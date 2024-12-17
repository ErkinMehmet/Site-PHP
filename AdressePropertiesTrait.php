<?php
namespace CoursPHP\Metier;

trait AdresseProperties {
      public function getIdAdresse() {
        return $this->idAdresse;
      }

      public function getNumeroRue() {
        return $this->numeroRue;
      }

      public function getRue() {
        return $this->Rue;
      }

      public function getComplementAddr() {
        return $this->complementAddr;
      }

      public function getCodePostal() {
        return $this->codePostal;
      }

      public function getVille() {
        return $this->ville;
      }

      public function getPays() {
        return $this->pays;
      }

      public function setIdAdresse($idAdresse) {
        $this->idAdresse=empty($idAdresse)?"":$idAdresse;
      }

      public function setNumeroRue($numeroRue) {
        $this->numeroRue=($numeroRue==null)?"":$numeroRue;
      }

      public function setRue($Rue) {
        $this->rue=($rue=null)?"":$rue;
      }

      public function setComplementAddr($complementAddr) {
        $this->complementAddr=($complementAddr==null)?"":$complementAddr;
      }

      public function setCodePostal($codePostal) {
        $this->codePostal=($codepostal==null)?"":$codePostal;
      }

      public function setVille($ville) {
        $this->ville=($ville==null)?"":$ville;
      }

      public function setPays($pays) {
        $this->pays=($pays==null)?"":$pays;
      }
}
?>
