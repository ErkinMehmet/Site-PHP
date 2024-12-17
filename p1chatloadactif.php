<?php
$senid=$uid;
$querold="select * from p1actif where uid=$uid";
//print_r($quer);
$commsold=$bdd->query($querold);
while($commold=$commsold->fetch()){
    $datatype=$commold['chattype'];
    $u2gid=$commold['u2gid'];
    //u2gid datatype et uid ou senid
    //print_r($commold);
    //print_r($datatype);
    if ($datatype==0){
        //getinfo pour u2
        $quer="select * from p1usuarios where id=$u2gid";
        $comms=$bdd->query($quer);
        $comm=$comms->fetch();
        $u2nom=$comm['nom'];
        $u2userid=$comm['userid'];
        //les chats
        include('p1chatloadactif0.php');
        //include('p1chatloadactif0.php');
//if pour selectionner gp ou chat
    } elseif ($datatype==1) {
        //print_r($quer);
        //gp mtn
        //gp info
        $quer2="select * from p1chatgp where id=$u2gid";
        $comms2=$bdd->query($quer2);
        $comm2=$comms2->fetch();
        $gnom=$comm2['nom'];
        $gcat=$comm2['cat'];
        $gcat=$comm2['taille'];
        include('p1chatloadactif1.php');
        //include('p1chatloadactif1.php');
        ?>
<?php
    }
    //done doncition if gp ou chatdone gp
    
}
//while pour toutes les lignes dans p1actif


?>



    


      

