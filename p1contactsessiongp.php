<h2>Create your group</h2>

<hr/><div id="gpcreate">

<div id="friendresult" class="chatbotlogin">
<div class="ctcontainer">
    <div class="row">
      <div class="col" style="color:black;">

      <h2>Create your own group<br/>
        <small>The fields with * are necessary.</small>
      </h2>
<form action="<?php
$uri_parts = explode('?', $_SERVER['REQUEST_URI'], 2);
$urirt='http://' . $_SERVER['HTTP_HOST'] . $uri_parts[0];
echo $urirt."?pagina=4";
?>" method="post" id="formcrgp">
<label for="nomgp">*Group Name:<br/></label>
<input type="text" name="nomgp" placeholder="At least 5 characters" id="crgpnom"/><br/><br/>
<label for="desc">Description:</label>
<input type="text" name="descgp" id="crgpdesc"/><br/><br/>

<label for="cat">Category:</label>
<select name="cat" class="custom-select-lg" id="crgpcat">
    <option value="1">Friends</option>
    <option value="2">Work</option>
    <option value="3">Entertainment</option>
    <option value="4">Sports</option>
    <option value="5">Theatre</option>
    <option value="6">Languages</option>
    <option value="7">Family</option>
    <option value="8">Study</option>
    <option value="9">Others</option>
</select><br/><br/>

<label for="cat">Size:</label>
<select name="taille" class="custom-select-lg" id="crgptai">
    <option value="1">Small</option>
    <option value="2">Regular</option>
    <option value="3">Large</option>
    <option value="4">XL</option>
    <option value="5">XLL</option>
</select><br/><br/>

<input type="hidden" value="submitxxx" name="submitxxx" id="submitxxx"/>
<button class="btn btn-info" style="color:black;" onclick="creategp()">Submit</button>
</form>






</div></div></div></div>
</div>


<h2>Group List</h2>
<hr/><div id="gplist">
<?php
//get gps
$querf="select * from p1chatgpusuario left join p1chatgp on p1chatgp.id=p1chatgpusuario.gid where uid=$uid and valid=1";
//echo $querf;
$commsf=$bdd->query($querf);
$counter=0;
while ($commf=$commsf->fetch()){
  //print_r($commf);
  $counter+=1;
  $fid=$commf['gid'];
  //$fuserid=$commf['userid'];
  $fnom=$commf['nom'];
  //$fc=$commf['courriel'];
  //print friend
  if ($counter%3==1){
  echo "<div class=\"row\" style=\"padding:10px;\">";
  }
  echo "<div class=\"col-sm-3 cardcontainer\" style=\"margin:15px;padding:0px;border: 5px solid rgba(0, 0, 0, 0.8);\">";
?>



<div class="card" id="<?php echo$fnom;?>">
<div style="padding:0px;border-bottom:5px solid rgba(0,0,0,0.8);">
  <img src="drapeaux/AR.png" alt="Avatar" style="width:100%"></div>
  <div class="cardcontainer" style="text-align:center;color:black;padding:0;">
    <h4><?php echo$fnom;?><br/><b><?php echo"";?></b></h4> 
    <div class="btn-group-vertical"  style="width:100%;border-top:5px solid rgba(0,0,0,0.8);">
<button type="button" class="btn btn-primary msgbtn" onclick="gpsropenmsg(this)">Message</button>
</div>
  </div>

</div>

<?php
 if ($counter%3==0){
   //pour end row
  echo "</div>";
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
  include('p1contactsessiongpsr.php');
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

  $testcourriel=1;


if ($email==""){
  $email="";
  //page err1
?>
<div class="alert alert-warning alert-dismissible fade show">
    <strong>Warning!</strong><br/> Your entry is empty. Please enter again.
    <button type="button" class="close" data-dismiss="alert">&times;</button>
</div>
<?php
} else {
//si c bon recherche
$quer="select * from p1chatgp where nom='$email'";
print_r($quer);
$comms=$bdd->query($quer);
$comm=$comms->fetch();
$cat=$comm['cat'];
$id=$comm['id'];
$taille=$comm['taille'];
//print_r($comm);
//get id
if ($id!=""){
  //voir si vous etes des deja des amis
  $quer2="select * from p1chatgpusuario where uid=$uid and gid=$id and valid=1 order by dt desc limit 1";
  $comms2=$bdd->query($quer2);
  $comm2=$comms2->fetch();
  $fri=0;
  if ($comm2['valid']==1) {
    $fri=1;
  }

  //resultat de la personne profil bouton d ajout et de message
  ?>
  <div class="alert alert-success alert-dismissible fade show">
    <strong>Success!</strong> Your search has returned with success.
    <button type="button" class="close" data-dismiss="alert">&times;</button>
</div>

<div class="cardcontainer" style="width:20%;padding:15px;">
<div class="card" id="<?php echo$email;?>">
  <img src="drapeaux/AR.png" alt="Avatar" style="width:100%">
  <div class="cardcontainer" style="text-align:center;">
    <h4><b><?php echo$email;?></b></h4> 
    <div class="btn-group-vertical"  style="width:100%">
  <button type="button" class="btn <?php if($fri==0){echo "btn-primary ";}else{echo "btn-danger ";}?>addbtn" onclick="groupeung(this)"><?php if($fri==0){echo "Join";}else{echo "Leave";}?></button>
  <button type="button" class="btn btn-primary msgbtn" onclick="gpsropenmsg(this)">Message</button>
</div>
  </div>
</div>
</div>
<?php
} else {
  //err2 pas trouve
  ?>
  <div class="alert alert-warning alert-dismissible fade show">
      <strong>Warning!</strong><br/> No group was found with the name that you had provided.
      <button type="button" class="close" data-dismiss="alert">&times;</button>
  </div>
  <?php
  }
}

?>
</div></div></div>
</div>

