<h2>Profile</h2>
<?php
//getinfo
include('conexion.php');
$quer="select * from p1usuarios where id=$uid";
$comms=$bdd->query($quer);
$comm=$comms->fetch();
$nom=$comm['nom'];
$sexe=$comm['sexe'];
$nais=$comm['nais'];
$courriel=$comm['courriel'];
$nationalite=$comm['nationalite'];
$cel=$comm['cel'];
$poids=$comm['poids'];
$taille=$comm['taille'];
$photo=$comm['photo'];
$poidsu=$comm['poidsu'];
$tailleu=$comm['tailleu'];
$prof=$comm['prof'];
//nais
$nais2=explode("-",$nais);
$year=$nais2[0];
$month=$nais2[1];
$day=$nais2[2];

//incluir php pour la photo
$propicmsg = "";
$msg_class = "";
if (isset($_POST['save_profile'])) {
    //print_r($_FILES);
    // for the database
    $bio = stripslashes($_POST['bio']);
    $profileImageName = time() . '-' . $_FILES["profileImage"]["name"];
    // For image upload
    $target_dir = "drapeaux/";
    //print_r($profileImageName);
    $target_file = $target_dir . basename($profileImageName);
    // VALIDATION
    // validate image size. Size is calculated in Bytes
    $erreur=0;
    if($_FILES['profileImage']['size'] > 200000) {
      $propicmsg = "Image size should not be greated than 200Kb";
      $msg_class = "alert-danger";
      $erreur=1;
    }
    // check if file exists
    if(file_exists($target_file)) {
      $propicmsg = "File already exists";
      $msg_class = "alert-danger";
      $erreur=1;
    }
    //print_r($propicmsg);
    //print_r($target_file);
    // Upload image only if no errors
    //echo $erreur;
    if ($erreur!=1) {
      if(move_uploaded_file($_FILES["profileImage"]["tmp_name"], $target_file)) {
        //$sql = "INSERT INTO testuserphotos SET profile_image='$profileImageName', bio='$bio'";
        $quer="update p1usuarios set photo='$target_file' where id=$uid";
        //print_r($quer);
        $bdd->query($query);

      } else {
        $error = "There was an erro uploading the file";
        $proppicmsg = "alert-danger";
      }
    }
  }


echo $_FILES["profileImage"]["tmp_name"];
//formulaire
?>
<div id="friendsearch" class="chatbotlogin">
<div class="ctcontainer">
    <div class="row">
      <div class="col" style="color:black;">

      <h2>Modify your information<hr/>
        <small></small>
      </h2>

<div class="row">
      <div class="col-8 offset-md-2 form-div">
        <form action="<?php echo $urirt."?pagina=2";?>" method="post" enctype="multipart/form-data">
          <h2 class="text-center mb-3 mt-3">Update Profile</h2>
          <?php if (!empty($propicmsg)): ?>
            <div class="alert <?php echo $msg_class ?>" role="alert">
              <?php echo $propicmsg; ?>
            </div>
          <?php endif; ?>
          <div class="form-group text-center" style="position: relative;" >
            <span class="img-div">
              <div class="text-center img-placeholder"  onclick="uploadphoto(this)">
                <h4></h4>
              </div>
              <img src="<?php if($photo!=""){echo $photo;} else {echo "drapeaux/CL.png";}?>" onclick="uploadphoto(this)" id="propiccourant" height="250">
            </span>
            <input type="file" name="profileImage" onchange="uploadimgpro(this)" id="profileImage" class="form-control" style="display: block;" accept="image/*">
            <label></label>
          </div>
          <div class="form-group">
            <button type="submit" name="save_profile" class="btn btn-primary btn-block" style="display:none">Upload</button>
          </div>
        </form>
      </div><div>
     <?php echo $target_file;?></div>
<canvas id="propicc" onmousedown="canvasdown(event)" onmouseup="canvasup(event)" onmousemove="canvasmove(event)" style="display:none">
</canvas>
<button type="button" class="btn btn-primary" id="subpropic" onclick="canvasconf()" style="display:none">Cut and Save</button>
<canvas id="propicc2" style="display:none">
</canvas>

    </div>


    <form action="<?php
$uri_parts = explode('?', $_SERVER['REQUEST_URI'], 2);
$urirt='http://' . $_SERVER['HTTP_HOST'] . $uri_parts[0];
echo $urirt."?pagina=2";
?>" method="post" id="myFormx">

<label for="nom" style="float:left;">*Username:<br/></label><i class="fas fa-edit" style="cursor:pointer;float:right;" onclick="editernom(this)">Edit</i>  <div style="clear:both"></div>
<input id="nompro" type="text" name="nom" style="background-color:grey;" value="<?php echo$nom;?>" readonly/><br/><br/>

