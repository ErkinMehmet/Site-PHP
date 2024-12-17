<?php
    require_once("validUtils.php");
    $dataErrors=array();
    $nom=filter_var($nom,getSanitizeFilter('string'));
    $prenom=filter_var($prenom,getSanitizeFilter('string'));
    $telephone=filter_var($telephone,getSanitizeFilter('string'));
    if (filter_var($email,getValidateFilter('email'))==false){
            $dataErrors['email']="Erreur:l adresse email est invalide";
    }
    $categorie=filter_var($categorie,getSanitizeFilter('String'));
?>