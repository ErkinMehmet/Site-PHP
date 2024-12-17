function test(el){
    alert('fuck');
}

function toggleplusmoins(el){
    //alert("fuck");
    //get chatbaox
    var chatbox=el.parentNode.parentNode.parentNode.parentNode;
    //alert(chatbox.outerHTML);
    if (el.classList.contains('fa-plus')){
        chatbox.classList.remove('chatbox-min');
        el.classList.remove("fa-plus");
        el.classList.add("fa-minus");
    } else {
        chatbox.classList.add('chatbox-min');
        el.classList.remove("fa-minus");
        el.classList.add("fa-plus");
    }
}

function farmatayeule(el){
    //alert("fuck");
    //get chatbaox
    var chatbox=el.parentNode.parentNode.parentNode.parentNode;
    //alert(chatbox.outerHTML);
    var moe=chatbox.parentNode.id;
      //alert(moe);
      moe2=moe.split("34abdag")[0];
      moe3=moe2.split("alis")[1];
      //get gip ou uid2
      toe=chatbox.id;
      toe2=toe.split("34abdag")[0];
      toe4=toe2.split("alis")[1];
      var isgpch=chatbox.classList.contains('group-chat');
      //alert(isgpch);
      //envoyer un message pour la base de donnees esti p1actif
      xhttp = new XMLHttpRequest();
      if (isgpch){
          //si gp
          isgpch10=1;
      } else {
          isgpch10=0;
      }
      //alert(isgpch10);
          xhttp.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {
                  //alert(this.responseText);
              }
                };
                connex="p1chatdesactif.php";
                var json_upload = "json_name=" + JSON.stringify({u:moe3, u2g:toe4,type:isgpch10});
                xhttp.open("POST",connex);
                xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhttp.send(json_upload); 
                //kill it en tabaranak esti de caliss nique ta mere

    chatbox.parentNode.removeChild(chatbox);
     //child.hide();

}


function chatsendbtn(el){
    //obtenir le msg
    //alert("fuck");
    //alert(el.innerHTML);
    var txtbox=el.parentElement.getElementsByTagName("textarea")[0];
    var msg=txtbox.value;
    var chatbox=el.parentElement.parentElement;
    //savoir si le msg est chat ou gpchat
    var isgpch=chatbox.classList.contains('group-chat');
    //senid recid gpid etc
    //get uid
    var moe=chatbox.parentElement.id;
    moe2=moe.split("34abdag")[0];
    moe3=moe2.split("alis")[1];
    //get gip ou uid2
    toe=chatbox.id;
    toe2=toe.split("34abdag")[0];
    toe4=toe2.split("alis")[1];
    //alert(moe3);
    //ajax pour lancer le sql pour inserer ou changer des statuts
    xhttp = new XMLHttpRequest();
    if (isgpch){
        //si gp
        isgpch10=1;
    } else {
        isgpch10=0;
    }
    //alert(isgpch10);
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                //alert(this.responseText);
            }
              };
              connex="p1chatajaxins.php";
              var json_upload = "json_name=" + JSON.stringify({u:moe3, u2g:toe4,msgsent:msg,type:isgpch10});
              xhttp.open("POST",connex);
              xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhttp.send(json_upload); 
//scrolldown


//txtbox kill
txtbox.value="";

}

function p1chatrefresh(){
    var checkchatboxholder=document.getElementsByClassName('chatbox-holder');
if (checkchatboxholder.length!=0){
    var chatboxesholder=checkchatboxholder[0];

    var uid=chatboxesholder.id;
    moe2=uid.split("34abdag")[0];
    moe=moe2.split("alis")[1];
    //alert(moe);
    xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    //alert(isgpch10);
                    //alert(this.responseText);
                    //modifier innerhtml icitte
                    chatboxesholder.innerHTML=this.responseText;

                }
                  };
                  connex="p1chatajaxactualiser.php";
                  var json_upload = "json_name=" + JSON.stringify({u:moe});
                  //alert(connex);
                  xhttp.open("POST",connex);
                  xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhttp.send(json_upload); 

    //automatic
    //onload il va rafraichir pour toutes les fenetre actifs
    //dans le fichier php il checke si on a des mises a jour si oui on lance une requete pour avoir les info


                }
}



function refreshunparun(){
    //alert("dd");
var checkchatboxholder=document.getElementsByClassName('chatbox-holder');
var chatboxesholder=checkchatboxholder[0];
var uid=chatboxesholder.id;
var moe2=uid.split("34abdag")[0];
var moe=moe2.split("alis")[1];
var chatboxes=chatboxesholder.getElementsByClassName('chatbox');
veces=chatboxes.length;

if (veces>=3) {
i=0  ;        
p1refreshchatbox(i);
ii=1;
p1refreshchatbox(ii);
iii=2;
p1refreshchatbox(iii);
} else if (veces=2) {
i=0  ;        
p1refreshchatbox(i);
ii=1;
p1refreshchatbox(ii);
} else if (veces=1) {
i=0  ;        
p1refreshchatbox(i);
}
}



