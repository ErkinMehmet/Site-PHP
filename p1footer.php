<div class="ligne">
<div class="pie" id="pie">
<div class="intropie">
<h2>À propos</h2>
<p>Pays de Licorne fut créé le 19 mars, 2020 par moi-même avec l'objectif d'apprendre le développement web. Effectivement, 
cela m'a aidé énormément et je suis capable maintenant de construire des interfaces et de jolis sites à partir de zéro. En dépit de ceci, 
je m'efforce encore à apprendre les frameworks et les outils plus moderns pour raffiner mes habiletés dans ce domaine.
</p>
</div>

<hr/>

<div class="piecont">

<div class="piecom">
	<div class="pietit">
	Useful links
    </div>
    <hr/>
	<div class="pielis">
	<ul class="pieliss">
		<li><a href="projectaen.php">My First Website</a></li>
		<li><a href="t2.php">Simple Chat Application</a></li>
		<li><a href="t1.php">My Second Profile</a></li>
		<li><a href="recordatorio.php">NotePad Online</a></li>
		<li><a href="t3.php">Realtime Chat</a></li>
	</ul>
	</div>
</div>

<div class="piecom">
	<div class="pietit">
	Services
    </div>
    <hr/>
	<div class="pielis">
	<ul class="pieliss">
		<li><a href="aspir.php">Website Design</a></li>
		<li><a href="aspir.php">Translation</a></li>
		<li><a href="aspir.php">Consultation</a></li>
		<li><a href="aspir.php">More</a></li>
	</ul>
	</div>
</div>

<div class="piecom">
	<div class="pietit">
	Contact Us
    </div>
    <hr/>
	<div class="pielis">
	<ul class="pieliss">
		<li><a href="rendezvous.php">Make a Rendez-vous</a></li>
		<li><a href="p1contact.php">Communicate with us</a></li>
		<li><a href="aspir.php">Donate a Coffee</a></li>
	</ul>
	</div>
</div>

</div>
<hr/>


	<div class="gauchefoot" onclick="toggletime()">
<button onclick="toggeletime()" class="btn btn-default">Show Time</button>
    </div>
<br/>




<iframe src="calendar3.php" id="gettimeif" title="W3Schools Free Online Web Tutorials" style="width:100%;height:500px;display:none;"></iframe>

</div>
</div>

<div class="bottom" id="bottom" style="font-size:16px;text-align:center;">
<br/><br/>
<p>Have questions or feedback? <a href="mailto:admin@fernandodupaysdelicorne.com?subject=Questions and feedback on your website">Send E-mail </a></p>
<p>Copyright:© 2020 Pays de Licorne. All Right Reserved</p>
    <br/>
</div>


<div class="msgbox" onclick="showcontact()">
<h3>Contact</h3>
</div>

<div class="contactinfo infohidden" id="coninfo">
<div class="individual">
<div class="indpic">
	<img src="drapeaux/CA.png" width="50">
</div>
<div class="indiinfo">
<div class="indinom">Administrator</div>
<div class="indidetail"><a href="mailto:admin@fernandodupaysdelicorne.com?subject=Questions and feedback on your website">E-mail </a></div>
</div>
</div>

<div class="individual">
<div class="indpic">
	<img src="drapeaux/AR.png" width="50">
</div>
<div class="indiinfo">
<div class="indinom">Fernando HL Sánchez</div>
<div class="indidetail"><a href="mailto:fernando@fernandodupaysdelicorne.com?subject=Questions and feedback on your website">E-mail </a></div>
</div>
</div>

<div class="individual">
<div class="indpic">
	<img src="drapeaux/SC.png" width="50">
</div>
<div class="indiinfo">
<div class="indinom">Yohann AK Sánchez</div>
<div class="indidetail"><a href="mailto:yohann@fernandodupaysdelicorne.com?subject=Questions and feedback on your website">E-mail </a></div>
</div>
</div>

<div class="individual">
<div class="indpic">
	<img src="drapeaux/CL.png" width="50">
</div>
<div class="indiinfo">
<div class="indinom">Alejandra HL Sánchez</div>
<div class="indidetail"><a href="mailto:alejandra@fernandodupaysdelicorne.com?subject=Questions and feedback on your website">E-mail </a></div>
</div>
</div>



</div>

