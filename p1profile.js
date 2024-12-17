
var img = new window.Image();
function uploadphoto(el){
//inutil
}
function uploadimgpro(el) {
    var propicbtn=document.getElementById('subpropic');
    propicbtn.style.display="block";
    //img = new Image();
    img.onload = draw;
    img.onerror = failed;
    img.src = URL.createObjectURL(el.files[0]);
  };
  function draw() {
    var canvas = document.getElementById('propicc');
    canvas.style.display="block";
    canvas.width = this.width;
    canvas.height = this.height;
    var ctx = canvas.getContext('2d');
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    ctx.globalAlpha = 0.5;
    ctx.drawImage(this, 0,0);
    //alert(canvas.left);
  }
  function failed() {
    console.error("The provided file couldn't be loaded as an Image media");
  }

//regarder footer pour une partie de code pour le canvas
// Add the event listeners for mousedown, mousemove, and mouseup



function canvasdown(event){
    
//initialiser
var canvas = document.getElementById('propicc');
//alert(canvas.innerHTML);
var ctx = canvas.getContext('2d');
ctx.globalAlpha = 1;
//ctx.drawImage(img,window.canvasdownx,window.canvasdowny,window.canvasdownx2-window.canvasdownx, window.canvasdowny2-window.canvasdowny,window.canvasdownx, window.canvasdowny, window.canvasdownx2-window.canvasdownx, window.canvasdowny2-window.canvasdowny); 
ctx.fillStyle = "white";
ctx.fillRect(0,0,canvas.width,canvas.height);
ctx.globalAlpha = 0.5;
ctx.drawImage(img, 0,0); 

//alert(img.src);
window.canvasdownx=event.offsetX;
window.canvasdowny=event.offsetY;
window.press="yes";
}

function canvasmove(event){
    if (window.press=="yes" && window.canvasdownx!=""){
    window.canvasdownx1=event.offsetX;
    window.canvasdowny1=event.offsetY;
    //draw the mother fuquar
    var canvas = document.getElementById('propicc');
    //alert(canvas.innerHTML);
    var ctx = canvas.getContext('2d');
    
    ctx.fillStyle = "blue"; 
        //get pic yah
        //alert(img.src);
        ctx.globalAlpha = 1;
        wid=window.canvasdownx1-window.canvasdownx;
        hei=window.canvasdowny1-window.canvasdowny;
    ctx.drawImage(img,window.canvasdownx,window.canvasdowny,window.canvasdownx1-window.canvasdownx, window.canvasdowny1-window.canvasdowny,window.canvasdownx, window.canvasdowny, window.canvasdownx1-window.canvasdownx, window.canvasdowny1-window.canvasdowny); 
        //height width de ctx2

        //var canvas2=document.getElementById('propicc2');
        //var ctx2 = canvas2.getContext('2d');
        //ctx2.width=wid;
        //ctx2.height=hei;
        //ctx2.drawImage(canvas,window.canvasdownx,window.canvasdowny,wid,hei,0, 0, wid,hei); 
        //drawimage
        //ctx2.width=wid;
        //ctx2.height=hei;

}
}

function canvasup(event){
    window.canvasdownx2=event.offsetX;
    window.canvasdowny2=event.offsetY;
    //alert(window.canvasdownx2);
    //alert(window.canvasdownx);
window.press="no";
  }

