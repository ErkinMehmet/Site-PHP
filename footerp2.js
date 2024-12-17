
function p2findf(){
    var sear=document.getElementById("friendsearchinput");
    var searchresults=document.getElementById("searchresults");
    searchresults.style.display="block";
    //alert("dd");
    var searchstr=sear.value;
    //alert(sear.outerHTML);
    var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
            //alert(this.responseText);
            searchresults.innerHTML=this.responseText;
		}
    };
    // my id
    var tabarnak=document.getElementById("tabarnak");
    var criss=tabarnak.value;

    //validation a faire dans le code php
    lien="p2ajax1.php?p="+searchstr+"&i="+criss;
    xmlhttp.open("GET", lien, true);
		xmlhttp.send();
}

function p2relocatechat(el){
    //get user info
    var info=el.children[1].children[0];
    var id=info.value;

    var now=window.location.href;
    if (now.substring(now.length-1,now.length)=="1") {
        now=now.substring(0,now.length-6);
        now+="page=2&&id="+id;
    } else {
        now+="?";
        now+="page=2&&id="+id;
    }
    //alert(now.length);
    //alert(now);
    window.location = now;
    

}
//les fonctions pour le chat

function nottyping(){
    var tabarnak=document.getElementById("sender");
            var criss=tabarnak.value;
            var tabarnak2=document.getElementById("receiver");
            var criss2=tabarnak2.value;
    var xmlhttp =  new XMLHttpRequest();
    xmlhttp.onreadystatechange=function(){
               if (this.readyState == 4 && this.status == 200) {
                //alert(this.responseText);
    }
    };
            xmlhttp.open("GET", "p2nottyping.php?p="+criss+"&q="+criss2, true);
            xmlhttp.send();
    }
    
    function typing(){
        var tabarnak=document.getElementById("fuck");
            var criss=tabarnak.value;
            var tabarnak2=document.getElementById("fuck2");
            var criss2=tabarnak2.value;
    var xmlhttp =  new XMLHttpRequest();
    xmlhttp.onreadystatechange=function(){
               if (this.readyState == 4 && this.status == 200) {
                //alert(this.responseText);
    }
    };
            xmlhttp.open("GET", "p2typing.php?p="+criss+"&q="+criss2, true);
            xmlhttp.send();
    }
    
    
    function offline(){
        var tabarnak=document.getElementById("fuck");
            var criss=tabarnak.value;
        var nowurl=window.location.href;
        if (nowurl.includes("p2accueillogin.php?page=2&&id=")) {
        var xmlhttp =  new XMLHttpRequest();
    xmlhttp.onreadystatechange=function(){
               if (this.readyState == 4 && this.status == 200) {
                    
    }
    };
            xmlhttp.open("GET", "p2offline.php?p="+criss, true);
            xmlhttp.send();
    }
    }
    
    
    function realtime() {
        var nowurl=window.location.href;
        if (nowurl.includes("p2accueillogin.php?page=2&&id=")) {
         setInterval(refresh,1000);
        }
    }
    
    function refresh() {
    
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("history").innerHTML = this.responseText;
    }
    };
            //obtenir les info
            //moi
            var tabarnak=document.getElementById("sender");
            var criss=tabarnak.value;
            var tabarnak2=document.getElementById("receiver");
            var criss2=tabarnak2.value;
            //l autre personne
            


            lien="p2realtimechat.php?s="+criss+"&r="+criss2;
            xmlhttp.open("GET",lien, true);
            xmlhttp.send();
    }


    //il faut ajouter une condition sur l url parce que les deux doivent s executer seulement pour la page p2page2
//pour charger la convo et rafraichir quand la fenetre est pret
window.onload=realtime;
    //pour logout
window.onbeforeunload=offline;

    function p2chatsend(){
        
        var msg=document.getElementById("p2inputbox");
        var mesg=msg.value;
        
        

        //alert(mesg);
        var fuck=document.getElementById("fuck");
        var fuck2=document.getElementById("fuck2");
        //valider a faire dans php
        //ajax pour sql
        var s=fuck.value;
        var r=fuck2.value;

        //alert(s);
        //actualiser
        var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    //alert(this.responseText);
    }
    };
        lien="p2inserechat.php?s="+s+"&r="+r+"&msg="+mesg;
        xmlhttp.open("GET",lien, true);
        xmlhttp.send();
    //effacer
    msg.value="";
    }