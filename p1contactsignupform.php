
<div class="ctcontainer">
    <div class="row">
      <div class="col" style="color:black;">

      <h2>Sign up to the chatbot<br/>
        <small>The fields with * are necessary.</small>
      </h2>
<form action="<?php
$uri_parts = explode('?', $_SERVER['REQUEST_URI'], 2);
$urirt='http://' . $_SERVER['HTTP_HOST'] . $uri_parts[0];
echo $urirt."?signup=y";
?>" method="post" id="myFormx">
<label for="nom">*Username:<br/></label>
<input type="text" name="nom" placeholder="At least 5 characters"/><br/><br/>
<label for="email">*Email:</label>
<input type="text" name="email" /><br/><br/>
<label for="mdp">*Password:</label>
<input type="password" name="mdp" placeholder="At least one number, one capital letter and a small letter with a length of more than 8 characters."/><br/><br/>
<label for="mdp2">*Confirm your Password:</label>
<input type="password" name="mdp2"/><br/><br/>

<label for="sex">Sex:</label>
<select name="sex" class="custom-select-lg">
    <option value="M" <?php echo ($sex=="M")?"selected":"";?>>Male</option>
    <option value="F" <?php echo ($sex=="F")?"selected":"";?>>Female</option>
    <option value="N" <?php echo ($sex=="N")?"selected":"";?>>Neither</option>
</select>
<br/><br/><br/>
<label for="bd">Birthday:</label>
<input name="year" placeholder="Year (4 digits)" value="<?php if ($year!="") {echo htmlspecialchars($year);}else{echo "2020";} ?>" onchange="valider(this)"/>
<input name="month" placeholder="Month (2 digits)" value="<?php if ($month!="") {echo htmlspecialchars($month);}else {echo "11";}?>" onchange="valider(this)"/>
<input name="day" placeholder="Day (2 digits)" value="<?php if ($day!="") {echo htmlspecialchars($day);}else {echo "11";}?>" onchange="valider(this)"/>

<br/><br/>

<label for="nationality">Nationality:</label>
<input name="nationality" value="<?php if ($nationality!="") {echo htmlspecialchars($nationality);}?>"/>
<br/><br/>
<label for="phone">Phone:</label>
<input name="phone" value="<?php if ($phone!="") {echo htmlspecialchars($phone);}?>"/><br/><br/>
<label for="profession">Profession:</label>
<input name="profession" value="<?php if ($profession!="") {echo htmlspecialchars($profession);}?>"/><br/><br/>
<label for="weight">Weight:</label>
<input name="weight" value="<?php if ($weight!="") {echo htmlspecialchars($weight);}else{echo '33';}?>" onchange="valider(this)"/>
<select name="weightu" class="custom-select-lg">
    <option value="kg" <?php echo ($weightu=="kg")?"selected":"";?>>kg</option>
    <option value="lb" <?php echo ($weightu=="lb")?"selected":"";?>>lb</option>
</select>
<br/><br/><br/>

<label for="height">Height:</label>
<input name="height" value="<?php if ($height!="") {echo htmlspecialchars($height);}else{echo '44';}?>" onchange="valider(this)"/>
<select name="heightu" class="custom-select-lg">
    <option value="cm" <?php echo ($heightu=="cm")?"selected":"";?>>cm</option>
    <option value="m" <?php echo ($heightu=="m")?"selected":"";?>>m</option>
</select>
<br/><br/><br/>
<label for="avatar">Profile Picture:</label>
<input type="file"
       id="avatar" name="avatar"
       accept="image/png, image/jpeg">
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
      <a href="javascript:confirmp1contactsignup();" style="color:white" class="btn">Confirm</a>
    </div>
</div>
</div>