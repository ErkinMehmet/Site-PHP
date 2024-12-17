<div class="row">
<div class="col-1" style="background-color:grey;">
</div>
<div class="col-10">

<H3>Profile<h3>
<hr>
<?php
//montrer les info


?>
<?php include('conexion.php'); ?>

    <div>
    <div class="alert alert-warning ess" id="warningyear" style="display:none;">
    <button type="button" class="close">&times;</button>
  <strong>Alert:</strong> <span>Invalid year.</span>
    </div>
    <div class="alert alert-warning" id="warningmonth" style="display:none;">
    <button type="button" class="close">&times;</button>
  <strong>Alert:</strong> <span>Invalid month.</span>
    </div>
    <div class="alert alert-warning" id="warningday" style="display:none;">
    <button type="button" class="close">&times;</button>
  <strong>Alert:</strong> <span>Invalid day.</span>
    </div>
    <div class="alert alert-warning" id="warningphone" style="display:none;">
    <button type="button" class="close">&times;</button>
  <strong>Alert:</strong> <span>Invalid phone.</span>
    </div>
    <div class="alert alert-warning" id="warningweight" style="display:none;">
    <button type="button" class="close">&times;</button>
  <strong>Alert:</strong> <span>Invalid weight.</span>
    </div>
    <div class="alert alert-warning" id="warningheight" style="display:none;">
    <button type="button" class="close">&times;</button>
  <strong>Alert:</strong> <span>Invalid height.</span>
    </div>
    <div class="alert alert-warning" id="warningweightd" style="display:none;">
    <button type="button" class="close">&times;</button>
  <strong>Alert:</strong> <span>Invalid weight desired.</span>
    </div>
    <div class="alert alert-warning" id="warningdate" style="display:none;">
    <button type="button" class="close">&times;</button>
  <strong>Alert:</strong> <span>Invalid date.</span>
    </div>
    </div>
    <form action="p3page4cont.php" method="post">

    <?php include("p3inscription2form.php"); 
    //obtenir les nouvelles info
  //print_r($_POST);

    $nom=isset($_POST['nom'])?$_POST['nom']:$existe2['nom'];
$email=isset($_POST['email'])?$_POST['email']:$existe2['courriel'];
$sex=isset($_POST['sex'])?$_POST['sex']:$existe2['sexe'];
$year=(int)(isset($_POST['year'])?$_POST['year']:substr($existe2['nais'],0,4));
$month=(int)(isset($_POST['month'])?$_POST['month']:substr($existe2['nais'],6,2));
$day=(int)(isset($_POST['day'])?$_POST['day']:substr($existe2['nais'],9,2));
$nationality=isset($_POST['nationality'])?$_POST['nationality']:$existe2['nationalite'];
$phone=isset($_POST['phone'])?$_POST['phone']:$existe2['cel'];
$profession=isset($_POST['profession'])?$_POST['profession']:$existe2['prof'];
$weight=isset($_POST['weight'])?$_POST['weight']:$existe2['poids'];
$weightu=isset($_POST['weightu'])?$_POST['weightu']:$existe2['poidsu'];
$height=isset($_POST['height'])?$_POST['height']:$existe2['taille'];
$heightu=isset($_POST['heightu'])?$_POST['heightu']:$existe2['tailleu'];
$type=isset($_POST['type'])?$_POST['type']:$existe2['typecorps'];
$weightd=isset($_POST['weightd'])?$_POST['weightd']:$existe2['poidsesp'];
$weightdu=isset($_POST['weightdu'])?$_POST['weightdu']:$existe2['poidseu'];
$fre=($_POST['fre']!='')?$_POST['fre']:$existe2['freq'];
$photo=isset($_POST['avatar'])?$_POST['avatar']:$existe2['photo'];

    //facebook tw insta
    $facebook=isset($_POST['facebook'])?$_POST['facebook']:'';
    $insta=isset($_POST['insta'])?$_POST['insta']:'';
    $tw=isset($_POST['tw'])?$_POST['tw']:'';
    ?>   
    <label for="facebook">Facebook:</label>
<input name="facebook" value="<?php if ($facebook!="") {echo htmlspecialchars($facebook);}?>"/>
<label for="insta">Instagram:</label>
<input name="insta" value="<?php if ($phone!="") {echo htmlspecialchars($insta);}?>"/>
<label for="tw">Twitter:</label>
<input name="tw" value="<?php if ($phone!="") {echo htmlspecialchars($tw);}?>"/>
<input name="usuarioid" type="hidden" value="<?php echo $usuario; ?>">
<input type="submit"/>
</form>
</div>


<div class="col-1" style="background-color:grey;">
</div>
</div>