<?php

try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=test1;charset=utf8', 'root', 'Fqm123!');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('INSERT INTO personnel(Nom) VALUES(\''.$nom.'\')') or die(print_r($bdd->errorInfo()));


while ($donnees = $reponse->fetch())
{
?>
    <p>
    <strong>news</strong> : <?php echo $donnees['titre']; ?><br />
    <?php echo $donnees['contenu']; ?> <br/>
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>

