
function p3page3filter(el){
    //alert("dfsd");
    //obtenir les deux valeurs soit debut et fin
    var debut=document.getElementById("debutpage3").value;
    var fin=document.getElementById("finpage3").value;
    //alert(debut+fin);
    test=true;
    //valider
    var regexdate = /^[12][0-9][0-9][0-9]-[01][0-9]-[0-3][0-9]$/;
    test=test&&(debut.match(regexdate)||debut=='')&&(fin.match(regexdate)||fin=='');
    if(test){
        debut.match(regexdate)
        var xmlhttp = new XMLHttpRequest();
	    xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
            //alert(this.responseText);
            var tableplanif=document.getElementById("tableplanif");
            tableplanif.innerHTML=this.responseText
		}
        };
        lien="p3accueilloginpage3vue.php?debut="+debut+"&fin="+fin;;
        xmlhttp.open("GET", lien, true);
        xmlhttp.send();
    }
    
}


function testfooter(){
    alert("fdsfds");
}
