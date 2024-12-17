<?php
    require_once('VueHtmlUtils.php');
    echo CoursPHP\Vue\VueHtmlUtils::enTeteHTML5("Ma premiere connexion pdo",'UTF-8','myStyle.css');
    echo "<h1>initier une connexion</h1>";
    echo "La requete a bien ete executee...";
    echo CoursPHP\Vue\VueHtmlUtils::finFichierHTML5();
?>