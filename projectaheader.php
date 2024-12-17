<doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" href="projecta.css">
  <title>Fernando H. Li Rodríguez Sanchez</title>
</head>
<body>
  <ul id="menu">
    <li id="primer">
      <a href="">Introducción</a>
      <ul>
	<li><a href="informacion.php">Información</a></li>
	<li><a href="interes.php">Interés</a></li>
	<li><a href="planfuturo.php">Plan Futuro</a></li>
      </ul>
    </li>
    <li id="primer">
      <a href="">Educación</a>
      <ul>
	<li><a href="diplomas.php">Diplomas</a></li>
	<li><a href="cursos.php">Cursos</a></li>
	<li><a href="premios.php">Premios</a></li>
	<li><a href="proyectos.php">Proyectos</a></li>
      </ul>
    </li>
    <li id="primer">
      <a href="">Experencia Profesional</a>
      <ul>
	<li><a href="historiadeempleo.php">Historia de empleo</a></li>
	<li><a href="experenciavoluntaria.php">Experencia voluntaria</a></li>
      </ul>
    </li>
    <li id="primer">
      <a href="">Aptitudes</a>
      <ul>
	<li><a href="programmacion.php">Programacion</a></li>
	<li><a href="idiomas.php">Idiomas</a></li>
	<li><a href="otrasaptitudes.php">Otras Aptitudes</a></li>
      </ul>
    </li>
    <li id="primer">
      <a href="">Contacto</a>
      <ul>
	<li><a href="mesajes.php">Mesajes</a></li>
	<li ><a href="contactame.php">Contactárme</a></li>
      </ul>
    </li>
    <li id="primer">
      <a href="">Enlaces Asociadas</a>
      <ul>
	<li><a href="ventas.php">Página de ventas</a></li>
	<li><a href="project2form.html">Espacio secreto</a></li>
	<li><a href="controldeprepuestos.php">Control de prepuestos</a></li>
	<li><a href="recordatorio.php">Recordatorio</a></li>
      </ul>
    </li>
  </ul>
  <h1 id="titulo">Bienvenido a la página de Fernando</h1>
  <div style="margin-left:80%;margin-top:0;">


<a style="text-decoration:none;" href=<?php
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
>English</a>&nbsp;&nbsp;<a style="text-decoration:none" href=<?php
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
>Français</a>&nbsp;&nbsp;<a style="text-decoration:none" href="projecta.php">Español</a></div>



  <div id="centro">
