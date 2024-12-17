<?php
$uri_parts = explode('?', $_SERVER['REQUEST_URI'], 2);
$urirt= 'http://' . $_SERVER['HTTP_HOST'] . $uri_parts[0];
?>
<div class="chatbotlogin">
<div class="ctcontainer">
  <form method="post" action="<?php echo $urirt;?>">
    <div class="row">

      <div class="vl">
        <span class="vl-innertext"></span>
      </div>

      <div class="col">
        <a href="#" class="fb btn">
          <i class="fa fa-facebook fa-fw"></i> Login with Facebook
        </a>
        <a href="#" class="twitter btn">
          <i class="fa fa-twitter fa-fw"></i> Login with Twitter
        </a>
        <a href="#" class="google btn">
          <i class="fa fa-google fa-fw"></i> Login with Google+
        </a>
      </div>

      <div class="col" style="color:black;">
        <div class="hide-md-lg">
          <p>Or sign in manually:</p>
        </div>

        <input type="text" name="username" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" value="Login">
      </div>

    </div>
  </form>
</div>

<div class="bottom-container">
  <div class="row">
    <div class="col">
      <a href="
      <?php
$uri_parts = explode('?', $_SERVER['REQUEST_URI'], 2);
$urirt= 'http://' . $_SERVER['HTTP_HOST'] . $uri_parts[0];
echo $urirt."?signup=y";
?>
      
      
      " style="color:white" class="btn">Sign up</a>
    </div>
    <div class="col">
      <a href="<?php
      echo $urirt."?forget=y"
      ?>" style="color:white" class="btn">Forgot password?</a>
    </div>
  </div>
</div>

</div>