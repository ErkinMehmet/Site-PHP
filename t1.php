<doctype html>
<html lang="fr">
<head>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" href="t1.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Fernando</title>
</head>
<body onload="killt()">
<?php include 'visitors.php';?>

<div class="typewriter" id="typewriter" onclick="kill()">
<img id="sky" src="http://images.all-free-download.com/images/graphiclarge/sky_183405.jpg" alt="snow" style="width:100%;position:absolute;z-index:-1;height:175px;opacity:.6;top:0;width=100%;left:0;" onclick="kill()">
<h1 id="texto">You are the <?php echo $number; ?>th visitor to my website!
</h1>
</div>

<div  class="menu" id="menu" onclick="ope()" onmouseover="veil()" onmouseout="unveil()">
  <p class="navmes" id="navmes">Click here</p>
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

<div class="container" id="container">
<div class="second">

<div class="left">


      <div>
	<img src="fer.jpg" alt="Fernando" style="width:220px;border-radius:50%;">
      </div>
      <div>
	<br/>
	<strong style="color:black;">Fernando</strong><br/><br/>
	<strong style="color:black;">Engineer in training</strong><br/><br/>
	<strong style="color:black;">Aspiring to become a polygot and versatile IT consultant</strong>
  </div>


</div>

<div class="center">
<?php
include('conexion.php');
?>
<?php
$reponse = $bdd->query("SELECT * FROM employementen ORDER BY id DESC") or die(print_r($bdd->errorInfo()));
?>
<h1 style="font-size:24px;">Pertinent experience</h1>
<?php
while ($donnees=$reponse->fetch()) {
?>
&nbsp;&nbsp;&nbsp;&nbsp;<strong><?php echo $donnees[position]; ?></strong> 
<?php echo $donnees['start month']." - "; ?>
<?php echo $donnees['end month']; ?>
<br/>
&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $donnees[company]; ?>
<ul>
<li><?php echo $donnees[task1]; ?></li>
<li><?php echo $donnees[task2]; ?></li>
  <?php
   if (isset($donnees[task3])){
   echo "<li>".$donnees[task3]."</li>";
   }
  ?>
</ul>

<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête
?>

</div>
<div class="right">
<h1 style="font-size:24px">List of websites:</h1>
<p><a  style="text-decoration:none;color:black;font-size:18px;" href="http://www.fernandodupaysdelicorne.com/projectaen.php">My First Website</a></p>

<p><a  style="text-decoration:none;color:black;font-size:18px;" href="http://www.fernandodupaysdelicorne.com/recordatorio.php">Application - To-do List</a></p>

<p><a  style="text-decoration:none;color:black;font-size:18px;" href="http://www.fernandodupaysdelicorne.com/t2.php">Application - Online Chat</a></p>

<p><a  style="text-decoration:none;color:black;font-size:18px;" href="http://www.fernandodupaysdelicorne.com/projects.php">More applications to come...</a></p>
<br/>

<h1 style="font-size:24px">Languages:</h1>

<div style="width=100%;;font-size:18px;">

<div style="display:inline-block;width:15%;">EN:</div>
<div style="display:inline-block;position:relative;background-color:#e0b0ff;width:80%;">

<div style="width:95%;background-color:#000000;color:#fff;text-align:center;">
Advanced
</div>
</div>
</div>
<br/>


<div style="width=100%;;font-size:18px;">
<div style="display:inline-block;width:15%;">FR:</div>
<div style="display:inline-block;position:relative;background-color:#e0b0ff;width:80%;">

<div style="width:95%;background-color:#000000;color:#fff;text-align:center;">
Advanced
</div>
</div>
</div>
<br/>

<div style="width=100%;;font-size:18px;">
<div style="display:inline-block;width:15%;">CN:</div>
<div style="display:inline-block;position:relative;background-color:#e0b0ff;width:80%;">

<div style="width:95%;background-color:#000000;color:#fff;text-align:center;">
Advanced
</div>
</div>
</div>
<br/>
<div style="width=100%;;font-size:18px;">
<div style="display:inline-block;width:15%;">JP:</div>
<div style="display:inline-block;position:relative;background-color:#e0b0ff;width:80%;">

<div style="width:75%;background-color:#000000;color:#fff;text-align:center;">
Intermediate
</div>
</div>
</div>
<br/>

<div style="width=100%;;font-size:18px;">
<div style="display:inline-block;width:15%;">SP:</div>
<div style="display:inline-block;position:relative;background-color:#e0b0ff;width:80%;">

<div style="width:95%;background-color:#000000;color:#fff;text-align:center;">
Advanced
</div>
</div>
</div>





</div>
</div>
</div>

<div class="veil" id="veil">
</div>

<div class="bottom" id="bottom" style="font-size:16px;text-align:center;"
<br/><br/>
<p>Have questions or feedback? <a href="mailto:fernando@fernandodupaysdelicorne.com?subject=Questions and feedback on your website">Send E-mail </a></p>
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
para1.style.transition="all 2s";
para1.style.opacity=0.2;
para1.style.filter="blur(10px)";
var para2=document.getElementById("typewriter");
para2.style.transition="all 2s";
para2.style.opacity=0.2;
para2.style.filter="blur(10px)";
var para3=document.getElementById("bottom");
para3.style.transition="all 2s";
para3.style.opacity=0.2;
para3.style.filter="blur(10px)";
}

function unveil(){
var para1=document.getElementById("container");
para1.style.transition="all 1s";
para1.style.opacity=1;
para1.style.filter="blur(0px)";
var para2=document.getElementById("typewriter");
para2.style.transition="all 1s";
para2.style.opacity=1;
para2.style.filter="blur(0px)";
var para3=document.getElementById("bottom");
para3.style.transition="all 1s";
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