function canvasconf(event){
//getuid
var courriel=elementusertoken=document.getElementsByTagName('nav')[0].id;

    //obtenir
    var canvas = document.getElementById('propicc');
    var ctx = canvas.getContext('2d');

    //verifier s il est pret

    //couper l image
    ctx.globalAlpha = 1;
    ctx.fillStyle = "white";
ctx.fillRect(0,0,canvas.width,canvas.height);
//alert(window.canvasdownx);
//alert(window.canvasdowny);
//alert(window.canvasdownx2);
//alert(window.canvasdowny2);
wid=window.canvasdownx2-window.canvasdownx;
hei=window.canvasdowny2-window.canvasdowny;

ctx.drawImage(img,window.canvasdownx,window.canvasdowny,wid,hei,0, 0, wid,hei); 
var canvas2=document.getElementById('propicc2');
canvas2.style.display="block";
var ctx2 = canvas2.getContext('2d');
ctx2.clearRect(0, 0, canvas2.width, canvas2.height);
canvas2.width=wid;
canvas2.height=hei;
//canvas.width=wid;
//canvas.height=hei;
ctx2.drawImage(canvas,0,0,wid,hei,0, 0, wid,hei); 
    //ajuster la taille du canvas
    //canvas.width = wid;
    //canvas.height = hei;
    //canvas2.width=wid;
//canvas2.height=hei*2;
//ctx2.drawImage(canvas,0,0,wid,hei,0, 0, wid,hei); 
//conversion
var dataURL=canvas2.toDataURL();
xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    //faire des choses
                    fuckyou=(this.responseText);
                    fuckyou2=fuckyou.split("fuckyou");
                    fuckyou3=fuckyou2[1];//src
                    //alert(fuckyou3);
                }
                  };
                  //actualiser2 actualise les boites de convo une par une sans toucher textbox
                  connex="p1propicajax.php";
                  var json_upload = "json_name=" + JSON.stringify({imgBase64:dataURL,uc:courriel});

                  xhttp.open("POST",connex);
                  xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhttp.send(json_upload); 



//envoi par ajax conotumadre viva la republica de chile
//reset
window.canvasdownx="";
window.canvasdownx2="";
window.canvasdowny="";
window.canvasdowny2="";

//changer la photo de profile esti
var propicx=document.getElementById('propiccourant');
//alert(propicx.src);
propicx.src=fuckyou3;
//alert(propicx.src);
location.reload();
}

window.addEventListener("load",function(){
    window.canvasdownx="";
    window.canvasdowny="";
    window.canvasdownx1="";
    window.canvasdowny1="";
    //alert("xhdd");
    //alert("dd");
    var canvas=document.getElementsByTagName('canvas');
    if (canvas.length!=0){
        //alert("fuck");
        //get the img
        //var imgsrc=document.getElementById("srcpropic").innerHTML;
        //this.alert(imgsrc);
        //const ctx = canvas.getContext('2d');
        //const image = new Image();
        //image.src = imgsrc;
        //ctx.drawImage(image, 0, 0, 104, 124, 0, 0, 87, 104);
    }
})

function editernom(el){
//informacion de usuario cono de tu madre chingada en el quinto cono a tomar por el culo
//fuck u you
var courriel=elementusertoken=document.getElementsByTagName('nav')[0].id;
//alert("dd");
    if (el.innerHTML=="Edit"){
    var ele=document.getElementById('nompro');
    //rendre la boite editable
    ele.readOnly=false;
    //mettre un placeholder
    ele.placeholder="Username should be more than 5 characters long.";
    ele.style.backgroundColor="white";
    ele.focus();
    //changer le couleur
    //changebgcl(ele.id);
    //ajouter un bouton pour soumettre la merde
    //<i class="fas fa-check"></i>
    el.classList.remove('fa-edit');
    el.classList.add('fa-check');
    el.innerHTML="Confirm";
    } else {
        //prendre l info
        //alert("d");
        var ele=document.getElementById('nompro');
        entrada=ele.value;
        //alert(entrada);
        //valider
        test=0;
        if (entrada.match("^[A-​Za-z0-9]+$") && entrada.length>=5){
            test=1;
        }


        //alert(test);
        //ajax pour modifier si valide
        if (test==1){
xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        //faire des choses
        //alert(this.responseText);
    }
      };
      //actualiser2 actualise les boites de convo une par une sans toucher textbox
      connex="p1promod.php";
      var json_upload = "json_name=" + JSON.stringify({uc:courriel,ent:entrada,tipo:0});

      xhttp.open("POST",connex);
      xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhttp.send(json_upload); 
    }
        //change la boite en lecture seul et le bouton d editer
        //modifier la valeur le placeholder
        ele.readOnly=true;
            ele.placeholder="";
            ele.style.backgroundColor="grey";
            el.classList.add('fa-edit');
            el.classList.remove('fa-check');
            el.innerHTML="Edit";
        }
    
}


