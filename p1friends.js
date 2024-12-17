function friendunf(el){
    //alert("df");
//change txt
if (el.innerHTML=="Follow"){
    el.innerHTML="Unfollow";
    requ=0;
    } else {
        el.innerHTML="Follow";
        requ=1;
    }

//get id uid u2id etc.
var courriel=elementusertoken=document.getElementsByTagName('nav')[0].id;
var parparu2c=el.parentNode.parentNode.parentNode;
//alert(parparu2c.id);
//alert(courriel);
//ajax
xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    //faire des choses
                    //alert(this.responseText);
                }
                  };
                  //actualiser2 actualise les boites de convo une par une sans toucher textbox
                  connex="p1friendunf.php";
                  var json_upload = "json_name=" + JSON.stringify({uc:courriel,u2gc:parparu2c.id,statut:requ});

                  xhttp.open("POST",connex);
                  xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhttp.send(json_upload); 


//alert(courriel);

//toggle classes
el.classList.toggle('btn-primary');
el.classList.toggle('btn-danger');

//matar el perfil si esta en la lista de amigos
if (el.classlist.contains("frlistunfrbtn")){
    //alert("hello");
    //parparu2c.parentNode.removeChild(parparu2c);
}


}

function frsropenmsg(el){
    //
    //alert("fuck");
    //get info
    var courriel=elementusertoken=document.getElementsByTagName('nav')[0].id;
    var parparu2c=el.parentNode.parentNode.parentNode;
    //alert(courriel);
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
          connex="p1frsropenmsg.php";
          var json_upload = "json_name=" + JSON.stringify({uc:courriel,u2gc:parparu2c.id});

          xhttp.open("POST",connex);
          xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhttp.send(json_upload); 

    //lookfor the two buttons to add event listeners
    var checkchatboxholder=document.getElementsByClassName('chatbox-holder');
    var chatboxesholder=checkchatboxholder[0];
    var uid=chatboxesholder.id;
var moe2=uid.split("34abdag")[0];
var moe=moe2.split("alis")[1];
var chatboxes=chatboxesholder.getElementsByClassName('chatbox');
var chatbox=chatboxes[chatboxes.length-1];
//alert(chatbox.innerHTML);
    //trouver le bouton x
    var btnx=chatbox.getElementsByClassName('fa-close')[0];
    var btny=chatbox.getElementsByClassName('fa-minus')[0];
    //alert (btnx.parentNode.outerHTML);
    //btnx.parentNode.setAttribute("href","javascript:alert('d');");
}

function frsrpro(el){
    var courriel=elementusertoken=document.getElementsByTagName('nav')[0].id;

    var modal=document.getElementById("myModal");
    var modal2=document.getElementById("modalcont");
    //alert(modal2.innerHTML);
    modal.style.display="block";
    //modifier le contenu;
    var modalbody=document.getElementsByClassName('modal-body')[0];
    var modaltitle=document.getElementsByClassName('modal-title')[0];
    var fc=el.parentNode.parentNode.parentNode.id;
    var fnom1=el.parentNode.parentNode.parentNode.getElementsByTagName('h4')[0].innerHTML;
    var fnom=fnom1.split('<br><b>')[0];
    //alert(fc);
    modaltitle.innerHTML='<h3>Profile of '+fnom+"</h3>";
    //ajax
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            //faire des choses
            //alert(this.responseText);
            modalbody.innerHTML=this.responseText;
        }
          };
          //actualiser2 actualise les boites de convo une par une sans toucher textbox
          connex="p1frsrproajax.php";
          var json_upload = "json_name=" + JSON.stringify({uc:courriel,u2c:fc});

          xhttp.open("POST",connex);
          xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhttp.send(json_upload); 

}

function frsrprocl() {
    var modal=document.getElementById("myModal");
    modal.style.display="none";
}

function frsrprosv() {
    var modal=document.getElementById("myModal");
    //ajax


    modal.style.display="none";
}

function closemd(){
    var modal=document.getElementById("myModal");
    modal.style.display="none";
}

function p1screenshot(){
    var modal=document.getElementById("myModal");
    var modalbody=document.getElementsByClassName("modal-body")[0];
    modal.style.display="block";
    //alert(modal.innerHTML);
    html2canvas(document.body).then(function(canvas) {
        modalbody.appendChild(canvas);
       });
}
function screenshottest(){
    alert("fuck");
    var modal=document.getElementById("myModal");
    var modalbody=document.getElementsByClassName("modal-body")[0];
        html2canvas(modal).then(function(canvas) {
        document.body.appendChild(canvas);
       });

  }