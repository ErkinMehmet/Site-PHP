<?php include('p3header.php'); ?>
<a class="active" href="p3inscription.php">Subscription</a>
<a href="p3.php">Log In</a>
</div>

<!-- POUR COMM
<div class="content">
hello this is contenido
<div contentEditable="true" class="commentbox">ddfaf
</div>
</div>
-->
<div class="content">
<div class="ligne">

<div class="gauche">


</div>

<div class="centre">
<?php include('conexion.php'); ?>
<?php
//print_r($_POST);
$nom=isset($_POST['nom'])?$_POST['nom']:"";
$email=isset($_POST['email'])?$_POST['email']:'';
$sex=isset($_POST['sex'])?$_POST['sex']:'';
$year=(int)(isset($_POST['year'])?$_POST['year']:'');
$month=(int)(isset($_POST['month'])?$_POST['month']:'');
$day=(int)(isset($_POST['day'])?$_POST['day']:'');
$nationality=isset($_POST['nationality'])?$_POST['nationality']:'';
$phone=isset($_POST['phone'])?$_POST['phone']:'';
$profession=isset($_POST['profession'])?$_POST['profession']:'';
$weight=isset($_POST['weight'])?$_POST['weight']:'';
$weightu=isset($_POST['weightu'])?$_POST['weightu']:'';
$height=isset($_POST['height'])?$_POST['height']:'';
$heightu=isset($_POST['heightu'])?$_POST['heightu']:'';
$type=isset($_POST['type'])?$_POST['type']:'';
$weightd=isset($_POST['weightd'])?$_POST['weightd']:'';
$weightdu=isset($_POST['weightdu'])?$_POST['weightdu']:'';
$fre=isset($_POST['fre'])?$_POST['fre']:'';
$photo=isset($_POST['avatar'])?$_POST['avatar']:'';
?>
 
 <h2>Sign up your UniGymnacio account</h2>
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
    <form action="p3inscription2controleur.php" method="post">

    <?php include("p3inscription2form.php"); ?>  

<input type="submit"/>
    </form>
</div>


<div class="droite">

</div>

</div>
</div>


<?php include('p3footer.php'); ?>