function editermdp(el){
    //alert("fuck");
    var courriel=elementusertoken=document.getElementsByTagName('nav')[0].id;
//alert("dd");
    if (el.innerHTML=="Edit"){
    var ele=document.getElementById('mdppro');
    var ele2=document.getElementById('mdppro2');
    //rendre la boite editable
    ele.readOnly=false;
    ele2.readOnly=false;
    //mettre un placeholder
    //ele.placeholder="Username should be more than 5 characters long.";
    ele.style.backgroundColor="white";
    ele2.style.backgroundColor="white";
    ele.focus();
    //changer le couleur
    //changebgcl(ele.id);
    //ajouter un bouton pour soumettre la merde
    //<i class="fas fa-check"></i>
    el.classList.remove('fa-edit');
    el.classList.add('fa-check');
    el.innerHTML="Confirm";
    } else {
        //prendre l info
        //alert("d");
        var ele=document.getElementById('mdppro');
    var ele2=document.getElementById('mdppro2');
       var  entrada=ele.value;
        var entrada2=ele2.value
        //alert(entrada);
        //valider
        $test=0
        if (entrada.match("^[A-​Za-z0-9]+$")!=null&&entrada.match("[A-Z]")!=null&&entrada.match("[a-z]")!=null&&entrada.match("[0-9]")!=null&& entrada.length>=8 && entrada==entrada2){
            test=1;
        }


        //alert(test);
        //ajax pour modifier si valide
        if (test==0){ alert("Please enter the password again.");} else {
xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        //faire des choses
        //alert(this.responseText);
    }
      };
      //actualiser2 actualise les boites de convo une par une sans toucher textbox
      connex="p1promod.php";
      var json_upload = "json_name=" + JSON.stringify({uc:courriel,ent:entrada,tipo:1});

      xhttp.open("POST",connex);
      xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhttp.send(json_upload); 
    }
        //change la boite en lecture seul et le bouton d editer
        //modifier la valeur le placeholder
        ele.readOnly=true;
        ele2.readOnly=true;
            //ele.placeholder="";
            ele.style.backgroundColor="grey";
            ele2.style.backgroundColor="grey";
            el.classList.add('fa-edit');
            el.classList.remove('fa-check');
            el.innerHTML="Edit";
        }
}

function editersx(el){
    //informacion de usuario cono de tu madre chingada en el quinto cono a tomar por el culo
    //fuck u you
    var courriel=elementusertoken=document.getElementsByTagName('nav')[0].id;
    //alert("dd");
        if (el.innerHTML=="Edit"){
        var ele=document.getElementById('sxpro');
        //rendre la boite editable
        ele.disabled=false;
        //mettre un placeholder
        //ele.placeholder="Username should be more than 5 characters long.";
        ele.style.backgroundColor="white";
        ele.focus();
        //changer le couleur
        //changebgcl(ele.id);
        //ajouter un bouton pour soumettre la merde
        //<i class="fas fa-check"></i>
        el.classList.remove('fa-edit');
        el.classList.add('fa-check');
        el.innerHTML="Confirm";
        } else {
            //prendre l info
            //alert("d");
            var ele=document.getElementById('sxpro');
            entrada=ele.value;
            //alert(entrada);
            //valider
            test=1;
            
    
    
            //alert(test);
            //ajax pour modifier si valide
            if (test==1){
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            //faire des choses
            alert(this.responseText);
        }
          };
          //actualiser2 actualise les boites de convo une par une sans toucher textbox
          connex="p1promod.php";
          var json_upload = "json_name=" + JSON.stringify({uc:courriel,ent:entrada,tipo:2});
    
          xhttp.open("POST",connex);
          xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhttp.send(json_upload); 
        }
            //change la boite en lecture seul et le bouton d editer
            //modifier la valeur le placeholder
            ele.disabled=true;
                //ele.placeholder="";
                ele.style.backgroundColor="grey";
                el.classList.add('fa-edit');
                el.classList.remove('fa-check');
                el.innerHTML="Edit";
            }
        
    }


