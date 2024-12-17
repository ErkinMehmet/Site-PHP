<div class="ligne">
<div class="pie" id="pie">
<div class="intropie">
<h2>About UniGymnacio</h2>
<p>
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
		<li><a href="#">Website Design</a></li>
		<li><a href="#">Translation</a></li>
		<li><a href="#">Consultation</a></li>
		<li><a href="#">More</a></li>
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
		<li><a href="#">Make a Rendez-vous</a></li>
		<li><a href="#">Communicate with us</a></li>
		<li><a href="#">Donate a Coffee</a></li>
	</ul>
	</div>
</div>
</div>
</div>
</div>

<div class="bottom" id="bottom" style="font-size:16px;text-align:center;">
<br/><br/>
<p>Have questions or feedback? <a href="mailto:admin@fernandodupaysdelicorne.com?subject=Questions and feedback on your website">Send E-mail </a></p>
<p>Copyright:© 2020 Pays de Licorne. All Right Reserved</p>
    <br/>
</div>


<div class="msgbox" onclick="showcontact()">
<h3>Contact Info</h3>
</div>

<div class="contactinfo infohidden" id="coninfo">
<div class="individual">
<div class="indpic">
	<img src="drapeaux/VE.png" width="50">
</div>
<div class="indiinfo">
<div class="indinom">Administrator</div>
<div class="indidetail"><a href="mailto:admin@fernandodupaysdelicorne.com?subject=Questions and feedback on your website">E-mail </a></div>
</div>
</div>

<div class="individual">
<div class="indpic">
	<img src="drapeaux/VE.png" width="50">
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
window.onscroll=function(){myFunction()};
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
	c.innerHTML+="<img src=\""+el.src+"\" width=\"30\">";
	//alert(c.innertHTML);
}


//p3

function valider(el){
	var nombre=el.name;
	var valor=el.value;
	var pass=true;
	var warning=document.getElementById("warning"+nombre);
	//var warning2=document.getElementById("warning2");
	//var warning3=document.getElementById("warning3");
	//var warning4=document.getElementById("warning4");
	//var warning5=document.getElementById("warning5");
	//var warning6=document.getElementById("warning6");
	//var warning7=document.getElementById("warning7");
	//alert("ss");
	var warningm=warning.lastChild.previousSibling;
	//var warningm2=warning2.lastChild.previousSibling;
	//var warningm3=warning3.lastChild.previousSibling;
	//var warningm4=warning4.lastChild.previousSibling;
	//var warningm5=warning5.lastChild.previousSibling;
	//var warningm6=warning6.lastChild.previousSibling;
	//var warningm7=warning7.lastChild.previousSibling;
	//alert("hi");
	//alert(warningm.innerHTML);
	var dummy=true;
	//var dummy=true;
	//alert(valor+1);
	var $isnumeri=true;

	var patternnumeri=/^[0-9]+[.]?[0-9]*$/;
	var isnumeri=(valor.match(patternnumeri)!=null);
	//alert(isnumeri);
	try
    {
		valor2=parseFloat(valor);
		//alert(valor2);
		//alert(valor);
		//alert(isNaN(valor2));
		if (!isNaN(valor2)) {
			valor=valor2;
		} else {
			valor=valor;
		}
    }
    catch (err)
    {
		//alert(valor);
		valor=valor;
    }
	//alert(valor);
//test1
	switch(nombre) {
  case "year":
    // valider
	//integer
	dummy=Number.isInteger(valor);
	//alert(dummy);
	if (dummy) {
		dummy=dummy&&(valor>999)&&(valor<3000);
	}
	//alert(dummy);


    break;
  case "month":
    // code block
	dummy=Number.isInteger(valor);
	if (dummy) {
		dummy=dummy&&(valor>0)&&(valor<13);
	}

    break;
  case "day":
    // code block
	dummy=Number.isInteger(valor);
	if (dummy) {
		dummy=dummy&&(valor>0)&&(valor<32);
	}
	break;
	case "phone":
    // code block
	valor2=valor.replace("(","").replace(")","").replace("-","");
	//alert(valor2);
	var phoneno = /^[0-9]+$/;
	if (valor2.match(phoneno)) {
		dummy=true;
	} else {
		dummy=false;
	}
	break;
	case "weight":
	dummy=isnumeri;
    // code block
	break;
	case "height":
	dummy=isnumeri;
    // code block
	break;
	case "weightd":
	dummy=isnumeri;
    // code block
	break;
	case "avatar":
    // code block
	var nom=el.files.item(0).name;
	//alert(nom);
	var nomsplit=nom.split(".");
	extension=nomsplit[nomsplit.length-1];
	if (extension=="jpeg" || extension=="png") {
		dummy=true;
	} else {
		dummy=false;
	}
	break;
}

pass=pass&&dummy;
//alert(pass);
if (!pass) {
	//changer d'info
	//warningm.innerHTML="The "+nombre+" is not valid.";

		//show
	//warning.classList.toggle("hidden");
	warning.style.display = "block";

} else {
	//changer d'info
	//warningm.innerHTML=nombre+" is not valid.";
	warning.style.display = "none";
}
}


