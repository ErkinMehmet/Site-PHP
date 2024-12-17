<?php
    if (isset($_COOKIE['essaiCookie'])) {
        $valeur=$_COOKIE['essaiCookie'];
        $valeur=filter_var($valeur,FILTER_SANITIZE_STRING);
        $tabChaines=explode(",",$valeur);
    }else{
        $dataError=array('cookie'=>'cookie introuvable');
    }
    require_once('VueHtmlUtils.php');
    if (empty($dataError)) {
        echo CoursPHP\Vue\VueHtmlUtils::enTeteHTML5("Recuperacion de un cookie",'UTF-8','myStyle.css');
        echo "<h1>recuperation d'un <i>cookie</i></h1>";
        echo "Les chaines contenues dans le cookies sont: ";
        echo "<ul>";
        foreach ($tabChaines as $chaine){
            echo "<li>".$chaine."</li>";
        }
        echo "</ul>";
        echo CoursPHP\Vue\VueHtmlUtils::finFichierHTML5();
    }else{
        require('cookieVueErreur.php');
    }
?>    