function editernais(el){
    //informacion de usuario cono de tu madre chingada en el quinto cono a tomar por el culo
    //fuck u you
    var courriel=elementusertoken=document.getElementsByTagName('nav')[0].id;
    var ele1=document.getElementById('yearpro');
    var ele2=document.getElementById('monthpro');
    var ele3=document.getElementById('daypro');
    //alert("dd");
        if (el.innerHTML=="Edit"){
        //rendre la boite editable
        ele1.readOnly=false;
        ele2.readOnly=false;
        ele3.readOnly=false;
        //mettre un placeholder
        ele1.placeholder="4 digits";
        ele2.placeholder="2 digits";
        ele3.placeholder="2 digits";
        ele1.style.backgroundColor="white";
        ele2.style.backgroundColor="white";
        ele3.style.backgroundColor="white";
        ele1.focus();
        //changer le couleur
        //changebgcl(ele.id);
        //ajouter un bouton pour soumettre la merde
        //<i class="fas fa-check"></i>
        el.classList.remove('fa-edit');
        el.classList.add('fa-check');
        el.innerHTML="Confirm";
        } else {
            //prendre l info
            //alert("d");
            entrada1=ele1.value;
            entrada2=ele2.value;
            entrada3=ele3.value;
            //alert(entrada);
            //valider
            test=0;
            if (entrada1.match("^[1-9][0-9][0-9][0-9]$")!=null && entrada3.match("^(([0][1-9])|([1-2][0-9])|([3][0-1]))$")!=null&& entrada2.match("^(([0][1-9])|([1][1-2]))$")!=null){
                test=1;
            }
            entrada=entrada1+"-"+entrada2+"-"+entrada3;
    
            //alert(test);
            //ajax pour modifier si valide
            if (test==1){
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            //faire des choses
            //alert(this.responseText);
        }
          };
          //actualiser2 actualise les boites de convo une par une sans toucher textbox
          connex="p1promod.php";
          var json_upload = "json_name=" + JSON.stringify({uc:courriel,ent:entrada,tipo:3});
    
          xhttp.open("POST",connex);
          xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhttp.send(json_upload); 
        }
            //change la boite en lecture seul et le bouton d editer
            //modifier la valeur le placeholder
            ele1.readOnly=true;
            ele2.readOnly=true;
            ele3.readOnly=true;
                
                ele1.style.backgroundColor="grey";
                ele2.style.backgroundColor="grey";
                ele3.style.backgroundColor="grey";
                el.classList.add('fa-edit');
                el.classList.remove('fa-check');
                el.innerHTML="Edit";
            }
        
    }
    

