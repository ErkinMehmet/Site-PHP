<?php
    require_once(dirname(__FILE__).'/commonFunctions.php');
    outputEnTeteHTML5('Erreur de donnees saisies','UTF-8','mySyle.css');
    echo "<h1>Donnees recues incorrectes</h1>\n";
    echo "<ul>";
    foreach ($dataErrors as $field=>$message){
        echo '<li>probleme avec l\'attribut <code>'.$field.'<code><span>'.$message.'</span></li>';
    }
    echo "</ul>";
    echo "<p>Merci de bien vouloir <a href=\"form.html\"> essayer a nouveau </a></p>";
    outputFinFichierHTML5();
?>
    