<script>
//window.onscroll=function(){myFunction()};
var header=document.getElementById("myHeader");
var sticky=header.offsetTop;
function myFunction(){
    if (window.pageYOffset>sticky) {
        header.classList.add("sticky");
    } else {
        header.classList.remove("sticky");
    }
}
var contactinfo=document.getElementById("coninfo");

function showcontact() {
 
    //alert(contactinfo.innerHTML);
    //alert(contactinfo.classList.contains("infohidden"));

    if (contactinfo.classList.contains("infohidden")==true) {
        contactinfo.classList.remove("infohidden");
    } else {
        contactinfo.classList.add("infohidden");
    }
}

function bold(){
	var commentbox=document.getElementById("boitedesaisie");
	var largo=commentbox.innerHTML.length

	if (commentbox.innerHTML.substring(largo-4,largo)!="</b>") {
	commentbox.innerHTML+="<b>Bold</b>";
	//alert(commentbox.innerHTML);
	//alert(commentbox.innerHTML.length);
	var s=window.getSelection(),
	r=document.createRange();
	//commentbox.innerHTML.length-7
	//ommentbox.querySelector('b').firstChild.innertext.length-2
	r.setStart(commentbox.querySelector('b').firstChild,0);
	r.setEnd(commentbox.querySelector('b').firstChild,4);
	s.removeAllRanges();
	s.addRange(r);
	//alert(commentbox.innerHTML);
	} else {
		commentbox.innerHTML+="Normal";
		var s=window.getSelection(),
	r=document.createRange();
	//commentbox.innerHTML.length-7
	//ommentbox.querySelector('b').firstChild.innertext.length-2
	r.setStart(commentbox.lastChild,0);
	r.setEnd(commentbox.lastChild,6);
	s.removeAllRanges();
	s.addRange(r);
	}
}

function enviar(){
	var c=document.getElementById("boitedesaisie");
	var d=document.getElementById("commentaire");
	d.value=c.innerHTML;
	var f=document.getElementById("myForm");
	//alert(d.value);
	f.submit();
}

function showcountries(){

	var coun=document.getElementById("countries");
	//coun.style.display="relative";
	if (coun.style.display=='none') {
		coun.style.display='block';
		//alert(coun.style.display);
	} else {
		coun.style.display='none';
		//alert(coun.style.display);
	}
}

function addcountry(el){
	//alert(el.src);
	var c=document.getElementById("boitedesaisie");
	//c.innerHTML+="<img src=\""+el.src+"\" width=\"30\">";
	//alert(c.innertHTML);
	//ajouter input de pays
	var p=document.getElementById("ppays");
	p.value=el.src;


	//changer de photo
	var profile=document.getElementById("commpays");
	profile.src=el.src;


}

function changeartcomm(el) {
	var text=el.innerHTML;
	var hiddenele=document.getElementById("hiddencomm");
	hiddenele.value=text;
}


function articlesfil(){
	//alert("dd");
	//obtenir
	var boite=document.getElementById("exampleInputEmail1");
	var motclef=boite.value;
	var changement=document.getElementById("allarticles");
	//alert(document.getElementById("langset").innerText.split(","));
	var langset=document.getElementById("langset").innerText.split(": ");
	var catset=document.getElementById("catset").innerText.split(": ");
	lang=langset[1];
	cat=catset[1];
	//alert(lang);
	//alert(changement.innerHTML);
	var xhttp;
	xhttp = new XMLHttpRequest();
  	xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      changement.innerHTML = this.responseText;
    }
  	};
  	xhttp.open("GET", "articlesfil.php?mc="+motclef+"&lang="+lang+"&cat="+cat, true);
  	xhttp.send();   
}
function articlesunfil(){
	//alert("still");
	var url = window.location.href.split('?')[0];
	window.location.href = url;
}

function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
//document.getElementById("defaultOpen").click();

function toggletime(){
	//alert("dd");
	var gettime=document.getElementById("gettimeif");
	
	if (gettime.style.display=="none"){
		//alert(gettime.style.display=="none");
		gettime.style.display="block";
		//alert(gettime.style.display=="none");
		window.scrollTo(0,document.body.scrollHeight);
	} else {
		gettime.style.display="none";
	}
}

