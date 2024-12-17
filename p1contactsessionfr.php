<h2>Friend List</h2>
<hr/><div id="friendlist">

<?php
//get friends
$querf="select * from friends left join p1usuarios on p1usuarios.id=friends.p2 where p1=$uid and dtf is null";
//echo $querf;
$commsf=$bdd->query($querf);
$counter=0;
while ($commf=$commsf->fetch()){
  //print_r($commf);
  $counter+=1;
  $fid=$commf['p2'];
  $fuserid=$commf['userid'];
  $fnom=$commf['nom'];
  $fc=$commf['courriel'];
  $fphoto=$commf['photo'];
  //print friend
  if ($counter%3==1){
  echo "<div class=\"row\" style=\"padding:10px;\">";
  }
  echo "<div class=\"col-sm-3 cardcontainer\" style=\"margin:15px;padding:0px;border: 5px solid rgba(0, 0, 0, 0.8);\">";
?>

<div class="card" id="<?php echo$fc;?>">
<div style="padding:0px;border-bottom:5px solid rgba(0,0,0,0.8);">
  <img src="<?php if ($fphoto=="") {echo"drapeaux/AR.png";} else {echo $fphoto;} ?>" alt="Avatar" style="width:100%;height:220px;"></div>
  <div class="cardcontainer" style="text-align:center;color:black;padding:0;height:150px;">
   <div style="height:65px;"> <h4><?php echo$fnom;?><br/><b><?php echo$fc;?></b></h4> </div>
    <div class="btn-group-vertical"  style="width:100%;height:20px;">
<button type="button" class="btn btn-success msgbtn" onclick="frsropenmsg(this)" style="color:black;font-weight:bold;">Message</button>
<button type="button" class="btn btn-info msgbtn" onclick="frsrpro(this)" style="color:black;font-weight:bold;">See Alias</button>
<button type="button" class="btn <?php echo " btn-danger "?>addbtn" onclick="friendunf(this)"><?php echo "Unfollow";?></button>

</div>
  </div>

</div>

<?php
 if ($counter%3==0){
   //pour end row
  echo "</div><br/><br/><br/>";
  }
echo "</div>";
}
//si counter%4 n est pas 0
$repet=3-$counter%3;
if ($repet!=3){
for ($i=0;$i<$repet;$i++){
  echo "<div class=\"col-sm cardcontainer\" style=\"padding:0px;\"></div>";
}
echo "</div>";
}

?>

</div>
<br/>
<div id="friendsearch" class="chatbotlogin">
<?php
  include('p1contactsessionfrsr.php');
?>
</div>
<div id="friendresult" class="chatbotlogin">
<div class="ctcontainer">
    <div class="row">
      <div class="col" style="color:black;">
<h3>This is the result of your search:</h3>
<?php
//obtenir courriel
//print_r($_POST);
$email=isset($_POST['email'])?$_POST['email']:"";
//valider courriel
$testcourriel=0;
if (filter_var($email, FILTER_VALIDATE_EMAIL)){
  $testcourriel=1;
}

if ($testcourriel==0){
  $email="";
  //page err1
?>
<div class="alert alert-warning alert-dismissible fade show">
    <strong>Warning!</strong><br/> The email is not valide. Please enter again.
    <button type="button" class="close" data-dismiss="alert">&times;</button>
</div>
<?php
} else {
//si c bon recherche

$quer="select * from p1usuarios where courriel='$email'";
$comms=$bdd->query($quer);
$comm=$comms->fetch();
$nom=$comm['nom'];
$userid=$comm['userid'];
$u2c=$comm['courriel'];
//print_r($comm);
//get id
$quer="select * from p1usuarios where courriel='$u2c'";
$comms=$bdd->query($quer);
$comm=$comms->fetch();
$u2id=$comm['id'];
//$ahora=date('Y-m-d H:i:s');
if ($nom!=""){
  //voir si vous etes des deja des amis
  $quer2="select * from friends where p1=$uid and p2=$u2id order by dt desc limit 1";
  $comms2=$bdd->query($quer2);
  $comm2=$comms2->fetch();
  $fri=0;
  if ($comm2['dt']!="" and $comm2['dtf']=="") {
    $fri=1;
  }

  //resultat de la personne profil bouton d ajout et de message
  ?>
  <div class="alert alert-success alert-dismissible fade show">
    <strong>Success!</strong> Your search has returned with success.
    <button type="button" class="close" data-dismiss="alert">&times;</button>
</div>

<div class="cardcontainer" style="width:20%;padding:15px;">
<div class="card" id="<?php echo$u2c;?>">
  <img src="drapeaux/AR.png" alt="Avatar" style="width:100%">
  <div class="cardcontainer" style="text-align:center;">
    <h4><b><?php echo$nom;?></b></h4> 
    <div class="btn-group-vertical"  style="width:100%">
  <button type="button" class="btn <?php if($fri==0){echo "btn-primary ";}else{echo "btn-danger ";}?>addbtn" onclick="friendunf(this)"><?php if($fri==0){echo "Follow";}else{echo "Unfollow";}?></button>
  <button type="button" class="btn btn-primary msgbtn" onclick="frsropenmsg(this)">Message</button>

</div>
  </div>
</div>
</div>
<?php
} else {
  //err2 pas trouve
  ?>
  <div class="alert alert-warning alert-dismissible fade show">
      <strong>Warning!</strong><br/> No user was found with the email that you had provided.
      <button type="button" class="close" data-dismiss="alert">&times;</button>
  </div>
  <?php
  }
}

?>
</div></div></div>
</div>
