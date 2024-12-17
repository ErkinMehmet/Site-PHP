<?php

include('conexion.php');
//print_r($_GET);
//err</h3>
$err1="<h3>The email is empty or is not valide.</h3>";
$err2="<h3>The format of start time is not correct.</h3>";
$err3="<h3>The format of end time is not correct.</h3>";
$err4="<h3>The end time should be after the start time and the duration should be within 3 hours.</h3>";
$err5="<h3>You have entered a date in the past.</h3>";
$err6="<h3>You have entered a time in the past.</h3>";
$err7="<h3>The message is empty or you have already sent the request.</h3>";
$err8="<h3>The period you have enter is not available.</h3>";

//obtenir les info
$t1=isset($_GET['t1'])?$_GET['t1']:"";
$t2=isset($_GET['t2'])?$_GET['t2']:"";
$t3=isset($_GET['t3'])?$_GET['t3']:"";
$t4=isset($_GET['t4'])?$_GET['t4']:"";
$t5=isset($_GET['t5'])?$_GET['t5']:"";
$t6=isset($_GET['t6'])?$_GET['t6']:"";
$dia=isset($_GET['p1'])?$_GET['p1']:"";
$nom=isset($_GET['p2'])?$_GET['p2']:"";
$titre=isset($_GET['p3'])?$_GET['p3']:"";
$cell=isset($_GET['p4'])?$_GET['p4']:"";
$email=isset($_GET['p5'])?$_GET['p5']:"";
$debuthm=isset($_GET['p6'])?$_GET['p6']:"";
$finhm=isset($_GET['p7'])?$_GET['p7']:"";
$msg=isset($_GET['p8'])?$_GET['p8']:"";


//valider 7 - message deja envoye
$quer="select * from p1rendezvous ORDER BY id LIMIT 1";
//print_r($quer);
$commentaires=$bdd->query($quer);
$counter=0;
while ($commentaire=$commentaires->fetch())
{
    //print_r($commentaire['visitor']);
    $derniermsg=$commentaire['msg'];
}
$test7=0;
if ($derniermsg!=$msg&&$msg!=""){$test7=1;}


//valider 8 la periode dispo
$test8=0;
$quer="select count(*) as checker from p1rendezvous WHERE dia='$dia' and debuthm>='$debuthm' and debuthm<='$finhm'";
//print_r($quer);
$commentaires=$bdd->query($quer);
$counter=0;
while ($commentaire=$commentaires->fetch())
{
    $counter=$counter+$commentaire['checker'];
}
$quer="select count(*) as checker from p1rendezvous WHERE dia='$dia' and finhm>='$debuthm' and finhm<='$finhm'";
//print_r($quer);
$commentaires=$bdd->query($quer);
$counter=0;
while ($commentaire=$commentaires->fetch())
{
    $counter=$counter+$commentaire['checker'];
}
if($counter==0){$test8=1;}
//print_r($test7);
//print_r("d");
//print_r($test8);
//msg err
$msgerr="";

//print_r($t2);
//print_r(gettype($t2));
//print_r($test2);
$test1=0;
$test2=0;
$test3=0;
$test4=0;
$test5=0;
$test6=0;
if ($t1=="true"){$test1=1;}
if ($t2=="true") {$test2=1;}
if ($t3=="true"){$test3=1;}
if ($t4=="true"){$test4=1;}
if ($t5=="true"){$test5=1;}
if ($t6=="true"){$test6=1;}

//print_r($test2);

//echo "test1test8";
//print_r($test8);
$testtotal=$test1+$test2+$test3+$test4+$test5+$test6+$test7+$test8;
//print_r($testtotal);
if ($testtotal!=8){
    //print_r("err");
    if ($test1==0){
        $msgerr=$msgerr.$err1."<br/>";
    }
    if ($test2==0){
        $msgerr=$msgerr.$err2."<br/>";
    }
    if ($test3==0){
        $msgerr=$msgerr.$err3."<br/>";
    }
    if ($test4==0){
       $msgerr=$msgerr.$err4."<br/>";
    }
    if ($test5==0){
        $msgerr=$msgerr.$err5."<br/>";
    }
    if ($test6==0){
        $msgerr=$msgerr.$err6."<br/>";
    }
    if ($test7==0){
        $msgerr=$msgerr.$err7."<br/>";
        //print_r($msgerr);
    }
    if ($test8==0){
        $msgerr=$msgerr.$err8."<br/>";
    }

}

$visitor=$_SERVER['REMOTE_ADDR'];


//remettre le compteur
$counter=0;
//print_r($msgerr);
//inserer si c est bon
$quer="insert into p1rendezvous(dia,nom,titre,cell,email,debuthm,finhm,msg,visitor,statut) values('$dia','$nom','$titre','$cell','$email','$debuthm','$finhm','$msg','$visitor',0)";
//print_r($quer);

if ($testtotal==8){
$bdd->query($quer);
}

//controler deux vues
if ($testtotal==8){
//vue succes
echo "<div class=\"alert alert-success\" role=\"alert\" style='width:100%;'><h2>Your request has been sent successfully.</h2></div>";
    } else {
        //vue echec
        echo "<div class=\"alert alert-danger\" role=\"alert\" style='width:100%;'><h2>Your request did not go through.</h2><br/>";
        echo $msgerr."</div><br/>";
    }


?>