function p3page1tourner(el){
	var tipo=el.innerHTML;
	//alert(tipo);
	var page=0;
	//alert(page);
	switch(tipo) {
		case "Abs":
			page=1;
			break;
		case "Head":
			page=2;
			break;
		case "Arms":
			page=3;
			break;
		case "Legs":
			page=4;
			break;
		default:
			page=5;
	}	
	//alert(page);
	for (i=1;i<6;i++) {
		//alert(i);
		var div=document.getElementById("ejer"+i);
		var divb=document.getElementById("ejershowb"+i);
		if (i!=page) {
			div.style.display="none";
			divb.innerHTML="Read More";
		} else {
			div.style.display="block";
			divb.innerHTML="Read Less";
		}
	}
	//var div=document.getElementById("ejer"+page);
	//var pagediv=document.getElementsByClass("centre")(0);
	//alert(div.innerHTML);

}

function showmoreej(el) {
	var titulo=el.parentElement.previousElementSibling.firstElementChild;
	//var titulo2=titulo.previousSibling;
	//alert(el.innerHTML);
	//alert(titulo.innerHTML);
	tipo=titulo.innerHTML;
	switch(tipo) {
		case "Abominals":
			page=1;
			break;
		case "Head":
			page=2;
			break;
		case "Arms":
			page=3;
			break;
		case "Legs":
			page=4;
			break;
		default:
			page=5;
	}	
	var div=document.getElementById("ejer"+page);
	//alert(div.style.display);
	//alert(el.innerHTML);
	if (div.style.display=="none") {
		div.style.display="block";
		el.innerHTML="Read Less"
	} else {
		div.style.display="none";
		el.innerHTML="Read More"
	}

}

function validerejqtn(el) {
	var valor=el.value;
	var patternnumeri=/^[0-9]+[.]?[0-9]*$/;
	var isnumeri=(valor.match(patternnumeri)!=null);
	var warning=document.getElementById("warningej");
	//alert(warning.innerHTML);
	pass=true;
	//tester
	pass=isnumeri;

	if (!pass) {
	warning.style.display = "block";

} else {

	warning.style.display = "none";
}
}

//datapicker
//ajax1 rafraichir en fonction de la date
function rafraichirfecha(el) {
var fecha=el.value;
//alert(fecha);
//valider la date
test=true;
var regexdate = /^[12][0-9][0-9][0-9]-[01][0-9]-[0-3][0-9]$/;
	if (fecha.match(regexdate)) {
		test=test&&true;
	} else {
		test=test&&false;
	}

if (test==true) {
//changer la date
var divfechadiv=document.getElementById('ajaxfechadiv');
//alert(fecha);
//alert(divfechadiv.innerHTML);
divfechadiv.innerHTML="<h2>"+fecha+"</h2>";

//le contenu
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
		document.getElementById("ajaxej").innerHTML = this.responseText;
}
};
xmlhttp.open("GET", "p3ajax1.php?fecha="+fecha, true);
xmlhttp.send();
}



}