<label for="mdp">*Password:</label><i class="fas fa-edit" style="cursor:pointer;float:right;" onclick="editermdp(this)">Edit</i>  <div style="clear:both"></div>
<input type="password" id="mdppro" name="mdp" placeholder="At least one number, one capital letter and a small letter with a length of more than 8 characters." style="background-color:grey;" readonly/><br/><br/>
<input type="password" id="mdppro2" name="mdp2" placeholder="Please confirm the password again." style="background-color:grey;" readonly/><br/><br/>

<label for="sex">Sex:</label><i class="fas fa-edit" style="cursor:pointer;float:right;" onclick="editersx(this)">Edit</i>  <div style="clear:both"></div>
<select name="sex" id="sxpro" class="custom-select-lg" style="background-color:grey;" disabled>
    <option value="M" <?php echo ($sexe=="M")?"selected":"";?>>Male</option>
    <option value="F" <?php echo ($sexe=="F")?"selected":"";?>>Female</option>
    <option value="N" <?php echo ($sexe=="N")?"selected":"";?>>Neither</option>
</select>
<br/><br/><br/>
<label for="bd" style="float:left;">Birthday:</label><i class="fas fa-edit" style="cursor:pointer;float:right;" onclick="editernais(this)">Edit</i>  <div style="clear:both"></div>
<input id="yearpro" name="year" placeholder="Year (4 digits)" value="<?php if ($year!="") {echo htmlspecialchars($year);}else{echo "2020";} ?>" onchange="valider(this)" style="background-color:grey;" readonly/>
<input id="monthpro" name="month" placeholder="Month (2 digits)" value="<?php if ($month!="") {echo htmlspecialchars($month);}else {echo "11";}?>" onchange="valider(this)" style="background-color:grey;" readonly/>
<input id="daypro" name="day" placeholder="Day (2 digits)" value="<?php if ($day!="") {echo htmlspecialchars($day);}else {echo "11";}?>" onchange="valider(this)" style="background-color:grey;" readonly/>

<br/><br/>

<label for="nationality" style="float:left;">Nationality:</label><i class="fas fa-edit" style="cursor:pointer;float:right;" onclick="editernat(this)">Edit</i>  <div style="clear:both"></div>
<input id="natpro" name="nationality" value="<?php if ($nationalite!="") {echo htmlspecialchars($nationalite);}?>" style="background-color:grey;" readonly/>
<br/><br/>
<label for="phone" style="float:left;">Phone:</label><i class="fas fa-edit" style="cursor:pointer;float:right;" onclick="editercel(this)">Edit</i>  <div style="clear:both"></div>
<input id="celpro" name="phone" value="<?php if ($cel!="") {echo htmlspecialchars($cel);}?>"style="background-color:grey;" readonly/><br/><br/>

<label for="profession" style="float:left;">Profession:</label><i class="fas fa-edit" style="cursor:pointer;float:right;" onclick="editerprof(this)">Edit</i>  <div style="clear:both"></div>

<input id="profpro" name="profession" value="<?php if ($prof!="") {echo htmlspecialchars($prof);}?>" style="background-color:grey;" readonly/><br/><br/>

<label for="weight" style="float:left;">Weight:</label><i class="fas fa-edit" style="cursor:pointer;float:right;" onclick="editerwei(this)">Edit</i>  <div style="clear:both"></div>
<input id="weipro" name="weight" value="<?php if ($weight!="") {echo htmlspecialchars($weight);}else{echo '33';}?>" onchange="valider(this)" style="background-color:grey;" readonly/>
<select id="weiupro" name="weightu" class="custom-select-lg" style="background-color:grey;" disabled>
    <option value="kg" <?php echo ($weightu=="kg")?"selected":"";?>>kg</option>
    <option value="lb" <?php echo ($weightu=="lb")?"selected":"";?>>lb</option>
</select>
<br/><br/><br/>

<label for="height" style="float:left;">Height:</label><i class="fas fa-edit" style="cursor:pointer;float:right;" onclick="editerhei(this)">Edit</i>  <div style="clear:both"></div>
<input id="heipro" name="height" value="<?php if ($height!="") {echo htmlspecialchars($height);}else{echo '44';}?>" onchange="valider(this)" style="background-color:grey;" readonly/>
<select id="heiupro" name="heightu" class="custom-select-lg" style="background-color:grey;" disabled>
    <option value="cm" <?php echo ($heightu=="cm")?"selected":"";?>>cm</option>
    <option value="m" <?php echo ($heightu=="m")?"selected":"";?>>m</option>
</select>
<br/><br/><br/>

<input type="hidden" value="submitxxx" name="submitxxx" id="submitxxx"/>
</form>
      </div>
    </div>
</div>


<div class="bottom-container">
  <div class="row">
    <div class="col">
      <a href="<?php echo $urirt;?>" style="color:white" class="btn" >Return</a>
    </div>
    <div class="col">
      <a style="color:white" class="btn"><i class="fas fa-edit" style="cursor:pointer;" onclick="confirmertoutpro(this)">Edit All</i> </a>
    </div>
</div>
</div>
</div>