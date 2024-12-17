





<label for="sex">Sex:</label>
<select name="sex">
    <option value="M" <?php echo ($sex=="M")?"selected":"";?>>Male</option>
    <option value="F" <?php echo ($sex=="F")?"selected":"";?>>Female</option>
    <option value="N" <?php echo ($sex=="N")?"selected":"";?>>Neither</option>
</select>



<label for="bd">Birthday:</label>
<input name="year" placeholder="Year" value="<?php if ($year!="") {echo htmlspecialchars($year);} ?>" onchange="valider(this)"/>
<input name="month" placeholder="Month" value="<?php if ($month!="") {echo htmlspecialchars($month);}?>" onchange="valider(this)"/>
<input name="day" placeholder="Day" value="<?php if ($day!="") {echo htmlspecialchars($day);}?>" onchange="valider(this)"/>



<label for="nationality">Nationality:</label>
<input name="nationality" value="<?php if ($nationality!="") {echo htmlspecialchars($nationality);}?>"/>

<label for="phone">Phone:</label>
<input name="phone" value="<?php if ($phone!="") {echo htmlspecialchars($phone);}?>"/>
<label for="profession">Profession:</label>
<input name="profession" value="<?php if ($profession!="") {echo htmlspecialchars($profession);}?>"/>
<label for="weight">Weight:</label>
<input name="weight" value="<?php if ($weight!="") {echo htmlspecialchars($weight);}?>" onchange="valider(this)"/>
<select name="weightu">
    <option value="kg" <?php echo ($weightu=="kg")?"selected":"";?>>kg</option>
    <option value="lb" <?php echo ($weightu=="lb")?"selected":"";?>>lb</option>
</select>


<label for="height">Height:</label>
<input name="height" value="<?php if ($height!="") {echo htmlspecialchars($height);}?>" onchange="valider(this)"/>
<select name="heightu">
    <option value="cm" <?php echo ($heightu=="cm")?"selected":"";?>>cm</option>
    <option value="m" <?php echo ($heightu=="m")?"selected":"";?>>m</option>
</select>

<label for="type">Type of Body:</label>
<select name="type">
<option value="muscular" <?php echo ($type=="muscular")?"selected":"";?>>muscular</option>
<option value="skinny" <?php echo ($type=="skinny")?"selected":"";?>>skinny</option>
<option value="chubby" <?php echo ($type=="chubby")?"selected":"";?>>chubby</option>
<option value="others" <?php echo ($type=="others")?"selected":"";?>>others</option>
</select>


<label for="weightd">Desired Weight:</label>
<input name="weightd" value="<?php if ($weightd!="") {echo htmlspecialchars($weightd);}?>" onchange="valider(this)"/>
<select name="weightdu">
    <option value="kg">kg</option>
    <option value="lb">lb</option>
</select>

<label for="fre">Exercise Frequence:</label>
<input name="fre"  value="<?php if ($fre!="") {echo htmlspecialchars($fre);}?>"/>

<label for="avatar">Profile Picture:</label>
<input type="file"
       id="avatar" name="avatar"
       accept="image/png, image/jpeg">

<input type="hidden" name="nom" value="<?php echo htmlspecialchars($nom); ?>">
<input type="hidden" name="email" value="<?php echo htmlspecialchars($email); ?>">




