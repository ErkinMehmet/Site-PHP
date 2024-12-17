<doctype html>
<html lang="fr">
<head>
<script>
window.onload = function() {

var chart = new CanvasJS.Chart("chartContainer", {
    animationEnabled: true,
    title: {
    	   text: "Tasks at my Current Job"
	   },
	   data: [{
	   	 type: "pie",
		       startAngle: 240,
		       		   yValueFormatString: "##0.00\"%\"",
				   		       indexLabel: "{label} {y}",
						       		   dataPoints: [
 {y:20,label:"VBA programming"},
			    {y:25,label:"Analysis in orders, needs and losses"},
			    {y:20,label:"Communication with the produtcion"},
			    {y:25,label:"Data entry and documentation"},
			    {y:10,label:"Other tasks like translation and archiving"}			     ]
															     }]
});
chart.render();


var chart2 = new CanvasJS.Chart("chartContainer2", {
    animationEnabled: true,
    exportEnabled: true,
    title:{
	text: "My Value Pyramid"
	},
	data: [{
	      type: "pyramid",
	      	    indexLabelFontSize: 18,
		    			valueRepresents: "area",
							 showInLegend: true,
							 	       legendText: "{indexLabel}",
								       		   toolTipContent: "<b>{indexLabel}:</b> {y}%",
										   		   dataPoints: [
														{ y: 35, indexLabel: "Plans, structures and organization" },
														     { y: 35, indexLabel: "Essential details and quality control" },
														       	  { y: 28, indexLabel: "Development and ameliorations" },
															       { y: 12, indexLabel: "Continuous ameliorations" }
																      ]
																      }]
});
chart2.render();

//chart3
var chart3=new CanvasJS.Chart("chartContainer3",{
animationEnabled:true,
theme:"ligth2",
title:{
	text:"My Biological Work-life Schedule"
},
axisY:{
	includeZero:true
},
data:[{
type:"line",
dataPoints:[
{x:0, y:10},
{x:1, y:10},
{x:2, y:10},
{x:3, y:10},
{x:4, y:10},
{x:5, y:20},
{x:6, y:30, indexLabel:"wake up", markerColor:"yellow",markerType:"triangle"},
{x:7, y:40},
{x:8, y:60, indexLabel:"start working", markerColor:"red",markerType:"triangle"},
{x:9, y:80},
{x:10, y:85},
{x:11, y:90},
{x:12, y:85, indexLabel:"break", markerColor:"green",markerType:"triangle"},
{x:13, y:80},
{x:14, y:75},
{x:15, y:65},
{x:16, y:55},
{x:17, y:50, indexLabel:"finish work", markerColor:"pink",markerType:"triangle"},
{x:18, y:45},
{x:19, y:45},
{x:20, y:45},
{x:21, y:40},
{x:22, y:30, indexLabel:"sleep", markerColor:"brown",markerType:"triangle"},
{x:23, y:10}
]
}]
});
chart3.render();
}
</script>

  <meta charset="UTF-8"/>
  <link rel="stylesheet" href="work.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Self presentation</title>

</head>
<body><?php error_reporting(0);       // Turn off error reporting
ini_set('display_errors', 0);
?>
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
<div id="chartContainer" style="height: 300px; width: 100%;"></div>
<br/>
<div id="chartContainer2" style="height: 300px; width: 100%;"></div>
<br/>
<div id="chartContainer3" style="height: 300px; width: 100%;"></div>
</div>



<div class="bottom" id="bottom" style="font-size:16px;text-align:center;"
<br/><br/>
<p>Have questions or feedback? <a href="mailto:huachao@ualberta.ca?subject="Questions and feedback on your website"">Send E-mail </a></p>
</div>

<script src="https://canvasjs.com/assets/script/canvasjs.min.js">
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