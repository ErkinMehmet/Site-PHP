
      <div class="col" style="color:black;">

<h2>Change your password<br/>
  <small>The fields with * are necessary.</small>
</h2>
<form action="<?php
$uri_parts = explode('?', $_SERVER['REQUEST_URI'], 2);
$urirt='http://' . $_SERVER['HTTP_HOST'] . $uri_parts[0];
echo $urirt."?forget=y&param=$paramclef&envoie=y";
?>" method="post" id="myFormx">

<label for="mdp">*Password:</label>
<input type="password" name="mdp" placeholder="At least one number, one capital letter and a small letter with a length of more than 8 characters."/><br/><br/>
<label for="mdp2">*Confirm your Password:</label>
<input type="password" name="mdp2"/><br/><br/>
</form>
</div>
</div>
</div>
<div class="bottom-container">
<div class="row">
<div class="col">
<a href="<?php echo $urirt."?forget=y";?>" style="color:white" class="btn">Return</a>
</div>
<div class="col">
<a href="javascript:confirmp1contactsignup();" style="color:white" class="btn">Confirm</a>
</div>
</div>
</div>