<doctype html>
<html lang="fr">
<head>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" href="projecta.css">
  <title>Fernando H. Li Rodríguez Sanchez</title>
</head>
<body>
  <ul id="menu">
    <li id="primer">
      <a href="">Accueil</a>
      <ul>
	<li><a href="informationfr.php">Présentation</a></li>
	<li><a href="interestsfr.php">Interêts</a></li>
	<li><a href="futureplansfr.php">Plan Future</a></li>
      </ul>
    </li>
    <li id="primer">
      <a href="">Éducation</a>
      <ul>
	<li><a href="diplomasfr.php">Diplômes</a></li>
	<li><a href="coursesfr.php">Cours</a></li>
	<li><a href="scholarshipsfr.php">Bourses</a></li>
	<li><a href="projectsfr.php">Projets</a></li>
      </ul>
    </li>
    <li id="primer">
      <a href="">Expériences Pertinentes</a>
      <ul>
	<li><a href="employmentfr.php">Historique d'emploi</a></li>
	<li><a href="volunteeringfr.php">Expêriences Bénevoles</a></li>
      </ul>
    </li>
    <li id="primer">
      <a href="">Aptitudes</a>
      <ul>
	<li><a href="programmingfr.php">Programmation</a></li>
	<li><a href="languagesfr.php">Langues</a></li>
	<li><a href="otherskillsfr.php">Otres Aptitudes</a></li>
      </ul>
    </li>
    <li id="primer">
      <a href="">Contact</a>
      <ul>
	<li><a href="messagesfr.php">Messages</a></li>
	<li ><a href="contactmefr.php">Me Contacter</a></li>
      </ul>
    </li>
    <li id="primer">
      <a href="">Liens Utiles</a>
      <ul>
	<li><a href="ventas.php">Page de Ventes</a></li>
	<li><a href="project2form.html">Espace Secret</a></li>
	<li><a href="controldeprepuestos.php">Contrôle de Budget</a></li>
	<li><a href="recordatorio.php">Garde-mémoire</a></li>
      </ul>
    </li>
  </ul>
  <h1 id="titulo">Bienvenu au site web de Fernando</h1>
  <div style="margin-left:80%;margin-top:0;"><a style="text-decoration:none;" href=<?php
switch ($pagina) {
case 1:		 
echo "informationen.php";
break;
case 2:
echo "interstsen.php";
break;
case 3:
echo "futureplansen.php";
break;
case 4:
echo "diplomasen.php";
break;
case 5:
echo "coursesen.php";
break;
case 6:
echo "scholarshipsen.php";
break;
case 7:
echo "projectsen.php";
break;
case 8:
echo "employmenten.php";
break;
case 9:
echo "volunteeringen.php";
break;
case 10:
echo "programmingen.php";
break;
case 11:
echo "languagesen.php";
break;
case 12:
echo "otherskillsen.php";
break;
case 13:
echo "messagesen.php";
break;
case 14:
echo "contactmeen.php";
break;
default:
echo "projectaen.php";
break;
}
?>

>English</a>&nbsp;&nbsp;<a style="text-decoration:none" href="projectafr.php">Français</a>&nbsp;&nbsp;<a style="text-decoration:none" href=
<?php
switch ($pagina) {
case 1:
echo "informacion.php";
break;
case 2:
echo "interes.php";
break;
case 3:
echo "planfuturo.php";
break;
case 4:
echo "diplomas.php";
break;
case 5:
echo "cursos.php";
break;
case 6:
echo "premios.php";
break;
case 7:
echo "proyectos.php";
break;
case 8:
echo "historiadeempleo.php";
break;
case 9:
echo "experenciavoluntaria.php";
break;
case 10:
echo "programmacion.php";
break;
case 11:
echo "idiomas.php";
break;
case 12:
echo "otrasaptitudes.php";
break;
case 13:
echo "mesajes.php";
break;
case 14:
echo "contactame.php";
break;
default:
echo "projecta.php";
break;
}

?>
>Español</a></div>
  <div id="centro">

