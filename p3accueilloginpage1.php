<div class="ligne">
<div class="gauche2">

    <button type="button" class="btn btn-secondary butmen" onclick="p3page1tourner(this)">Abs</button>
        <button type="button" class="btn btn-secondary butmen" onclick="p3page1tourner(this)">Head</button>
        <button type="button" class="btn btn-secondary butmen" onclick="p3page1tourner(this)">Arms</button>
        <button type="button" class="btn btn-secondary butmen" onclick="p3page1tourner(this)">Legs</button>
        <button type="button" class="btn btn-secondary butmen" onclick="p3page1tourner(this)">Other</button>

</div>
<div class="centre">
    <div class="container">

  
    <div class="alert alert-warning alert-dismissible fade show" role="alert" id="warningej" style="padding:10px;width:100%;display:none;">

  <strong>Alert:</strong> Invalid input.

    </div>
    

        <div class="fenetre" id="fecha">
            <label for="fecha">Date: </label>
            <input name="fecha" id="ajaxfecha" type="text" class="form-control" placeholder="<?php echo date('Y-m-d');?>" onchange="rafraichirfecha(this)">
            <label for="hora">Time: </label>
            <input name="hora" id="ajaxhora" type="text" class="form-control" placeholder="<?php echo date('H:i:s');?>">
            <label for="fuerza">Training Strength: </label>
            <select name="fuerza" id="ejfuerza">
                <option value="Light">Light</option>
                <option value="Medium">Medium</option>
                <option value="Strong">Strong</option>
            </select>
            <input type="hidden" id="ajaxpers" value="<?php echo $usuario;?>">
        </div>

        

        <?php
for ($i=1;$i<6;$i++)
{
?>
        <div class="fenetretitulo row" id="ejert<?php echo $i;?>">
        <div class="fenetretitulot">
        <?php
        //titre
        switch ($i) {
                    case 1:
                   echo "<h2>Abominals</h2>";
                    break;
                    case 2:
                    echo "<h2>Head</h2>";
                    break;
                    case 3;
                    echo "<h2>Arms</h2>";
                    break;
                    case 4:
                    echo "<h2>Legs</h2>";
                    break;
                    case 5:
                    echo "<h2>Other</h2>";
                    break;
                    default:
                    echo "<h2>All</h2>";
                }
                ?>
                </div>
                <div class="fenetretitulob">
            <button class="buttitulo" id="ejershowb<?php echo $i;?>" onclick="showmoreej(this)">Read Less</button>
            </div>
            
        </div>
        <div class="fenetre" id="ejer<?php echo $i;?>">
            <?php
            //echo $i;
                //include('conexion.php');
                //obtenir les exercises pour le bras
                switch ($i) {
                    case 1:
                    $quer="select * from ejercicios where tipo=\"Abs\"";
                    break;
                    case 2:
                    $quer="select * from ejercicios where tipo=\"Head\"";
                    break;
                    case 3;
                    $quer="select * from ejercicios where tipo=\"Arm\"";
                    break;
                    case 4:
                    $quer="select * from ejercicios where tipo=\"Leg\"";
                    break;
                    case 5:
                    $quer="select * from ejercicios where tipo=\"Other\"";
                    break;
                    default:
                    $quer="select * from ejercicios";
                }
                
                $existe=$bdd->query($quer);
                $compter=0;
                
                $position=0;
                while ($existe2=$existe->fetch()) {
                    //prendre les informations
                    $compter+=1;
                     $ejnom=$existe2['nombre'];
                     $ejdes=$existe2['descri'];
                     $ejid=$existe2['id'];
                    $position=$compter % 3;
                    //$lignes=ceil($compter);
                    //debut
                    switch ($position) {
                        case 1:
                            echo '<div class="ejerrow row"><div class="col-4">';
                            break;
                        default:
                            echo '<div class="col-4">';
                            break;
                    }
                    
                    //chacun
                    ?>
                       <div class="ejer">
                            <div class="ejerg col-4">
                            </div>
                            <div class="ejerd col-8">
                                <span><?php echo $ejnom;?></span>
                                <input type="text" placeholder="Enter a valid quantity" class="ejqtn" onchange="validerejqtn(this)" id="ejqtn<?php echo $ejid;?>">
                            </div>
                            
                          
                        </div>
                    <?php
                    //fin
                    switch ($position) {
                        case 0:
                            echo '</div></div><br/>';
                            break;
                        default:
                            echo '</div>';
                            break;
                    }
                }
                //si le der etait dans la position 1 ou 2 il faut ajouter un /div
                if ($position!=0) {echo "</div>";}
            ?>
            
            </div>  
        <?php
        }
        ?>


        <div class="row submitrow">
        <button type="button" class="btn btn-primary butsub" data-toggle="modal" data-target="#exampleModal">
  Save Changes
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header row">
        <h5 class="modal-title col-10" id="exampleModalLabel">Planning</h5>
        <button type="button" class="close col-2 col-md=offset-2" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Do you want to submit the quantity that you have chosen?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" id="closebtn">Close</button>
        <button type="button" class="btn btn-primary" onclick="ajaxinserer(this)">Confirm</button>
      </div>
    </div>
  </div>
</div>
        </div>
    </div>
    </div>


<div class="droite">
    <div class="ajaxfecha" id="ajaxfechadiv">
<h3>
    <?php
        echo "Today : ".date('Y-m-d');
        //echo "sdfdsf";
    ?>
</h3>
    </div>
<hr/>
<div class="ajaxej" id="ajaxej">
<?php
include("p3ajax1.php");
?>
</div>



</div>
</div>