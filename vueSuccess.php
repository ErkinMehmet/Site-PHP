<?php
    require_once(dirname(__FILE__).'/commonFunctions.php');
    outputEnTeteHTML5('Affichage des donnees saisies','UTF-8','myStyle.css');
    echo "<h1>Donnees recues</h1>\n";
?>
<p style="font-size:16px;background-color:#fff;text-decoration:none;">
	<a href="form.html">Retourner dans la page d'inscription</a>
</p>
<?php
    echo "<p>\n";
    echo "nom: ".$nom."<br/>\n";
    echo " prenom: ".$prenom."<br/>\n";
    echo " e-mail: ".$email."<br/>\n";
    echo "categorie: ".$cat."<br/>\n</p>\n";
    outputFinFichierHTML5();
?>