<html>
<p>Bonjour !</p>
<head>
  <meta charset="utf-8"/>
  <title>code de nasa</title>
</head>

<body>
<p>Je sais comment tu t'appelles, hé hé. Tu t'appelles <?php echo htmlspecialchars($_POST['txtsaisie']); ?> !</p>

<p>Si tu veux changer de prénom, <a href="formulaire.php">clique ici</a> pour revenir à la page formulaire.php.</p>

<?php
if (isset($_POST['mdp']))
{
echo 'su';
}
else
{
echo 'hi';
}
?>

</body>
</html>