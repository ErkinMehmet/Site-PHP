<?php
include('conexion.php');
//print_r($_POST);
$postdata=json_decode($_POST['json_name']);
//print_r($postdata->u);

$uc=property_exists($postdata, 'uc')?$postdata->uc:"";
$u2gc=property_exists($postdata, 'u2gc')?$postdata->u2gc:"";
//print_r($u2gc);
//get ids
$quer="select * from p1usuarios where courriel='$uc'";
$comms=$bdd->query($quer);
$comm=$comms->fetch();
$uid=$comm['id'];
$senid=$uid;
$quer="select * from p1usuarios where courriel='$u2gc'";
$comms=$bdd->query($quer);
$comm=$comms->fetch();
$u2gid=$comm['id'];
$u2nom=$comm['nom'];
$ahora=date('Y-m-d H:i:s');
//print_r($uid);
    //get the most recent
    $quer="select count(*) as exist from p1actif where uid=$uid and u2gid=$u2gid and chattype=0";
    //print_r($quer);
    $comms=$bdd->query($quer);
    $comm=$comms->fetch();
    $recentfid=$comm['exist'];
    //actualiser
    if ($recentfid==0){
        $quer="insert into p1actif(uid,u2gid,chattype) values($uid,$u2gid,0)";
        //print_r($quer);
        $bdd->query($quer);
        }
//
print_r($recentfid."separatorrr");
//now return chatbox
?>
<div class="chatbox" id="calis<?php echo$u2gid;?>34abdagh">
    <div class="chatbox-top" id="<?php echo$u2gid.date('Y-m-d H:i:s'); ?>">
      <div class="chatbox-avatar">
        <a target="_blank" href="#"><img src="<?php 
        $quer0="select photo from p1usuarios where id=$u2gid";
        $comms=$bdd->query($quer0);
        $comm=$comms->fetch();
        if ($comm['photo']!=""){
        echo $comm['photo'];
        } else {
          echo "5.jpg";
        }
        ?>" /></a> 
      </div>
      <div class="chat-partner-name">
        <span class="status online"></span>
        <a target="_blank" href="#"><?php echo $u2nom;?></a>
      </div>
      <div class="chatbox-icons">
        <a href="javascript:void(0);"><i class="fa fa-minus" onclick="toggleplusmoins(this)"></i></a>
        <a href="javascript:void(0);"><i class="fa fa-close" onclick="farmatayeule(this)"></i></a>       
      </div>      
    </div>
    <div class="chat-messages" style="color:black;">
<?php
$recid=$u2gid;
//getinfo uid et nom de l autre fichier
//print_r($uid);

//hidden info
//normalement il faut chercher les info de l autre personne
$quer="select * from p1chathist where (senid=$senid and recid=$recid) or (senid=$recid and recid=$senid) order by dt asc limit 15";
//print_r($quer);
$comms=$bdd->query($quer);
while($comm=$comms->fetch()){
    //print_r($comm);
    $xmsg=$comm['msg'];
    $xdt=$comm['dt'];
    $xsenid=$comm['senid'];
    $xrecid=$comm['recid'];
    $xlu=$comm['lu'];
    $xludt=$comm['ludt'];
    if ($xsenid==$senid) {
        echo "<div class='message-box-holder'><div class='message-box'>$xmsg</div></div>";
    } else {
        echo "<div class='message-box-holder'><div class='message-sender'>Chatbot Cristiano</div><div class='message-box message-partner'>$xmsg</div></div>";
    }
}
//done while pour tous les messages
?>
    </div>
    <div class="chat-input-holder">
      <textarea class="chat-input"></textarea>
      <input type="submit" value="Send" class="message-send" onclick="chatsendbtn(this)"/>
    </div>
    <div class="attachment-panel">
      <a href="#" class="fa fa-thumbs-up"></a>
      <a href="#" class="fa fa-camera"></a>
      <a href="#" class="fa fa-video-camera"></a>
      <a href="#" class="fa fa-image"></a>
      <a href="#" class="fa fa-paperclip"></a>
      <a href="#" class="fa fa-link"></a>
      <a href="#" class="fa fa-trash-o"></a>
      <a href="#" class="fa fa-search"></a>
    </div>
  </div>
