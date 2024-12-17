
  <div class="chatbox chatbox-min" id="calis<?php echo$u2gid;?>34abdagh">
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
        ?>"/></a> 
      </div>
      <div class="chat-partner-name">
        <span class="status online"></span>
        <a target="_blank" href="#"><?php echo $u2nom;?></a>
      </div>
      <div class="chatbox-icons">
        <a href="javascript:void(0);"><i class="fa fa-plus" onclick="toggleplusmoins(this)"></i></a>
        <a href="javascript:void(0);"><i class="fa fa-close" onclick="farmatayeule(this)"></i></a>       
      </div>      
    </div>
    <div class="chat-messages" style="color:black;">
<?php
$recid=$u2gid;
//getinfo uid et nom de l autre fichier
//print_r($uid);
$quer1="select * from p1usuarios where id=$u2gid";
//print_r($quergg);
$comms1=$bdd->query($quer1);
$comm1=$comms1->fetch();
$u2nom=$comm1['nom'];
$u2userid=$comm1['userid'];
//hidden info
//normalement il faut chercher les info de l autre personne
$quer="select * from (select * from p1chathist where (senid=$senid and recid=$recid) or (senid=$recid and recid=$senid) order by dt desc limit 15) as selected order by dt asc";
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
        echo "<div class='message-box-holder'><div class='message-sender'>$u2nom</div><div class='message-box message-partner'>$xmsg</div></div>";
    }
}
//done while pour tous les messages
?>
    </div>
    <div class="chat-input-holder">
      <textarea class="chat-input"></textarea>
      <button class="message-send" onclick="chatsendbtn(this)">Send</button>
    </div>
    <div class="attachment-panel">
      <a href="#" class="fa fa-thumbs-up"></a>
      <a href="#" class="fa fa-camera"></a>
      <a href="#" class="fa fa-video-camera"></a>
      <a href="#" class="fa fa-image"></a>
      <a href="#" color="grey" class="fa fa-paperclip" onclick="screenshottest()"></a>
      <a href="#" class="fa fa-link"></a>
      <a href="#" class="fa fa-trash-o"></a>
      <a href="#" class="fa fa-search"></a>
    </div>
  </div>