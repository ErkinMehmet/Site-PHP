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



</script>
<script src="footerp2.js"></script>

</body>
</html>