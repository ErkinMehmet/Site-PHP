<html>
<?php 
session_start();
date_default_timezone_set('America/Toronto');
?>
<head>
<title>Examen para el Puesto de Desarrollador en PHP</title>
<link rel="stylesheet" type="text/css" href="sacsexamen.css">
</head>
<body>
<div class="header" id="myHeader" style="width:100%;">
<h1 class="maintitle">Examen - Candidato: Fernando H. L.</h1>
<a class="active" href="sacexamen.php">Conectar</a>
</div>
<div class="content">
<?php
include('./saccontrolador.php');
$controlador = new Controlador();
$controlador->mostrar();
?>

</div>
<script>
function p1logout(){
    var answer = window.confirm("Usted quiere cortar la conexión?");
    if (answer) {
        window.location.href = 'sacdeconnexion.php';
    }
}
</script>
</body>
</html>
