<doctype html>
<html lang="fr">
<head>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" href="work.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Self presentation</title>
</head>
<body onload="killt()">
<?php include 'visitors.php';?>

<div class="typewriter" id="typewriter" onclick="kill()">
<img id="sky" src="http://images.all-free-download.com/images/graphiclarge/sky_183405.jpg" alt="snow" style="width:100%;position:absolute;z-index:-1;height:175px;opacity:.6;top:0;width=100%;left:0;" onclick="kill()">
<h1 id="texto">You are the <?php echo $number; ?>th visitor to my website!
</h1>
</div>

<div  class="menu" id="menu" onclick="ope()" onmouseover="veil()" onmouseout="unveil()">
  <p class="navmes" id="navmes">cliquez ici</p>
  <ul class="nav" id="nav">
      <li><a href="t1.php">Home</a>
      </li>
      <li><a href="projects.php">Projects</a>
      </li>
      <li><a href="work.php">Work</a>
      </li>
      <li><a href="remarks.php">Remarks</a>
      </li>
      <li><a href="contact.php">Contact</a>

      </li>
  </ul>
</div>

<div class="center" id="center" style="height:500px;background-image:linear-gradient(to right bottom,#4863A0,#98AFC7);padding:10px;border-radius:1%;overflow-y:scroll;display:block;margin-top:10px;margin-bottom:10px;">
<h1>To see the content, please enter your username and password:</h1>
<form action="work.php" method="post">
<label for="user">Username:</label>
<input type=text id="user" name="user" class="champ">
<label for="password">Password:</label>
<input type=text name="password" id="password" class="champ">
<br/>
<input type="submit">
<br/><br/>

<?php


$user=isset($_POST['user'])?$_POST['user']:"";
$password=isset($_POST['password'])?$_POST['password']:"";
$user=filter_var($user,FILTER_SANITIZE_SPECIAL_CHARS);
$password=filter_var($password,FILTER_SANITIZE_SPECIAL_CHARS);
$password=password_hash($password,PASSWORD_DEFAULT);
if (!empty($user) || !empty($password)) {
echo "<p style=\"font-size:22px;\">Sorry, your username or password is not correct!</p>";
}
?>

</form>

</div>



<div class="bottom" id="bottom" style="font-size:16px;text-align:center;"
<br/><br/>
<p>Have questions or feedback? <a href="mailto:huachao@ualberta.ca?subject="Questions and feedback on your website"">Send E-mail </a></p>
</div>


<script>
var z=1;

function killt() {
 setTimeout('kill()',3100);
}
function kill() {
 document.getElementById("texto").innerHTML="";
}

function ope() {
 z=z*(-1);
 var para=document.getElementById("menu");
 para.style.transition="all 1.5s";
 var para2=document.getElementById("navmes");
 var para3=document.getElementById("nav");
 if (z==1) { 
 para.style.width="80%";
 para2.style.display="none";
 para3.style.display="block";
 } else {
 para.style.width="13%";
 para3.style.display="none";
 para2.style.display="block";
 }
}


function veil(){
var para1=document.getElementById("container");
para1.style.transition="all 3s";
para1.style.opacity=0.2;
para1.style.filter="blur(10px)";
var para2=document.getElementById("typewriter");
para2.style.transition="all 3s";
para2.style.opacity=0.2;
para2.style.filter="blur(10px)";
var para3=document.getElementById("bottom");
para3.style.transition="all 3s";
para3.style.opacity=0.2;
para3.style.filter="blur(10px)";
}

function unveil(){
var para1=document.getElementById("container");
para1.style.transition="all 3s";
para1.style.opacity=1;
para1.style.filter="blur(0px)";
var para2=document.getElementById("typewriter");
para2.style.transition="all 3s";
para2.style.opacity=1;
para2.style.filter="blur(0px)";
var para3=document.getElementById("bottom");
para3.style.transition="all 3s";
para3.style.opacity=1;
para3.style.filter="blur(0px)";
}

// function veil() {
// var para=document.getElementById("veil");
// para.style.transition="all 0.1s";
// para.style.width="100%";
//}

 //function unveil() {
// var para=document.getElementById("veil");
// para.style.transition="all 0.1s";
// para.style.width="0%";
//}
</script>

</body>
</html>
