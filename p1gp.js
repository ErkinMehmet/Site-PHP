function navcontactsession(el){
    //alert("fuck");
    //get info
    var infoi=el.id;
    var infoj=infoi.split("av");
    var infofuck=parseInt(infoj[1]);
    var divfuck="chatbotc"+infoj[1];
    var alldiv=document.getElementsByClassName('chatbotc');
        //control the div
for (i=0;i<alldiv.length;i++){
    if (alldiv[i].id==divfuck){
        alldiv[i].style.display="block";
    } else {
        alldiv[i].style.display="none";
    }
}
    //cambiar la clase
    var allel=document.getElementsByClassName('page-link');
    for (i=0;i<allel.length;i++){
        if (allel[i].id==infoi){
            if (!allel[i].parentNode.classList.contains("active")){allel[i].parentNode.classList.add("active");}
        } else {
            if (allel[i].parentNode.classList.contains("active")){allel[i].parentNode.classList.remove("active");}
        }
        //alert(allel[i].parentNode.outerHTML);
    }
}

function gpsropenmsg(el){
    var courriel=elementusertoken=document.getElementsByTagName('nav')[0].id;
    var parparu2c=el.parentNode.parentNode.parentNode;//nom
    //ajax p1actif
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            //faire des choses
            resp1=this.responseText.split("separatorrr");
            resp2=resp1[0];
            resp3=resp1[1];
            //alert(resp2);
            //alert(resp3);
            if (resp2=="0"){
                //ajouter une boite
                var checkchatboxholder=document.getElementsByClassName('chatbox-holder');
                var chatboxesholder=checkchatboxholder[0];
                //console.log(chatboxesholder.innerHTML);
                chatboxesholder.innerHTML=chatboxesholder.innerHTML+resp3;
                //console.log(chatboxesholder.innerHTML);
            }

        }
          };
          //actualiser2 actualise les boites de convo une par une sans toucher textbox
          connex="p1grsropenmsg.php";
          var json_upload = "json_name=" + JSON.stringify({uc:courriel,nom:parparu2c.id});

          xhttp.open("POST",connex);
          xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhttp.send(json_upload); 


}

function groupeung(el){
    //
    if (el.innerHTML=="Join"){
        el.innerHTML="Leave";
        requ=0;
        } else {
            el.innerHTML="Join";
            requ=1;
        }
        //get id uid u2id etc.
        var courriel=elementusertoken=document.getElementsByTagName('nav')[0].id;
        var parparu2c=el.parentNode.parentNode.parentNode;//nom
//ajax
xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    //faire des choses
                    //alert(this.responseText);
                }
                  };
                  //actualiser2 actualise les boites de convo une par une sans toucher textbox
                  connex="p1gpjoinleave.php";
                  var json_upload = "json_name=" + JSON.stringify({uc:courriel,u2gnom:parparu2c.id,statut:requ});

                  xhttp.open("POST",connex);
                  xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhttp.send(json_upload); 


//alert(courriel);

//toggle classes
el.classList.toggle('btn-primary');
el.classList.toggle('btn-danger');
}

function creategp(){
    //alert("d");
    //obtenir info cao nima
    var forma=document.getElementById('formcrgp');
    var zuming=document.getElementById('crgpnom');
    var zumiaoshu=document.getElementById('crgpdesc');
    var zuzhonglei=document.getElementById('crgpcat');
    var zudaxiao=document.getElementById('crgptai');
    //forma.submit();
    //valider selman
    test=0;
    if (zuming.value.length>=5&&zuming.value!=""){test=1;}
    //get id uid u2id etc.
    //alert(test);
    //alert(zudaxiao.value);
    //alert(zuming.value);
    if (test==1){
    var courriel=elementusertoken=document.getElementsByTagName('nav')[0].id;
    //ajax
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            //faire des choses
            //alert(this.responseText);
        }
          };
          //actualiser2 actualise les boites de convo une par une sans toucher textbox
          connex="p1crgpajax.php";
          var json_upload = "json_name=" + JSON.stringify({uc:courriel,nom:zuming.value,desc:zumiaoshu.value,cat:zuzhonglei.value,taille:zudaxiao.value});

          xhttp.open("POST",connex);
          xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhttp.send(json_upload); 
        }
    //msg 

}