function changedatesch(el){
	var sectioncal=document.getElementById("cd-timeline");

sectioncal.style.display='block';
var sectioncal2=document.getElementById("cd-timeline2");

sectioncal2.style.display='none';
  var ds=document.getElementById("dateslected")
  var yearmonth=document.getElementById("yearmonth").innerText;
  yearmonth2=yearmonth.split(" ");
  year=yearmonth2[1];
  month=yearmonth2[0];
  //alert(year);
  //alert(month);
//all months
var monthlist= ["January","February","March","April","May","June","July",
            "August","September","October","November","December"];
var monthlistsh = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul","Aug", "Sep", "Oct", "Nov", "Dec"];
monthnum=monthlist.indexOf(month)+1;

stringx=year+"-"+monthnum+"-"+el.innerText;
ds.innerText="Date Selected: "+stringx;

//ajax pour affichier les details

var otroiframe=document.getElementById('cd-timeline');
//alert(stringx);
var xhttp;
	xhttp = new XMLHttpRequest();
  	xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      otroiframe.innerHTML = this.responseText;
    }
  	};
  	xhttp.open("GET", "timeline2ajax.php?fecha="+stringx, true);
  	xhttp.send();   

}

function changedateschnoel(x){
	var sectioncal=document.getElementById("cd-timeline");

sectioncal.style.display='block';
var sectioncal2=document.getElementById("cd-timeline2");

sectioncal2.style.display='block';
  var ds=document.getElementById("dateslected")
  var yearmonth=document.getElementById("yearmonth").innerText;
  yearmonth2=yearmonth.split(" ");
  year=yearmonth2[1];
  month=yearmonth2[0];
  //alert(year);
  //alert(month);
//all months
var monthlist= ["January","February","March","April","May","June","July",
            "August","September","October","November","December"];
var monthlistsh = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul","Aug", "Sep", "Oct", "Nov", "Dec"];
monthnum=monthlist.indexOf(month)+1;

stringx=year+"-"+monthnum+"-"+x;
//alert(stringx);
ds.innerText="Date Selected: "+stringx;
//alert(stringx);
//ajax pour affichier les details

var otroiframe=document.getElementById('cd-timeline');
//alert("timeline2ajax.php?fecha="+stringx);
var xhttp;
	xhttp = new XMLHttpRequest();
  	xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
	  otroiframe.innerHTML = this.responseText;
	  //alert(otroiframe.innerHTML);
    }
  	};
  	xhttp.open("GET", "timeline2ajax.php?fecha="+stringx, true);
	  xhttp.send();   
	  
	  window.scrollTo(0, 0);  

}



function monthminus(){
  var yearmonth=document.getElementById("yearmonth").innerText;
  yearmonth2=yearmonth.split(" ");
  year=yearmonth2[1];
  month=yearmonth2[0];
  //alert(year);
  //alert(month);
//all months
var monthlist= ["January","February","March","April","May","June","July",
            "August","September","October","November","December"];
var monthlistsh = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul","Aug", "Sep", "Oct", "Nov", "Dec"];

  //exception
if (month==monthlist[0]){
  targetmonth=monthlist[11];
  targetyear=Number.parseInt(year)-1;
} else {
  //alert(monthlist.indexOf(month));
  targetmonth=monthlist[monthlist.indexOf(month)-1];
  //alert(targetmonth);
  targetyear=Number.parseInt(year);
}
//alert(targetmonth);


//ajax
var sectioncal=document.getElementById("calendarsup");
var xhttp;
	xhttp = new XMLHttpRequest();
  	xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      sectioncal.innerHTML = this.responseText;
    }
  	};
  	xhttp.open("GET", "calendarajax.php?year="+targetyear+"&month="+targetmonth, true);
  	xhttp.send();   
}

function monthplus(){
  var yearmonth=document.getElementById("yearmonth").innerText;
  yearmonth2=yearmonth.split(" ");
  year=yearmonth2[1];
  month=yearmonth2[0];
  //alert(year);
  //alert(month);
//all months
var monthlist= ["January","February","March","April","May","June","July",
            "August","September","October","November","December"];
var monthlistsh = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul","Aug", "Sep", "Oct", "Nov", "Dec"];

  //exception
if (month==monthlist[11]){
  targetmonth=monthlist[0];
  targetyear=Number.parseInt(year)+1;
} else {
  //alert(monthlist.indexOf(month));
  targetmonth=monthlist[monthlist.indexOf(month)+1];
  //alert(targetmonth);
  targetyear=Number.parseInt(year);
}
//alert(targetmonth);


//ajax
var sectioncal=document.getElementById("calendarsup");
var xhttp;
	xhttp = new XMLHttpRequest();
  	xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      sectioncal.innerHTML = this.responseText;
    }
  	};
  	xhttp.open("GET", "calendarajax.php?year="+targetyear+"&month="+targetmonth, true);
  	xhttp.send();   
}


