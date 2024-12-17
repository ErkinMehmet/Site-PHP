<?php

$super = 0;
echo"welcome";
//echo $super;

$nombre=1;


while ($nombre <= 1)
{
    echo 'Ceci est la ligne n°' . $nombre_de_lignes . '<br />';
    $nombre++;
}

$age = 24;

$majeur = ($age >= 18) ? true : false;
echo $majeur;

for ($nombre_de_lignes = 1; $nombre_de_lignes <= 2; $nombre_de_lignes++)
{
    echo 'Ceci est la ligne n°' . $nombre_de_lignes . '<br />';
}

$nome = 'nicoleta';
echo 'Bonjour' . $nome;

$prenoms[] = 'François'; // Créera $prenoms[0]
$prenoms[] = 'Michel'; // Créera $prenoms[1]
$prenoms[] = 'Nicole'; // Créera $prenoms[2]

echo prenoms[1];
$coordonnees = array (
    'prenom' => 'François',
    'nom' => 'Dupont',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Marseille');

// On crée notre array $prenoms
$prenoms = array ('François', 'Michel', 'Nicole', 'Véronique', 'Benoît');

// Puis on fait une boucle pour tout afficher :
for ($numero = 0; $numero < 5; $numero++)
{
    echo $prenoms[$numero] . '<br />'; 
}

foreach ($prenoms as $cle => $element)
{
    echo '[' . $cle . ']' . $element . '<br/>';
}
print_r ($coordonnees);
if (array_key_exists ('ville',$coordonnees) or in_array('j',$prenoms))
{
    echo 'dd';
}
else
{
echo 'd';
}
$position=array_search('Dupont',$prenoms);
$phrase = 'Bonjour tout le monde ! Je suis une phrase !';
$longueur = strlen($phrase);
 
 
echo 'La phrase ci-dessous comporte ' . $longueur . ' caractères :<br />' . $phrase;
$st='fuck';
$st2=str_replace('f','h',$st);
echo $st2;
echo str_shuffle($st2) . strtolower($st2);
echo date('H') . date('i') . date('Y');

function miau($fucy)
{
    echo 'dd' . $fucy;
}

miau('jerk');
$fichier = fopen("fernando.html", "r");
if (isset($_GET['nom']))
{
    echo $_GET['nom'];
}
?>