function ajaxinserer(el){
	var ejqtns=new Array();
	var ejids=new Array();
	var ejqtnelements=document.getElementsByClassName("ejqtn");
	var compte=0;
		//Validation avant de faire ajax
		test=true;

		var patternnumeri=/^[0-9]*$/;
	
	//ejqtns
	//for each (ejqtnelement in ejqtnelements) {
	//	compte+=1;
		//ejqtns[ejqtns.length]ejqtnelement.value;
	//}
	//obtenir toutes les info de ejercicioid et les quatite
	//aussi la date, la personne (id)
	//heure s il est possible
	//
	compte=ejqtnelements.length;
	for (var i=0;i<compte;i++){
			//alert("dd");
			ejqtns[i]=ejqtnelements[i].value;
			ejids[i]=ejqtnelements[i].id.substring(5);
			//alert(ejqtnelements[i].);

			//valider les qtn
			test=(ejqtns[i].match(patternnumeri)!=null)&&test;
	}
	persona=document.getElementById("ajaxpers").value;
	fecha=document.getElementById("ajaxfecha").value;
	fuerza=document.getElementById("ejfuerza").value;
	hora=document.getElementById("ajaxhora").value;
	//alert(persona+fecha+fuerza);
	//alert(ejids[1]);
	//alert("ddd");
	//Validation avant de faire ajax
	test=true;
	//date
	var regexdate = /^[12][0-9][0-9][0-9]-[01][0-9]-[0-3][0-9]$/;
	if (fecha.match(regexdate)) {
		test=test&&true;
	} else {
		test=test&&false;
	}
//hora
	var regexhour = /^[0-2][0-9]:[0-5][0-9]:[0-5][0-9]$/;
	if (hora.match(regexhour)) {
		test=test&&true;
	} else {
		test=test&&false;
	}	
	//alert(test);
	var errors=0;

	//seulement pour le test
	//test=true;
	//ajax2 - si le test a ete reussi
	if (test) {
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				//alert(this.responseText);
			}
		};
		lien="p3ajax2.php?p1="+persona+"&p2="+fecha+"&p3="+hora+"&p4="+fuerza+"&p5="+compte;
	
		for (var i=0;i<compte;i++) {
			lien+="&a"+i+"="+ejids[i];
			lien+="&b"+i+"="+ejqtns[i];
		}
		//alert(lien);

		xmlhttp.open("GET", lien, true);
		xmlhttp.send();
	} else {
		errors=1;
		//alert("Prohibited symbols detected!");	
	}
//alert("success");
	if (errors==1) {
		alert("Prohibited symbols detected!");
	}
	closebtn.click();
}



function p3period(el){
	var buton=el.id;
	var butonnum=parseInt(buton.substring(buton.length-1));
	//alert(butonnum);
	for (i=0;i<3;i++) {
		var perioddiv=document.getElementById("fecha").children[i];
		//alert (perioddiv.innerHTML);
		if (i+1==butonnum) {
			perioddiv.style.display="block";
		} else {
			perioddiv.style.display="none";
		}
	}
}