function yearplus(){
  var yearmonth=document.getElementById("yearmonth").innerText;
  yearmonth2=yearmonth.split(" ");
  year=yearmonth2[1];
  month=yearmonth2[0];
  //alert(year);
  //alert(month);
//all months
var monthlist= ["January","February","March","April","May","June","July",
            "August","September","October","November","December"];
var monthlistsh = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul","Aug", "Sep", "Oct", "Nov", "Dec"];

  //exception

  //alert(monthlist.indexOf(month));
  targetmonth=monthlist[monthlist.indexOf(month)];
  //alert(targetmonth);
  targetyear=Number.parseInt(year)+1;

//alert(targetmonth);


//ajax
var sectioncal=document.getElementById("calendarsup");
var xhttp;
	xhttp = new XMLHttpRequest();
  	xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      sectioncal.innerHTML = this.responseText;
    }
  	};
  	xhttp.open("GET", "calendarajax.php?year="+targetyear+"&month="+targetmonth, true);
  	xhttp.send();   
}




function yearminus(){
  var yearmonth=document.getElementById("yearmonth").innerText;
  yearmonth2=yearmonth.split(" ");
  year=yearmonth2[1];
  month=yearmonth2[0];
  //alert(year);
  //alert(month);
//all months
var monthlist= ["January","February","March","April","May","June","July",
            "August","September","October","November","December"];
var monthlistsh = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul","Aug", "Sep", "Oct", "Nov", "Dec"];

  //exception
  targetmonth=monthlist[monthlist.indexOf(month)];
  //alert(targetmonth);
  targetyear=Number.parseInt(year)-1;
//alert(targetmonth);


//get info
	var nom=document.getElementById("nombre").value;
	var titre=document.getElementById("suject").value;
	var cell=document.getElementById("cellnum").value;
	var email=document.getElementById("exampleInputEmail1").value;
	var debuthm=document.getElementById("exampleInputEmail2").value;
	var finhm=document.getElementById("exampleInputEmail3").value;
	var msg=document.getElementById("exampleFormControlTextarea1").value;
//alert(nom);

//ajax
var sectioncal=document.getElementById("calendarsup");
var xhttp;
	xhttp = new XMLHttpRequest();
  	xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      sectioncal.innerHTML = this.responseText;
    }
  	};
  	xhttp.open("GET", "calendarajax.php?year="+targetyear+"&month="+targetmonth, true);
	  xhttp.send();   
	  





}



