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

echo 'god';

$bdd->exec('INSERT INTO jeux_video(nom,possesseur,console,prix,nbre_joueurs_max,commentaires) VALUES(\'BB\',\'Patrick\',\'d\',88,99,\'ppo\')');

$bdd->exec('UPDATE jeux_video SET prix=999 WHERE possesseur=\'Patrick\'');

$bdd->exec('DELETE FROM jeux_video WHERE nom=\'Battlefield 1942\'');

$reponse = $bdd->query('SELECT * FROM jeux_video WHERE possesseur=\'Patrick\' ORDER BY prix LIMIT 0,100') or die(print_r($bdd->errorInfo()));


while ($donnees = $reponse->fetch())
{
?>
    <p>
    <strong>Jeu</strong> : <?php echo $donnees['nom']; ?><br />
    <?php echo $donnees['prix']; ?> <br/>
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>