function p1refreshchatbox(i){
    var checkchatboxholder=document.getElementsByClassName('chatbox-holder');
var chatboxesholder=checkchatboxholder[0];
var uid=chatboxesholder.id;
var moe2=uid.split("34abdag")[0];
var moe=moe2.split("alis")[1];
var chatboxes=chatboxesholder.getElementsByClassName('chatbox');
var resptxt=[];
    //alert(i);
    //alert(uid);
    var chatbox=chatboxes[i];
    //alert(chatbox.innerHTML);
    var isgp=chatbox.classList.contains('group-chat');
    //alert(isgp);
    if (isgp) {
        chattype=1;
    } else {
        chattype=0;
    }
    toe=chatbox.id;
    toe2=toe.split("34abdag")[0];
    toe4=toe2.split("alis")[1];
    //alert(chattype);
    var lastchatbox=chatbox.getElementsByClassName('chatbox-top')[0];
    var lastud=lastchatbox.id;
    var toe4caliss=toe4.toString().length;
    var recent=lastud.substring(toe4caliss);
    //alert(chatboxes[i].innerHTML);
    //alert(recent);

    xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    //alert(isgpch10);
                    //alert(i);
                    //resptxt[i]=this.responseText;
                    //alert(resptxt[i]);
                    //chatboxes[i].innerHTML=resptxt[i];
                    var chatmsgs=chatboxes[i].getElementsByClassName("chat-messages")[0];
                    //alert(this.responseText);
                    chatmsgs.innerHTML+=this.responseText;
                    if (this.responseText!=""){
                        p1chatscrolldownunparun(i);
                    }
                }
                  };
                  //actualiser2 actualise les boites de convo une par une sans toucher textbox
                  connex="p1chatajaxactualiser2.php";
                  var json_upload = "json_name=" + JSON.stringify({u:moe,u2g:toe4,chatte:chattype,lastupdate:recent});
                  //alert(connex);
                  xhttp.open("POST",connex);
                  xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhttp.send(json_upload); 

//mettre a jour lastupdate time
function pad2(n){return n<10?'0'+n:n}
var date=new Date();
var now=date.getFullYear().toString()+"-"+pad2(date.getMonth()+1)+"-"+pad2(date.getDate())+" "+pad2(date.getHours())+":"+pad2(date.getMinutes())+":"+pad2(date.getSeconds());
chatbox.getElementsByClassName('chatbox-top')[0].id=toe4.toString()+now;
}


function p1rftest(){
    alert("fukc");
}

function p1refreshmucho(){
    //alert("dxx");
    //setInterval(p1chatrefreshunparun2(),3000);
    //setInterval(p1chatrefreshunparun2(),3000);
    //setInterval(p1rftest(),500);
    //refresh un par un
    setInterval(function(){
        //alert("dd");
    var checkchatboxholder=document.getElementsByClassName('chatbox-holder');
    var chatboxesholder=checkchatboxholder[0];
    var uid=chatboxesholder.id;
    var moe2=uid.split("34abdag")[0];
    var moe=moe2.split("alis")[1];
    var chatboxes=chatboxesholder.getElementsByClassName('chatbox');
veces=chatboxes.length;
//alert(veces);
if (veces>=3) {
    i=0  ;        
p1refreshchatbox(i);
ii=1;
p1refreshchatbox(ii);
iii=2;
p1refreshchatbox(iii);
} else if (veces=2) {
    i=0  ;        
    p1refreshchatbox(i);
ii=1;
p1refreshchatbox(ii);
} else if (veces=1) {
    i=0  ;        
p1refreshchatbox(i);
}
    },2000);
}



function p1chatscrolldown(){
    var checkchatboxholder=document.getElementsByClassName('chatbox-holder');
    var chatboxesholder=checkchatboxholder[0];
    var uid=chatboxesholder.id;
    var moe2=uid.split("34abdag")[0];
    var moe=moe2.split("alis")[1];
    var chatboxes=chatboxesholder.getElementsByClassName('chatbox');
veces=chatboxes.length;
for (i=0;i<veces;i++){
    //alert(chatboxes[i].innerHTML);
    var odjDiv=chatboxes[i].getElementsByClassName('chat-messages')[0];
    //alert(odjDiv.innerHTML);
    //alert(odjDiv.scrollTop);
    //alert(odjDiv.scrollHeight);
odjDiv.scrollTop = odjDiv.scrollHeight;
}
}

window.addEventListener("load",function(){
    //alert("xhdd");
    var checkchatboxholder=document.getElementsByClassName('chatbox-holder');
    if (checkchatboxholder.length!=0){
    //alert("hdd");
    p1refreshmucho();
    p1chatscrolldown();
    }
})
function p1chatscrolldownunparun(i){
    var checkchatboxholder=document.getElementsByClassName('chatbox-holder');
    var chatboxesholder=checkchatboxholder[0];
    var uid=chatboxesholder.id;
    var moe2=uid.split("34abdag")[0];
    var moe=moe2.split("alis")[1];
    var chatboxes=chatboxesholder.getElementsByClassName('chatbox');
veces=chatboxes.length;


    //alert(chatboxes[i].innerHTML);
    var odjDiv=chatboxes[i].getElementsByClassName('chat-messages')[0];
    //alert(odjDiv.innerHTML);
    //alert(odjDiv.scrollTop);
    //alert(odjDiv.scrollHeight);
odjDiv.scrollTop = odjDiv.scrollHeight;
}