function valenv(){
	var sectioncal2=document.getElementById("cd-timeline2");
sectioncal2.style.display='block';
	//obtenir les donnees
	//alert("dd");
	var dia0=document.getElementById("dateslected");
	dia=dia0.innerText.split(": ")[1];
	//alert(dia1);
	var nom=document.getElementById("nombre").value;
	var titre=document.getElementById("suject").value;
//alert(nom);
//alert(titre);
	var cell=document.getElementById("cellnum").value;
	var email=document.getElementById("exampleInputEmail1").value;
	var debuthm=document.getElementById("exampleInputEmail2").value;
	var finhm=document.getElementById("exampleInputEmail3").value;
	var msg=document.getElementById("exampleFormControlTextarea1").value;
	//alert(email);
	//alert(msg);
	//valider determiner s il existe 8 erreurs
	var patc=/^[0-9A-Za-z]+@[0-9A-Za-z]+.[0-9A-Za-z]+$/;
	test1=(email.match(patc)!=null)&&(email!="");
	err1="The email is empty or is not valide.";
	//alert(test1);
	pathm1=/^[0-1][0-9]:[0-6][0-9]$/;
	pathm2=/^2[0-4]:[0-6][0-9]$/;
	test2=(debuthm.match(pathm1)!=null)||(debuthm.match(pathm2)!=null);
	test3=(finhm.match(pathm1)!=null)||(finhm.match(pathm2)!=null);
	err2="The format of start time is not correct.";
	err3="The format of end time is not correct.";
	//alert(test2);
	//alert(test3);
	if (test2&&test3){
		debuthms=debuthm.split(":");
		debuth=parseInt(debuthms[0]);
		debutm=parseInt(debuthms[1]);
		finhms=finhm.split(":");
		finh=parseInt(finhms[0]);
		finm=parseInt(finhms[1]);
		diff=(finh-debuth)*60+finm-debutm;
		test4=(diff>0)&&(diff<=180);
		//alert(debuth+finh+debutm+finm);
		//alert(diff);
		//alert(test4);
	} else {
		test4=false;
	}
	err4="The end time should be after the start time and the duration should be within 3 hours.";
	var now=new Date();
	//alert(dia);

	dias=dia.split("-");
	//alert(dias[2]);
	diay=parseInt(dias[0]);
	diam=parseInt(dias[1]);
	diad=parseInt(dias[2]);
	var nowy=now.getFullYear();
	var nowm=now.getMonth()+1;
	var nowd=now.getDate();
	//lert(nowm);

	//alert(Date.parseDate(dia, "Y-m-d"));diay
	test5=(diay>nowy)||((diay==nowy)&&(diam>nowm))||((diay==nowy)&&(diam==nowm)&&(diad>=nowd));
	err5="You have entered a date in the past.";
	//alert(test5);
	//alert(debuth);
	var nowh= now.getHours();
	var nowmin=now.getMinutes();
	if (test2&&test3){
	test6=test5;
	
	test6=test6&&((debuth*60+debutm)>(nowh*60+nowmin))
	} else {
		test6=false;
	}
	//err6="The time is in the past.";
	//alert(test6);
		//envoyer a l ajax d erreur ou l ajax de l insertion
		
		var sectioncal=document.getElementById("cd-timeline");
		//alert(sectioncal.innerHTML);
		var xhttp;
	xhttp = new XMLHttpRequest();
  	xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
		//alert(this.responseText);
		//alert(sectioncal2.innerHTML);
	  sectioncal2.innerHTML = this.responseText;
	  //alert(sectioncal2.innerHTML);
    }
	  };
	  connex="rendezvousajax.php?t1="+test1+"&t2="+test2+"&t3="+test3+"&t4="+test4+"&t5="+test5+"&t6="+test6;
	  //alert(connex);
	  connex=connex+"&p1="+dia+"&p2="+nom+"&p3="+titre+"&p4="+cell+"&p5="+email+"&p6="+debuthm+"&p7="+finhm+"&p8="+msg;
	  //alert(connex);
  	xhttp.open("GET",connex, true);
  	xhttp.send();  
//formatting
//document.getElementById("cd-timeline").classList.remove("cd-container");
//var purple=document.getElementsByClassName("cd-timeline-img")
//for (var i = 0; i < purple.length; i++) {
  // purple[i].classList.remove('cd-timeline-img');
//}
sectioncal.style.display='none';


//ajouter sectioncal - vue pour le jour en question
//changedateschnoel();
//alert("d");
var stringxel=document.getElementById("dateslected");
stringxell=stringxel.innerText.split(": ")
stringxelll=stringxell[1];
//alert(stringxelll);
stringxellll=stringxelll.split("-");
stringx=stringxellll[2];
//alert(stringx);
changedateschnoel(stringx);

}


function confirmp1contactsignup(){
	//alert('fuck');
	var formx=document.getElementById("myFormx")
	//alert(form.innerHTML)
	formx.submit();
}

function confirmp1contactsignup2(){
	//alert('fuck');
	var formx2=document.getElementById("myFormx2")
	//alert(form.innerHTML)
	formx2.submit();
}


function confirmp1contactsignup3(){
	//alert('fuck');
	var formxf=document.getElementById("myFormxf")
	//alert(form.innerHTML)
	formxf.submit();
}

function p1logout(){
	var answer = window.confirm("Do you really want to log out?");
if (answer) {
   //alert("dd");
	xhttp = new XMLHttpRequest();
  	xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
		alert(this.responseText);
		//alert(sectioncal2.innerHTML);
	  //sectioncal2.innerHTML = this.responseText;
	  //alert(sectioncal2.innerHTML);
    }
	  };
	  connex="p1ajaxlogout.php";
	  //alert(connex);
  	xhttp.open("GET",connex, true);
	  xhttp.send();  

	  //refresh
	  location.reload();
}



}



//pour canvas
//const myPics = document.getElementById('propicc');
  //const context = myPics.getContext('2d');
  
  // event.offsetX, event.offsetY gives the (x,y) offset from the edge of the canvas.
 function clearcommentbx(el){
	 el.innerHTML="";
 }




</script>





</body>
</html>
	
	
	
	


	