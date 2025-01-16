<doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" href="projecta.css">
  <title>Fernando H. Li Rodríguez Sanchez</title>
</head>
<body>
  <ul id="menu">
    <li id="primer">
      <a href="">Introduction</a>
      <ul>
	<li><a href="informationen.php">Information</a></li>
	<li><a href="interestsen.php">Interests</a></li>
	<li><a href="futureplansen.php">Future Plans</a></li>
      </ul>
    </li>
    <li id="primer">
      <a href="">Education</a>
      <ul>
	<li><a href="diplomasen.php">Diplomas</a></li>
	<li><a href="coursesen.php">Courses</a></li>
	<li><a href="scholarshipsen.php">Scholarships</a></li>
	<li><a href="projectsen.php">Projects</a></li>
      </ul>
    </li>
    <li id="primer">
      <a href="">Career</a>
      <ul>
	<li><a href="employmenten.php">Employement</a></li>
	<li><a href="volunteeringen.php">Volunteering</a></li>
      </ul>
    </li>
    <li id="primer">
      <a href="">Skills Highlight</a>
      <ul>
	<li><a href="programmingen.php">Programming</a></li>
	<li><a href="languagesen.php">Languages</a></li>
	<li><a href="otherskillsen.php">Other Skills</a></li>
      </ul>
    </li>
    <li id="primer">
      <a href="">Contact</a>
      <ul>
	<li><a href="messagesen.php">Messages</a></li>
	<li ><a href="contactmeen.php">Contact Me</a></li>
      </ul>
    </li>
    <li id="primer">
      <a href="">Useful Links</a>
      <ul>
	<li><a href="ventas.php">Marketing Site</a></li>
	<li><a href="project2form.html">Secret Space</a></li>
	<li><a href="controldeprepuestos.php">Budget Control</a></li>
	<li><a href="recordatorio.php">Note Pad</a></li>
      </ul>
    </li>
  </ul>
  <h1 id="titulo">Welcome to the website of Fernando!</h1>  
  <div style="margin-left:80%;margin-top:0;"><a style="text-decoration:none;" href="projectaen.php">English</a>&nbsp;&nbsp;<a style="text-decoration:none" href=<?php

if (!isset($pagina)) {
  $pagina = 1;
}

switch ($pagina) {
case 1:
echo "informationfr.php";
break;
case 2:
echo "interestsfr.php";
break;
case 3:
echo "futureplansfr.php";
break;
case 4:
echo "diplomasfr.php";
break;
case 5:
echo "coursesfr.php";
break;
case 6:
echo "scholarshipsfr.php";
break;
case 7:
echo "projectsfr.php";
break;
case 8:
echo "employmentfr.php";
break;
case 9:
echo "volunteeringfr.php";
break;
case 10:
echo "programmingfr.php";
break;
case 11:
echo "languagesfr.php";
break;
case 12:
echo "otherskillsfr.php";
break;
case 13:
echo "messagesfr.php";
break;
case 14:
echo "contactmefr.php";
break;
default:
echo "projectafr.php";
break;
}
?>
>Français</a>&nbsp;&nbsp;<a style="text-decoration:none" href=<?php
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

