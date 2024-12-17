<?php   
session_start();
//print_r($_SESSION);
//print_r($_POST);
//print_r($_GET);
$page=$_GET['page'];
//echo $_SESSION['userid'];
$usuario=$_SESSION['userid'];

//ajouter la fonction de recherche
$debut=isset($_GET['debut'])?$_GET['debut']:'';
$fin=isset($_GET['fin'])?$_GET['fin']:'';
if ($debut=='') {$debut="1900-01-01";}
if ($fin=='') {$fin="2200-01-01";}

//echo $debut.$fin;

include('conexion.php');
$quer="select pl.id as plid,cant,dia,hora,estado,ej.nombre as nom from planificados pl left join ejercicios ej on ej.id=pl.ejid where pl.perid=".$usuario;
$quer.=" and pl.dia>='$debut' and pl.dia<='$fin'";
$quer.=" order by dia desc,hora desc";
echo $quer;
$existe=$bdd->query($quer);
//fecha
$datecourante="";
$compte=0;
while ($existe2=$existe->fetch()){
    $compte++;
    //obtenir toutes les info
    $id=$existe2['plid'];
    $ej=$existe2['nom'];
    $cant=$existe2['cant'];
    $dia=$existe2['dia'];
    $hora=$existe2['hora'];
    $est=$existe2['estado'];

    echo "<tr><td>";
    if ($dia!=$datecourante){
        echo "<h4>".$dia."</h4>";
        echo "</td></tr><tr><td>";
        $datecourante=$dia;
    }
    ?>
    <div class="row">
        <div class="col-1"></div>
    <div class="infopage3 col-8">
        <br/>
        <span><?php echo $dia."</span> <span>".$hora; ?></span><br/>
        <span><?php echo $ej."</span> : <span>".$cant;?></span></p>
        <input type="hidden" value="<?php echo $id;?>">
        <input type="hidden" value="<?php echo $est;?>">

</div>


<div class='butonespage3 col-3'>
<?php if ($est==0) {
?>
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#Modalc" id="conf<?php echo $compte;?>" onclick="confmodal(this)">Done</button>
<?php
} else {
    ?>
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#Modalc" id="conf<?php echo $compte;?>" onclick="confmodal(this)">Not Done</button>
<?php
}
?>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modalc" id="mod<?php echo $compte;?>" onclick="modmodal(this)">Modify</button>
<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#Modalc" id="sup<?php echo $compte;?>" onclick="supmodal(this)">Delete</button>

</div>
</div>
    <?php
    echo "</td></tr>";
}



?>