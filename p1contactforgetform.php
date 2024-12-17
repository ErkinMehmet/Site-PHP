
    <form action="<?php
$uri_parts = explode('?', $_SERVER['REQUEST_URI'], 2);
$urirt='http://' . $_SERVER['HTTP_HOST'] . $uri_parts[0];
echo $urirt."?forget=y";
?>" method="post" id="myFormx">
      <h3>You have forgotten your password? Please enter your email to initialize you password.</h3><br/>
      <label for="email">*Email:</label>
 <input type="text" name="email" /><br/><br/>
 <input type="hidden" value="submitxxx" name="submitxxx" id="submitxxx"/>
 </form>

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