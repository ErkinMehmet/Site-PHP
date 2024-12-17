<?php
include("conexion.php");
print_r($_GET);
//p1-p4,p5
//persona fecha hora fuerza compte
//a pour id
//b pour qtn

$persona=$_GET['p1'];
//$fecha=$_GET['p2'];
$hora=$_GET['p3'];
$fuerza=$_GET['p4'];
$compte=$_GET['p5'];

$qtns=array();
$ids=array();


for ($i=0;$i<$compte;$i++) {
    $qtns[$i]=$_GET['b'.$i];
    $ids[$i]=$_GET['a'.$i];
}

print_r($qtns);

//determiner le status
$estado=0;

//autres info pour periodique
$type=$_GET['p6'];
$debut=$_GET['pp1'];
$fin=$_GET['pp2'];
//1 quoitidien 2 hebdom 3 mensuel
if ($type==2) {
$j1=$_GET['ppp1'];
$j2=$_GET['ppp2'];
$j3=$_GET['ppp3'];
$j4=$_GET['ppp4'];
$j5=$_GET['ppp5'];
$j6=$_GET['ppp6'];
$j7=$_GET['ppp7'];
} 

if ($type==3) {
    $jourmois=$_GET['ppp1'];
}



//mtn il faut sql pour intergrer les donnees
for ($i=0;$i<$compte;$i++){
//$quer="insert into planificados(perid,ejid,cant,dia,fuerza,hora,estado) values($persona,$ids[$i],$qtns[$i],'$fuerza','$hora',$estado)";
//$existe=$bdd->query($quer);

//sql dans le tableau periodique
if ($type==2) {
    $quer="insert into periodicos(perid,ejid,freq,inicio,fin,cantidad,dim,lun,mar,mer,jeu,ven,sam,hora)";
    $quer.=" values('$persona',$ids[$i],$type,'$debut','$fin',$qtns[$i],$j1,$j2,$j3,$j4,$j5,$j6,$j7,'$hora')";
    $quer.="";
} else {
    $quer="insert into periodicos(perid,ejid,freq,inicio,fin,cantidad,hora)";
    $quer.=" values('$persona',$ids[$i],$type,'$debut','$fin',$qtns[$i],'$hora')";
}
//echo $quer;
if ($qtns[$i]>0){
//desactiver pour le test
    $existe=$bdd->query($quer);


    //obtenir le periodicoid
    $quer="select * from periodicos order by id desc";
    $existe=$bdd->query($quer);
    $existe2=$existe->fetch();
    $periodicoid=$existe2['id'];

if (strtotime($fin)>=strtotime($debut)) {
    $dumfecha=$debut;
    //echo $dumfecha;
    while (strtotime($dumfecha) <= strtotime($fin)) {
        //echo "$date\n";
        $wkday=date("l",strtotime($dumfecha));
        $wkdayn=date("w",strtotime($dumfecha));
        $day=date("d",strtotime($dumfecha));


        //echo $wkday;
        //3 types de traitement
        $quer="";
        switch ($type){
            case 2:
            //semaine
                if ($j1==1&&$wkdayn==1) {
                    //dimanche
                    $quer="insert into planificados(perid,periodicoid,ejid,cant,dia,fuerza,hora,estado) values($persona,$periodicoid,$ids[$i],$qtns[$i],'$dumfecha','$fuerza','$hora',$estado)";
                }
                if ($j2==1&&$wkdayn==2) {
                    //dimanche
                    $quer="insert into planificados(perid,periodicoid,ejid,cant,dia,fuerza,hora,estado) values($persona,$periodicoid,$ids[$i],$qtns[$i],'$dumfecha','$fuerza','$hora',$estado)";
                }
                if ($j3==1&&$wkdayn==3) {
                    //dimanche
                    $quer="insert into planificados(perid,periodicoid,ejid,cant,dia,fuerza,hora,estado) values($persona,$periodicoid,$ids[$i],$qtns[$i],'$dumfecha','$fuerza','$hora',$estado)";
                }
                if ($j4==1&&$wkdayn==4) {
                    //dimanche
                    $quer="insert into planificados(perid,periodicoid,ejid,cant,dia,fuerza,hora,estado) values($persona,$periodicoid,$ids[$i],$qtns[$i],'$dumfecha','$fuerza','$hora',$estado)";
                }
                if ($j5=1&&$wkdayn==5) {
                    //dimanche
                    $quer="insert into planificados(perid,periodicoid,ejid,cant,dia,fuerza,hora,estado) values($persona,$periodicoid,$ids[$i],$qtns[$i],'$dumfecha','$fuerza','$hora',$estado)";
                }
                if ($j6=1&&$wkdayn==6) {
                    //dimanche
                    $quer="insert into planificados(perid,periodicoid,ejid,cant,dia,fuerza,hora,estado) values($persona,$periodicoid,$ids[$i],$qtns[$i],'$dumfecha','$fuerza','$hora',$estado)";
                }
                if ($j7==1&&$wkdayn==7) {
                    //dimanche
                    $quer="insert into planificados(perid,periodicoid,ejid,cant,dia,fuerza,hora,estado) values($persona,$periodicoid,$ids[$i],$qtns[$i],'$dumfecha','$fuerza','$hora',$estado)";
                }
            break;
            case 3:
            //par mois
            if ($jourmois==$day){
                $quer="insert into planificados(perid,periodicoid,ejid,cant,dia,fuerza,hora,estado) values($persona,$periodicoid,$ids[$i],$qtns[$i],'$dumfecha','$fuerza','$hora',$estado)";
                
            }
            break;

            default:
            //par jour
            $quer="insert into planificados(perid,periodicoid,ejid,cant,dia,fuerza,hora,estado) values($persona,$periodicoid,$ids[$i],$qtns[$i],'$dumfecha','$fuerza','$hora',$estado)";
        }
        if ($quer!="") {
            $existe=$bdd->query($quer);
            echo $quer;
        }
        $dumfecha = date ("Y-m-d", strtotime("+1 day", strtotime($dumfecha)));

    }
}

}
//echo $debut.$fin;
//echo $quer;
}


?>
