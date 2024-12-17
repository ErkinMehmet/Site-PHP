<?php
include('conexion.php');
$postdata=json_decode($_POST['json_name']);
//print_r($postdata);
$lastupdate=property_exists($postdata, 'lastupdate')?$postdata->lastupdate:"";
$uid=property_exists($postdata, 'u')?$postdata->u:"";
$u2gid=property_exists($postdata, 'u2g')?$postdata->u2g:"";
$datatype=property_exists($postdata, 'chatte')?$postdata->chatte:"";
//print_r($datatype);
//construire chatbox
//getu2gnom


if ($datatype=="1") {
    //print_r($datatype."s");
    //gp
//chat
$quer="select * from (select * from p1chatgphist where gid=$u2gid and dt>'$lastupdate' order by dt desc) as selected order by dt asc";
//print_r($quer);
$comms=$bdd->query($quer);
while ($commg=$comms->fetch()){
    print_r($comm);
    $xmsg=$commg['msg'];
        $xdt=$commg['dt'];
        $xsenid=$commg['senid'];
        $xlu=$commg['lu'];
        $xludt=$commg['ludt'];
        if ($xsenid==$uid) {
    ?>

           <div class="message-box-holder">
            <div class="message-box">
    <?php echo $xmsg;?>
            </div>
          </div>

    <?php
        } else {
            //get sender info
            $quergg="select * from p1usuarios where id=$xsenid";
            //print_r($quergg);
            $commsgg=$bdd->query($quergg);
            $commgg=$commsgg->fetch();
            //print_r($commgg);
            $u2nomgg=$commgg['nom'];
            $u2useridgg=$commgg['userid'];
            //echo $u2nomgg;
    ?>
          <div class="message-box-holder">
            <div class="message-sender">
              <a href="#"><?php echo $u2nomgg;?></a>
             </div>
            <div class="message-box message-partner">
    <?php echo $xmsg;?>
            </div>
          </div>        
        <?php
//condition sender receiver gp
    }
}




} else {
    $quer1="select * from p1usuarios where id=$u2gid";
    //print_r($quergg);
    $comms1=$bdd->query($quer1);
    $comm1=$comms1->fetch();
    //print_r($commgg);
    $u2nom=$commgg['nom'];
    $u2userid=$commgg['userid'];

    //print_r($datatype."f");
    //chat
    $quer="select * from (select * from p1chathist where ((senid=$uid and recid=$u2gid) or (senid=$u2gid and recid=$uid)) and dt>='$lastupdate' order by dt desc) as selected order by dt asc";
    //print_r($quer);
    $comms=$bdd->query($quer);
    while ($comm=$comms->fetch()){
        //print_r($comm);
        $xmsg=$comm['msg'];
    $xdt=$comm['dt'];
    $xsenid=$comm['senid'];
    $xrecid=$comm['recid'];
    $xlu=$comm['lu'];
    $xludt=$comm['ludt'];
    if ($xsenid==$uid) {
        echo "<div class='message-box-holder'><div class='message-box'>$xmsg</div></div>";
    } else {
        echo "<div class='message-box-holder'><div class='message-sender'>$u2nom</div><div class='message-box message-partner'>$xmsg</div></div>";
    }
    }
    }


?>
     