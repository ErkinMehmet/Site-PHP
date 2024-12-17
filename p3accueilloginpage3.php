<div class="row">
<div class="col-1" style="background-color:grey;">
</div>
<div class="col-10 bg-gradient-light text-dark">
<input type="hidden" id="botontipo">
<input type="hidden" id="confactif">
<input type="hidden" id="modactif">
<input type="hidden" id="supactif">
<div id="modalopts" style="display:none;">
            <?php
                $quer="select * from ejercicios";
                $existe=$bdd->query($quer);
                while ($existe2=$existe->fetch()) {
                    echo "<option value=\"".$existe2['nombre']."\">".$existe2['nombre']."</option>";
                }
            ?>
</div>
<!-- Modal -->
<div class="modal fade" id="Modalc" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header row">
        <h5 class="modal-title col-10" id="exampleModalLabel">View</h5>
        <button type="button" class="close col-2 col-md=offset-2" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="modaltext">
  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" id="closebtn">Close</button>
        <button type="button" class="btn btn-primary" onclick="p3conf(this)">Confirm</button>
      </div>
    </div>
  </div>
</div>

<div id="page3filter" style="display:block;">
            <label for="debutpage3">Start Date: </label>
            <input name="debutpage3" id="debutpage3" type="text" class="form-control" placeholder="<?php echo date('Y-m-d');?>" onchange="p3page3filter(this)">
            <label for="finpage3">End Date: </label>
            <input name="finpage3" id="finpage3" type="text" class="form-control" placeholder="<?php echo date('Y-m-d');?>" onchange="p3page3filter(this)">
      

</div>
<br/>
<table class="table-striped table" style="width:100%;" id="tableplanif">
<?php   
include('conexion.php');
$quer="select pl.id as plid,cant,dia,hora,estado,ej.nombre as nom from planificados pl left join ejercicios ej on ej.id=pl.ejid where pl.perid=".$usuario;
$quer.=" order by dia desc,hora desc";
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
</table>
</div>


<div class="col-1" style="background-color:grey;">
</div>
</div>