function ajaxinsererperiod(el){

	var joursemaine=new Array();
	var ejqtns=new Array();
	var ejids=new Array();
	var ejqtnelements=document.getElementsByClassName("ejqtn");
	var compte=0;
		//Validation avant de faire ajax
		test=true;

		var patternnumeri=/^[0-9]*$/;
	
	//ejqtns
	//for each (ejqtnelement in ejqtnelements) {
	//	compte+=1;
		//ejqtns[ejqtns.length]ejqtnelement.value;
	//}
	//obtenir toutes les info de ejercicioid et les quatite
	//aussi la date, la personne (id)
	//heure s il est possible
	//
	compte=ejqtnelements.length;
	for (var i=0;i<compte;i++){
			//alert("dd");
			ejqtns[i]=ejqtnelements[i].value;
			ejids[i]=ejqtnelements[i].id.substring(5);
			//alert(ejqtnelements[i].);

			//valider les qtn
			test=(ejqtns[i].match(patternnumeri)!=null)&&test;
	}
	persona=document.getElementById("ajaxpers").value;
	fuerza=document.getElementById("fuerza1").value;
	hora=document.getElementById("hora1").value;
	//alert(persona+fecha+fuerza);
	//alert(ejids[1]);
	//alert("ddd");
	//Validation avant de faire ajax

	//plus d'info
	//type de planif periodique
	//1,2,3
	var type=0;
	for (i=0;i<3;i++) {
		var perioddiv=document.getElementById("fecha").children[i];
		//alert (perioddiv.innerHTML);
		if (perioddiv.style.display=="block") {
			type=i+1;
			//alert(type);
			break;
		}
	}
	if (type==0) {type=1}
	//alert(type);




	test=true;

//date
var regexdate = /^[12][0-9][0-9][0-9]-[01][0-9]-[0-3][0-9]$/;

//hora
var regexhour = /^[0-2][0-9]:[0-5][0-9]:[0-5][0-9]$/;
if (hora.match(regexhour)) {
	test=test&&true;
} else {
	test=test&&false;
}	
//alert(test);

//validation pour les trois types
switch(type){
		case 3:
		//mensuel
		var debutmensuel=document.getElementById("debut2");
		var finmensuel=document.getElementById("fin2");
		if (debutmensuel.value.match(regexdate)) {
			test=test&&true;
		} else {
			test=test&&false;
		}
		if (finmensuel.value.match(regexdate)) {
			test=test&&true;
		} else {
			test=test&&false;
		}
		break;
		case 2:
		var debutmensuel=document.getElementById("debut3");
		var finmensuel=document.getElementById("fin3");
		if (debutmensuel.value.match(regexdate)) {
			test=test&&true;
		} else {
			test=test&&false;
		}
		if (finmensuel.value.match(regexdate)) {
			test=test&&true;
		} else {
			test=test&&false;
		}
		break;
		default:
		//quotidien
		var debutmensuel=document.getElementById("debut1");
		var finmensuel=document.getElementById("fin1");
		if (debutmensuel.value.match(regexdate)) {
			test=test&&true;
		} else {
			test=test&&false;
		}
		if (finmensuel.value.match(regexdate)) {
			test=test&&true;
		} else {
			test=test&&false;
		}
		break;
		
	}
	joursemaine[0]=true;
//ramasser les info semanales
for (i=1;i<8;i++) {
	var porsemana=document.getElementById("wkday"+i);
	if (porsemana.checked) {
		joursemaine[i]=1;
	} else {
		joursemaine[i]=0;
	}
}

//les infor pour les mois
var pormes=document.getElementById("jourmois");
jourmois=pormes.value;

//seulement pour le test
//test=true;
//alert(test);
//ajax2 - si le test a ete reussi
if (test) {
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			//alert(this.responseText);
		}
	};
	lien="p3ajax3.php?p1="+persona+"&p3="+hora+"&p4="+fuerza+"&p5="+compte+"&p6="+type;
	
	switch(type){
		case 2:
		//hebdomadaire
		pp1=document.getElementById("debut3").value;
		pp2=document.getElementById("fin3").value;
		lien+="&pp1="+pp1+"&pp2="+pp2;
		for (ii=1;ii<8;ii++){
			lien+="&ppp"+ii+"="+joursemaine[ii];
		}
		break;
		case 3:
		//mensuel
		pp1=document.getElementById("debut2").value;
		pp2=document.getElementById("fin2").value;
		lien+="&pp1="+pp1+"&pp2="+pp2+"&ppp1="+jourmois;
		break;
		default:
		//quotidien on utilise les memes noms que pour le mensuel
		pp1=document.getElementById("debut1").value;
		pp2=document.getElementById("fin1").value;
		lien+="&pp1="+pp1+"&pp2="+pp2;
		break;
	}

	errors=0;
	for (var i=0;i<compte;i++) {
		lien+="&a"+i+"="+ejids[i];
		lien+="&b"+i+"="+ejqtns[i];
	}
	//alert(lien);

	xmlhttp.open("GET", lien, true);
	xmlhttp.send();
} else {
		
	errors=1;
}
//alert("success");
if (errors==1)
{
	alert("Prohibited symbols detected!");
	}