function editernat(el){
    //informacion de usuario cono de tu madre chingada en el quinto cono a tomar por el culo
    //fuck u you
    var courriel=elementusertoken=document.getElementsByTagName('nav')[0].id;
    var ele1=document.getElementById('natpro');
    //alert("dd");
        if (el.innerHTML=="Edit"){
        //rendre la boite editable
        ele1.readOnly=false;
        //mettre un placeholder
        ele1.placeholder="";
        ele1.style.backgroundColor="white";
        ele1.focus();
        //changer le couleur
        //changebgcl(ele.id);
        //ajouter un bouton pour soumettre la merde
        //<i class="fas fa-check"></i>
        el.classList.remove('fa-edit');
        el.classList.add('fa-check');
        el.innerHTML="Confirm";
        } else {
            //prendre l info
            //alert("d");
            entrada1=ele1.value;
            //alert(entrada);
            //valider
            test=0;
            test=1;
            entrada=entrada1;
    
            //alert(test);
            //ajax pour modifier si valide
            if (test==1){
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            //faire des choses
            alert(this.responseText);
        }
          };
          //actualiser2 actualise les boites de convo une par une sans toucher textbox
          connex="p1promod.php";
          var json_upload = "json_name=" + JSON.stringify({uc:courriel,ent:entrada,tipo:4});
    
          xhttp.open("POST",connex);
          xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhttp.send(json_upload); 
        }
            //change la boite en lecture seul et le bouton d editer
            //modifier la valeur le placeholder
            ele1.readOnly=true;

                
                ele1.style.backgroundColor="grey";

                el.classList.add('fa-edit');
                el.classList.remove('fa-check');
                el.innerHTML="Edit";
            }
        
    }
    

    function editercel(el){
        //informacion de usuario cono de tu madre chingada en el quinto cono a tomar por el culo
        //fuck u you
        var courriel=elementusertoken=document.getElementsByTagName('nav')[0].id;
        var ele1=document.getElementById('celpro');
        //alert("dd");
            if (el.innerHTML=="Edit"){
            //rendre la boite editable
            ele1.readOnly=false;
            //mettre un placeholder
            ele1.placeholder="";
            ele1.style.backgroundColor="white";
            ele1.focus();
            //changer le couleur
            //changebgcl(ele.id);
            //ajouter un bouton pour soumettre la merde
            //<i class="fas fa-check"></i>
            el.classList.remove('fa-edit');
            el.classList.add('fa-check');
            el.innerHTML="Confirm";
            } else {
                //prendre l info
                //alert("d");
                entrada1=ele1.value;
                //alert(entrada);
                //valider
                test=0;
                if (entrada1.match("^[-()0-9]+$")!=null){
                    test=1;
                }
                entrada=entrada1;
        
                //alert(test);
                //ajax pour modifier si valide
                if (test==1){
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                //faire des choses
                alert(this.responseText);
            }
              };
              //actualiser2 actualise les boites de convo une par une sans toucher textbox
              connex="p1promod.php";
              var json_upload = "json_name=" + JSON.stringify({uc:courriel,ent:entrada,tipo:5});
        
              xhttp.open("POST",connex);
              xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhttp.send(json_upload); 
            }
                //change la boite en lecture seul et le bouton d editer
                //modifier la valeur le placeholder
                ele1.readOnly=true;
    
                    
                    ele1.style.backgroundColor="grey";
    
                    el.classList.add('fa-edit');
                    el.classList.remove('fa-check');
                    el.innerHTML="Edit";
                }
            
        }
        

        function editerprof(el){
            //informacion de usuario cono de tu madre chingada en el quinto cono a tomar por el culo
            //fuck u you
            var courriel=elementusertoken=document.getElementsByTagName('nav')[0].id;
            var ele1=document.getElementById('profpro');
            //alert("dd");
                if (el.innerHTML=="Edit"){
                //rendre la boite editable
                ele1.readOnly=false;
                //mettre un placeholder
                ele1.placeholder="";
                ele1.style.backgroundColor="white";
                ele1.focus();
                //changer le couleur
                //changebgcl(ele.id);
                //ajouter un bouton pour soumettre la merde
                //<i class="fas fa-check"></i>
                el.classList.remove('fa-edit');
                el.classList.add('fa-check');
                el.innerHTML="Confirm";
                } else {
                    //prendre l info
                    //alert("d");
                    entrada1=ele1.value;
                    //alert(entrada);
                    //valider
                    test=0;
                    //if (entrada1.match("^[-()0-9]+$")!=null){
                        test=1;
                    //}
                    entrada=entrada1;
            
                    //alert(test);
                    //ajax pour modifier si valide
                    if (test==1){
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    //faire des choses
                    alert(this.responseText);
                }
                  };
                  //actualiser2 actualise les boites de convo une par une sans toucher textbox
                  connex="p1promod.php";
                  var json_upload = "json_name=" + JSON.stringify({uc:courriel,ent:entrada,tipo:6});
            
                  xhttp.open("POST",connex);
                  xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhttp.send(json_upload); 
                }
                    //change la boite en lecture seul et le bouton d editer
                    //modifier la valeur le placeholder
                    ele1.readOnly=true;
        
                        
                        ele1.style.backgroundColor="grey";
        
                        el.classList.add('fa-edit');
                        el.classList.remove('fa-check');
                        el.innerHTML="Edit";
                    }
                
            }
            
    
            function editerwei(el){
                //informacion de usuario cono de tu madre chingada en el quinto cono a tomar por el culo
                //fuck u you
                var courriel=elementusertoken=document.getElementsByTagName('nav')[0].id;
                var ele1=document.getElementById('weipro');
                var ele2=document.getElementById('weiupro');
                
                //alert("dd");
                    if (el.innerHTML=="Edit"){
                    //rendre la boite editable
                    ele1.readOnly=false;
                    ele2.disabled=false;
                    //mettre un placeholder
                    ele1.placeholder="Numeric";
                    ele1.style.backgroundColor="white";
                    ele2.style.backgroundColor="white";
                    ele1.focus();
                    //changer le couleur
                    //changebgcl(ele.id);
                    //ajouter un bouton pour soumettre la merde
                    //<i class="fas fa-check"></i>
                    el.classList.remove('fa-edit');
                    el.classList.add('fa-check');
                    el.innerHTML="Confirm";
                    } else {
                        //prendre l info
                        //alert("d");
                        entrada1=ele1.value;
                        entrada2=ele2.value;
                        //alert(entrada);
                        //valider
                        test=0;
                        if (entrada1.match("^[0-9.,]+$")!=null){
                            test=1;
                            entrada=entrada1+"sep"+entrada2;
                        }
                        
                
                        //alert(test);
                        //ajax pour modifier si valide
                        if (test==1){
                xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        //faire des choses
                        alert(this.responseText);
                    }
                      };
                      //actualiser2 actualise les boites de convo une par une sans toucher textbox
                      connex="p1promod.php";
                      var json_upload = "json_name=" + JSON.stringify({uc:courriel,ent:entrada,tipo:7});
                
                      xhttp.open("POST",connex);
                      xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                    xhttp.send(json_upload); 
                    }
                        //change la boite en lecture seul et le bouton d editer
                        //modifier la valeur le placeholder
                        ele1.readOnly=true;
                        ele2.disabled=true;
            
                            
                            ele1.style.backgroundColor="grey";
                            ele2.style.backgroundColor="grey";
                            el.classList.add('fa-edit');
                            el.classList.remove('fa-check');
                            el.innerHTML="Edit";
                        }
                    
                }
                
        
                function editerhei(el){
                    //informacion de usuario cono de tu madre chingada en el quinto cono a tomar por el culo
                    //fuck u you
                    var courriel=elementusertoken=document.getElementsByTagName('nav')[0].id;
                    var ele1=document.getElementById('heipro');
                    var ele2=document.getElementById('heiupro');
                    
                    //alert("dd");
                        if (el.innerHTML=="Edit"){
                        //rendre la boite editable
                        ele1.readOnly=false;
                        ele2.disabled=false;
                        //mettre un placeholder
                        ele1.placeholder="Numeric";
                        ele1.style.backgroundColor="white";
                        ele2.style.backgroundColor="white";
                        ele1.focus();
                        //changer le couleur
                        //changebgcl(ele.id);
                        //ajouter un bouton pour soumettre la merde
                        //<i class="fas fa-check"></i>
                        el.classList.remove('fa-edit');
                        el.classList.add('fa-check');
                        el.innerHTML="Confirm";
                        } else {
                            //prendre l info
                            //alert("d");
                            entrada1=ele1.value;
                            entrada2=ele2.value;
                            //alert(entrada);
                            //valider
                            test=0;
                            if (entrada1.match("^[0-9.,]+$")!=null){
                                test=1;
                                entrada=entrada1+"sep"+entrada2;
                            }
                            
                    
                            //alert(test);
                            //ajax pour modifier si valide
                            if (test==1){
                    xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            //faire des choses
                            alert(this.responseText);
                        }
                          };
                          //actualiser2 actualise les boites de convo une par une sans toucher textbox
                          connex="p1promod.php";
                          var json_upload = "json_name=" + JSON.stringify({uc:courriel,ent:entrada,tipo:8});
                    
                          xhttp.open("POST",connex);
                          xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                        xhttp.send(json_upload); 
                        }
                            //change la boite en lecture seul et le bouton d editer
                            //modifier la valeur le placeholder
                            ele1.readOnly=true;
                            ele2.disabled=true;
                
                                
                                ele1.style.backgroundColor="grey";
                                ele2.style.backgroundColor="grey";
                                el.classList.add('fa-edit');
                                el.classList.remove('fa-check');
                                el.innerHTML="Edit";
                            }
                        
                    }

