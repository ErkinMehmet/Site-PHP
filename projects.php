<doctype html>
<html lang="fr">
<head>
  <meata charset="UTF-8"/>
  <link rel="stylesheet" href="projects.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>My test</title>
</head>
<body onload="killt()">
<div class="typewriter" onclick="kill()">
<img id="sky" src="http://images.all-free-download.com/images/graphiclarge/sky_183405.jpg" alt="snow" style="width:100%;position:absolute;z-index:-1;height:175px;opacity:.6;top:0;width=100%;left:0;" onclick="kill()">
<h1 id="texto">Welcome to Fernando's personal space!
</h1>
</div>
<?php error_reporting(0);       // Turn off error reporting
ini_set('display_errors', 0);
?>
<div  class="menu" id="menu" onclick="ope()" onmouseover="veil()" onmouseout="unveil()">
  <p class="navmes" id="navmes">cliquez ici</p>
  <ul class="nav" id="nav">
      <li><a href="t1.php">Home</a>
      </li>
      <li><a href="projects.php">Projects</a>
      </li>
      <li onclick="submenu()"><a href="work.php">Work</a>
      </li>
      <li><a href="remarks.php">Remarks</a>
      </li>
      <li><a href="contact.php">Contact</a>

      </li>
  </ul>
</div>

<div class="container">
<div class="second">
<div class="left">
  <div class="flip">
    <div class="inner">
      <div class="front">
	<img src="Fer.png" alt="Fernando" style="width:220px;border-radius:50%;background-color:transparent;">
      </div>
      <div class="back">
	<br/>
	<strong style="color:black;">Fernando H. Li</strong><br/><br/>
	<strong style="color:black;">Engineer in training</strong><br/><br/>
	<strong style="color:black;">Love coding and languages</strong>
      </div>
    </div>
  </div>
<div class="ico">
<a href="https://www.facebook.com/oritahikarikun" class="fa fa-facebook" style="font-size:42px;"></a>
<a href="https://www.linkedin.com/in/fernando-h-li-226175108/" class="fa fa-linkedin" style="font-size:42px;"></a>
<a href="#" class="fa fa-instagram" style="font-size:42px;"></a>
</div>
</div>

<div class="center">

<div class="tab">
<h1>Project - Automatization of Excel and Outlook in VBA</h1>
<p style="font-size:22px;">In Mito Sushi, We need to plan out the production of Sushi according to the orders. Complicated calculation on the ingredients and labor using Excel spreadsheets is needed, which takes plenty of time if done manually.</p> 
<p style="font-size:22px;">With the help of VBA, I was able to make it automatic to carry out the calculations, to print out piles of documents needed for the production and to send an official report via Outlook to all the responsibles.</p>
</div>

<div class="tab">
<h1>Project - Professional Profile on Internet</h1>

<p style="font-size:22px;">Since my current job is not in programming, nor is it in engineering, I am thinking to change my job so that I could do something I like. One idea that popped up in my mind is that I could create a website like LinkedIn but in my own style to better present myself to potential employers.</p> 
<p style="font-size:22px;">To create this website, I self-studied PHP, SQL, HTML, JavaScript and CSS with online sources, and I finally make this goal come true on April 14th, 2019. Now i am still polishing the websites and in the meanwhile, polishing my skills in web development.</p>
</div>

<div class="tab">
<h1>Project - Application Web - Messenger</h1>
<p style="font-size:22px;">It happens to me that sometimes I miss someone but I do not want to send a message to bother him/her. Sending a messages on SMS or Facebbook is definitely not a good idea since the other person will receive a notification while the point is that I want that person to read my messages only when he/she is free.
</p>
<p style="font-size:22px;">
With this issue in my life, I decided to make a some chat application where people can communication without sending notifications. Now I am using it with my partner and we find it interesting and easy to use. There are a few bugs that require me to study PHP and JavaScript in depths to solve them, which urges me to study more. Now I am studying Node.js to make the chat simultaneous.
</p>
</div>

<div class="tab">
<h1>Design of Log-in Page with a Password</h1>
<p style="font-size:22px;">Following the idea of making a internet chat, here arises an issue: the messages are not well protected. Therefore, a log-in window with passwords is needed.</p>
<p style="font-size:22px;">A database that contains the passwords is needed; there arises the method of hash to protect our passwords from being deciphered when hacked. Also when it comes to user input data, it is important to validate the input to prevent SQL injection or JavaScript injection. I also tried adding cookies and sessions to help users avoid putting in their passwords every time they log in onto the website.</p>
</div>

<div style="overflow:auto;position:absolute;margin-bottom:20px;">
     <div style="float:right;">
     	  <button type="button" id="prev" onclick="nextPrev(-1)">Prev</button>
     	  <button type="button" id="next" onclick="nextPrev(1)">Next</button>
     </div>
</div>

<div style="text-align:center;margin-bottom:20px;position:absolute;left:50%;">
<span class="step">1</span>
<span class="step">2</span>
<span class="step">3</span>
<span class="step">4</span>
</div>





</div>
</div>
</div>
<div class="veil" id="veil">

</div>
<div class="bottom">

</div>
<script>
var z=1;
var currenttab=0;
showtab(currenttab);


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
 function veil() {
 var para=document.getElementById("veil");
 para.style.transition="all 0.1s";
 para.style.width="100%";
}

 function unveil() {
 var para=document.getElementById("veil");
 para.style.transition="all 0.1s";
 para.style.width="0%";
}



function showtab(n) {
	 var x=document.getElementsByClassName("tab");
	 x[n].style.display="block";
	 if (n==0) {
	    document.getElementById("prev").style.display="none";
	 } else {
	   document.getElementById("prev").style.display="inline";
	 }
	 if (n==x.length-1) {
	    document.getElementById("next").style.display="none";
	 } else {
	   document.getElementById("next").style.display="inline";
	 }
indicator(n);
}


function nextPrev(n) {
var x=document.getElementsByClassName("tab");
	 x[currenttab].style.display="none";
	 currenttab=currenttab+n;
	 showtab(currenttab);
}


function indicator(n) {
var i,x=document.getElementsByClassName("step");
for (i=0;i<x.length;i++) {
    x[i].className=x[i].className.replace(" active","");
}
x[n].className+=" active";
}
</script>

</body>
</html>


