<?php
    require_once('VueHtmlUtils.php');
    echo CoursPHP\Vue\VueHtmlUtils::enTeteHTML5("Erreur BD",'UTF-8','myStyle.css');
    echo "<h1>Une erreur s est produite</h1>";
    foreach ($dataError as $errormessage){
        echo "<p>".$errormessage."</p>";
    }
    echo CoursPHP\Vue\VueHtmlUtils::finFichierHTML5();
?>