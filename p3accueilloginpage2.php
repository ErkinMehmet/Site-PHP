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
        <div class="fenetre" id="plans">
            <h2>Choose your plan type:</h2>
        <div class="btn-group btn-group-lg">
  <button type="button" class="btn btn-primary" id="p3period1" onclick="p3period(this)">Daily</button>
  <button type="button" class="btn btn-primary" id="p3period2" onclick="p3period(this)">Weekly</button>
  <button type="button" class="btn btn-primary" id="p3period3" onclick="p3period(this)">Montly</button>

</div>
<hr/>
        </div>

        <div class="fenetre" id="fecha">
            <div id="diario" style="display:block;">
            <label for="debut1">Start Date: </label>
            <input name="debut1" id="debut1" type="text" class="form-control" placeholder="<?php echo date('Y-m-d');?>">
            <label for="fin1">End Date: </label>
            <input name="fin1" id="fin1" type="text" class="form-control" placeholder="<?php echo date('Y-m-d');?>">
            <hr/>
        </div>
            <div id="semanal" style="display:none;">
            <label for="debut3">Start Date: </label>
            <input name="debut3" id="debut3" type="text" class="form-control" placeholder="<?php echo date('Y-m-d');?>">
            <label for="fin3">End Date: </label>
            <input name="fin3" id="fin3" type="text" class="form-control" placeholder="<?php echo date('Y-m-d');?>">
                <h4>Every day of week:</h4>
            <input type="checkbox" id="wkday1" name="wkday1" value="1">
            <label for="wkday1"> Sunday</label><br>
            <input type="checkbox" id="wkday2" name="wkday2" value="1">
            <label for="wkday2"> Monday</label><br>
            <input type="checkbox" id="wkday3" name="wkday3" value="1">
            <label for="wkday3"> Tuesday</label><br>
            <input type="checkbox" id="wkday4" name="wkday4" value="1">
            <label for="wkday4"> Wednesday</label><br>
            <input type="checkbox" id="wkday5" name="wkday5" value="1">
            <label for="wkday5"> Thursday</label><br>
            <input type="checkbox" id="wkday6" name="wkday6" value="1">
            <label for="wkday6"> Friday</label><br>
            <input type="checkbox" id="wkday7" name="wkday7" value="1">
            <label for="wkday7"> Saturday</label><br><br>
             <hr/>
            </div>

            <div id="monthly" style="display:none;">
                
                <label for="debut2">From: </label>
            <input name="debut2" id="debut2" type="text" class="form-control" placeholder="<?php echo date('Y-m-d');?>">
            <label for="fin2">To: </label>
            <input name="fin2" id="fin2" type="text" class="form-control" placeholder="<?php echo date('Y-m-d');?>">
            <h4>Day of each month:</h4>
            <select name="jourmois" id="jourmois">
                <?php
                    for ($i=1;$i<32;$i++){
                        echo "<option value=\"".$i."\">".$i."</option>";
                    }
                ?>
            </select>
            <hr/>
            </div>
          
            <label for="hora1">Time: </label>
            <input name="hora1" id="hora1" type="text" class="form-control" placeholder="<?php echo date('H:i:s');?>">
            <label for="fuerza">Training Strength: </label>
            <select name="fuerza" id="fuerza1">
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
        Do you want to submit the quantities that you have chosen?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" id="closebtn">Close</button>
        <button type="button" class="btn btn-primary" onclick="ajaxinsererperiod(this)">Confirm</button>
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