function confirmertoutpro(el) {
//alert("fuck");
var courriel=elementusertoken=document.getElementsByTagName('nav')[0].id;
var ele1=document.getElementById('nompro');
var ele2=document.getElementById('mdppro');
    var ele3=document.getElementById('mdppro2');
    var ele4=document.getElementById('sxpro');
    var ele5=document.getElementById('yearpro');
    var ele6=document.getElementById('monthpro');
    var ele7=document.getElementById('daypro');
    var ele8=document.getElementById('natpro');
    var ele9=document.getElementById('celpro');
    var ele10=document.getElementById('profpro');
    var ele11=document.getElementById('weipro');
    var ele12=document.getElementById('weiupro');
    var ele13=document.getElementById('heipro');
    var ele14=document.getElementById('heiupro');

//alert("dd");
if (el.innerHTML=="Edit All"){
    ele1.readOnly=false;
    ele2.readOnly=false;
    ele3.readOnly=false;
    ele4.disabled=false;
    ele5.readOnly=false;
    ele6.readOnly=false;
    ele7.readOnly=false;
    ele8.readOnly=false;
    ele9.readOnly=false;
    ele10.readOnly=false;
    ele11.readOnly=false;
    ele12.disabled=false;
    ele13.readOnly=false;
    ele14.disabled=false;
    //mettre un placeholder
    //ele1.placeholder="Numeric";
    ele1.style.backgroundColor="white";
    ele2.style.backgroundColor="white";
    ele3.style.backgroundColor="white";
    ele4.style.backgroundColor="white";
    ele5.style.backgroundColor="white";
    ele6.style.backgroundColor="white";
    ele7.style.backgroundColor="white";
    ele8.style.backgroundColor="white";
    ele9.style.backgroundColor="white";
    ele10.style.backgroundColor="white";
    ele11.style.backgroundColor="white";
    ele12.style.backgroundColor="white";
    ele13.style.backgroundColor="white";
    ele14.style.backgroundColor="white";
    ele1.focus();
    //changer le couleur
    //changebgcl(ele.id);
    //ajouter un bouton pour soumettre la merde
    //<i class="fas fa-check"></i>
    el.classList.remove('fa-edit');
    el.classList.add('fa-check');
    el.innerHTML="Confirm All";

} else {
    entrada1=ele1.value;
    entrada2=ele2.value;
    entrada3=ele3.value;
    entrada4=ele4.value;
    entrada5=ele5.value;
    entrada6=ele6.value;
    entrada7=ele7.value;
    entrada8=ele8.value;
    entrada9=ele9.value;
    entrada10=ele10.value;
    entrada11=ele11.value;
    entrada12=ele12.value;
    entrada13=ele13.value;
    entrada14=ele14.value;
    //alert(entrada);
    //valider
    test1=0;
    test2=0;
    test3=0;
    test4=0;
    test5=0;
    test6=0;
    //nom mdp naiscel wei et hei
    if (entrada1.match("^[A-​Za-z0-9]+$")!=null && entrada1.length>=5){
        test1=1;
    }
    if (entrada2.match("^[A-​Za-z0-9]+$")!=null&&entrada2.match("[A-Z]")!=null&&entrada2.match("[a-z]")!=null&&entrada2.match("[0-9]")!=null&& entrada2.length>=8 && entrada2==entrada3){
        test2=1;
    }
    if (entrada5.match("^[1-9][0-9][0-9][0-9]$")!=null && entrada7.match("^(([0][1-9])|([1-2][0-9])|([3][0-1]))$")!=null&& entrada6.match("^(([0][1-9])|([1][1-2]))$")!=null){
        test3=1;
    }
    if (entrada9.match("^[-()0-9]+$")!=null){
        test4=1;
    }
    if (entrada11.match("^[0-9.,]+$")!=null){
        test5=1;
    }
    if (entrada13.match("^[0-9.,]+$")!=null){
        test6=1;
    }

    testtotal=test1*test2*test3*test4*test5*test6;
    //alert(test1);
    //alert(test2);
    //alert(test3);
    //alert(entrada5.match("^[1-9][0-9][0-9][0-9]$"));
    //alert(entrada6.match("^(([0][1-9])|([1-2][0-9])|([3][0-1]))$"));
    //alert(entrada7.match("^(([0][1-9])|([1][1-2]))$"));
    //alert(test4);
    //alert(test5);
    //alert(test6);
    //alert(testtotal);
    if (testtotal==1){
        //traitement
        naiss=entrada5+"-"+entrada6+"-"+entrada7;


        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                //faire des choses
                //alert(this.responseText);
                alert("The change has been applied.");
                        }
              };
              //actualiser2 actualise les boites de convo une par une sans toucher textbox
              connex="p1promodtout.php";
              var json_upload = "json_name=" + JSON.stringify({uc:courriel,nom:entrada1,mdp:entrada2,sexe:entrada4,nais:naiss,nationalite:entrada8,cel:entrada9,prof:entrada10,poids:entrada11,poidsu:entrada12,taille:entrada13,tailleu:entrada14});
        
              xhttp.open("POST",connex);
              xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhttp.send(json_upload); 
            } else {
                alert("Please make sure that the information that you have entered is correct.");
            }

            ele1.readOnly=true;
            ele2.readOnly=true;
            ele3.readOnly=true;
            ele4.disabled=true;
            ele5.readOnly=true;
            ele6.readOnly=true;
            ele7.readOnly=true;
            ele8.readOnly=true;
            ele9.readOnly=true;
            ele10.readOnly=true;
            ele11.readOnly=true;
            ele12.disabled=true;
            ele13.readOnly=true;
            ele14.disabled=true;

                
                ele1.style.backgroundColor="grey";
                ele2.style.backgroundColor="grey";
                ele3.style.backgroundColor="grey";
                ele4.style.backgroundColor="grey";
                ele5.style.backgroundColor="grey";
                ele6.style.backgroundColor="grey";
                ele7.style.backgroundColor="grey";
                ele8.style.backgroundColor="grey";
                ele9.style.backgroundColor="grey";
                ele10.style.backgroundColor="grey";
                ele11.style.backgroundColor="grey";
                ele12.style.backgroundColor="grey";
                ele13.style.backgroundColor="grey";
                ele14.style.backgroundColor="grey";
                el.classList.add('fa-edit');
                el.classList.remove('fa-check');
                el.innerHTML="Edit All";
}         
}          
                    
            