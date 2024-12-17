<?php
include("conexion.php");
print_r($_GET);
//p1-p4,p5
//persona fecha hora fuerza compte
//a pour id
//b pour qtn

$persona=$_GET['p1'];
$fecha=$_GET['p2'];
$hora=$_GET['p3'];
$fuerza=$_GET['p4'];
$compte=$_GET['p5'];

$qtns=array();
$ids=array();


for ($i=0;$i<$compte;$i++) {
    $qtns[$i]=$_GET['b'.$i];
    $ids[$i]=$_GET['a'.$i];
}

print_r($qtns);

//determiner le status
$estado=0;

//mtn il faut sql pour intergrer les donnees
for ($i=0;$i<$compte;$i++){
$quer="insert into planificados(perid,ejid,cant,dia,fuerza,hora,estado) values($persona,$ids[$i],$qtns[$i],'$fecha','$fuerza','$hora',$estado)";
$existe=$bdd->query($quer);
echo $quer;
}


?>