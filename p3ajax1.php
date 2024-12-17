<?php
//connexion
include("conexion.php");

//obtenir les information en fonction de la date saisie
//avec ajax
//print_r($_GET);
if ($_GET['fecha']=="") {
$fech=date('Y-m-d');
} else {
        $fech=$_GET['fecha'];
}
//echo $fech;
//echo date('Y-m-d',strtotime($fech. ' +1 day'));

for ($j=0;$j<3;$j++) {
//echo $fech;
$fech2=date('Y-m-d',strtotime($fech. ' +'.$j.' day'));
$debut=$fech2." 00:00:00";
$fin=$fech2." 23:59:59";
//$quer="select * from planificados where dia>'$debut' and dia<'$fin' and perid=$usuario";
//SELECT * FROM planificados pl left join ejercicios ej on pl.ejid=ej.id;
$quer="select * from planificados pl left join ejercicios ej on pl.ejid=ej.id where dia>='$debut' and dia<='$fin' and perid=".$usuario;
//echo $quer;
//echo $fin;
$existe=$bdd->query($quer);
$compte=0;
echo "<h5>".$fech2."</h5>";
//echo "ssdf";
//print_r($existe);
while ($existe2=$existe->fetch()) {
    $compte+=1;
    
    //echo $compte;
    //prendre les infos
    $plid=$existe2['id'];
    $plej=$existe2['nombre'];
    $plcant=$existe2['cant'];
    $plhr=$existe2['hora'];
    $plestado=$existe2['estado'];
    $plcom=$existe2['comentario'];
    //echo $plej;
    //le format pour chacun des act
    ?>

        <div class="individual">
            <div class="indpic">
	            <img src="drapeaux/CL.png" width="50">
            </div>
            <div class="indiinfo">
                <h3>&nbsp;<?php echo $plej;?></h3>
                <p>&nbsp;Time: <?php echo $plhr;?></p>
                <p>&nbsp;Quantity: <?php echo $plcant;?></p>
                <p>&nbsp;Status: <?php echo $plestado;?></p>
            </div>


    </div>

<?php
}
echo "<hr/>";
}

//pour initier php donne les act pour le jour meme
?>