var closebtn=document.getElementById("closebtn");
closebtn.click();
}



function confmodal(el){
	//envoyer des info a modal
	var modal=document.getElementById("modaltext");
	var confid=document.getElementById("confactif");
	var botontipo=document.getElementById("botontipo");

	confid.value=el.id;
	modal.innerHTML="Do you want to change the status of the item you have chosen?";
	botontipo.value=1;
	//alert(botontipo.value);
}

function modmodal(el){
	var modal=document.getElementById("modaltext");
	var modid=document.getElementById("modactif");
	var botontipo=document.getElementById("botontipo");
	
	

	botontipo.value=2;
	modid.value=el.id;
	var botoncms=document.getElementById(modid.value);

	//	var fecha=el.parentElement.previousElementSibling.children[1].innerHTML;
	var fecha=el.parentElement.previousElementSibling.children[1].innerHTML;
	//var test=el.parentElement.previousElementSibling.children[1];
	var hora=el.parentElement.previousElementSibling.children[2].innerHTML;
	var ej=el.parentElement.previousElementSibling.children[4].innerHTML;
	var cant=el.parentElement.previousElementSibling.children[5].innerHTML;
	var plid=el.parentElement.previousElementSibling.children[7].value;
	var estado=el.parentElement.previousElementSibling.children[8].value;
	//alert(estado);
	//more..
	//alert("d");
	//bouger les info dans modalinfo et a modal finalement
	//var modalinput1=document.getElementById("modalinput1");
	//var modalinput2=document.getElementById("modalinput2");
	//var modalinput3=document.getElementById("modalinput3");
	//var modalinput4=document.getElementById("modalinput4");
	//alert(modalinput1.value);
	//modalinput1.value=fecha;
	//alert(modalinput1.value);
	//modalinput2.value=hora;
	//modalinput3.value=ej;
	//modalinput4.value=cant;
	var modalinfo="<h4>Modify the information below:</h4><label for=\"modalinput1\">Date:</label><input type=\"text\" id=\"modalinput1\" value=\""+fecha;
	modalinfo+="\"><br/>";
	modalinfo+="<label for=\"modalinput2\">Hour:</label><input type=\"text\" id=\"modalinput2\" value=\""+hora+"\"><br/><label for=\"modalinput3\">Exercises:</label>";
	modalinfo+="<select id=\"modalinput3\">";
	var modalopts=document.getElementById("modalopts");
	modalinfo+=modalopts.innerHTML;
	modalinfo+="</select><br/><label for=\"modalinput4\">Quantity:</label><input type=\"text\" id=\"modalinput4\" value=\""+cant+"\">";
	//alert(modalinfo);
	//alert("suce");
	modal.innerHTML=modalinfo;
	var modalinput3=document.getElementById("modalinput3");
	//alert(modalinput3.value);
	modalinput3.value=ej;

}

function supmodal(el){
	//envoyer des info a modal
	var modal=document.getElementById("modaltext");
	var supid=document.getElementById("supactif");
	var botontipo=document.getElementById("botontipo");

	supid.value=el.id;
	modal.innerHTML="Do you want to delete the item you have chosen?";
	botontipo.value=3;
	//alert(botontipo.value);
}


function p3conf(el){
	//var info=el.parentElement.previousElementSibling.children[i];
//info
	var confid=document.getElementById("confactif");
	var botontipo=document.getElementById("botontipo");
	var modid=document.getElementById("modactif");
	var supid=document.getElementById("supactif");

	//var info=el.parentElement.getElementsByTagName('div')[1];
	//var modal=document.getElementById("modaltext");
	//alert("dd");
	//alert(modal.innerHTML);
	if (botontipo.value==1) {
		var botoncms=document.getElementById(confid.value);
	} else if (botontipo.value==2) {
		var botoncms=document.getElementById(modid.value);
	} else {
		var botoncms=document.getElementById(supid.value);
		//alert(supid.value);
	}
	//alert(confid.value);
		//changer text
	//if (butonconf.innerHTML=="Done") {
	//	butonconf.innerHTML="Not Done"
	//} else {
	//	butonconf.innerHTML="Done"
	//}

	//trouver le buton original
	//alert(botontipo.value);
		//ajax4

		var fecha=botoncms.parentElement.previousElementSibling.children[1].innerHTML;
	var hora=botoncms.parentElement.previousElementSibling.children[2].innerHTML;
	var ej=botoncms.parentElement.previousElementSibling.children[4].innerHTML;
	var cant=botoncms.parentElement.previousElementSibling.children[5].innerHTML;
	var plid=botoncms.parentElement.previousElementSibling.children[7].value;
	var estado=botoncms.parentElement.previousElementSibling.children[8].value;
	var padre=botoncms.parentElement.parentElement;
	//alert(padre.innerHTML);
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			//alert(this.responseText);
		}
	};

	if (botontipo.value==1) {
		lien="p3ajax4.php?plid="+plid+"&est="+estado;
		//alert(lien);
		//actualiser input cache pour l etat - ajax4
		botoncms.parentElement.previousElementSibling.children[8].value=1-estado;
		//actualiser le texte
		if (botoncms.innerHTML=="Done") {
			botoncms.innerHTML="Not Done";
		} else {
			botoncms.innerHTML="Done";
		}
		xmlhttp.open("GET", lien, true);
		xmlhttp.send();

	} else if (botontipo.value==2) {

		//prendre les information dans le modal
		var modalinput1=document.getElementById("modalinput1");
		var modalinput2=document.getElementById("modalinput2");
		var modalinput3=document.getElementById("modalinput3");
		var modalinput4=document.getElementById("modalinput4");
		modalfecha=modalinput1.value;
		modalhora=modalinput2.value;
		modalej=modalinput3.value;
		modalcant=modalinput4.value;
		//alert(modalej);
			//valider les info
		test=true;
		var regexdate = /^[12][0-9][0-9][0-9]-[01][0-9]-[0-3][0-9]$/;
		//hora
		var regexhour = /^[0-2][0-9]:[0-5][0-9]:[0-5][0-9]$/;
		var regexnum=/^[0-9]*$/
		test=test&&modalfecha.match(regexdate)&&modalhora.match(regexhour)&&modalcant.match(regexnum);


		if (test){
		//lien - tranferer
		lien="p3ajax5.php?plid="+plid+"&fecha="+modalfecha+"&hora="+modalhora+"&cant="+modalcant+"&ej="+modalej;
		//alert("ssdf");
		//ajax - executer ajax5
		xmlhttp.open("GET", lien, true);
		xmlhttp.send();
		}

		//actualiser
		botoncms.parentElement.previousElementSibling.children[1].innerHTML=modalfecha;
	botoncms.parentElement.previousElementSibling.children[2].innerHTML=modalhora;
	botoncms.parentElement.previousElementSibling.children[4].innerHTML=modalej;
	botoncms.parentElement.previousElementSibling.children[5].innerHTML=modalcant;

	} else {
		//alert(supid.value);
		lien="p3ajax6.php?plid="+plid;
		//supprimer le truc - ajax 6 
		padre.style.display="none";
		xmlhttp.open("GET", lien, true);
		xmlhttp.send();
	}
}


function p3filterview(el){
	alert("dfsd");
}

</script>




</body>
</html>


