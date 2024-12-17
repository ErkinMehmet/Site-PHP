<?php
include('conexion.php');
//print_r($_POST);
$postdata=json_decode($_POST['json_name']);
//print_r($postdata->u);

$uc=property_exists($postdata, 'uc')?$postdata->uc:"";
$u2gnom=property_exists($postdata, 'nom')?$postdata->nom:"";
$quer="select * from p1usuarios where courriel='$uc'";
$comms=$bdd->query($quer);
$comm=$comms->fetch();
$uid=$comm['id'];
$senid=$uid;
$quer="select * from p1chatgp where nom='$u2gnom'";
$comms=$bdd->query($quer);
$comm=$comms->fetch();
$gid=$comm['id'];
$gcat=$comm['cat'];
$gtaille=$comm['taille'];
$ahora=date('Y-m-d H:i:s');

$quer="select count(*) as exist from p1actif where uid=$uid and u2gid=$gid and chattype=1";
//print_r($quer);
$comms=$bdd->query($quer);
$comm=$comms->fetch();
$recentfid=$comm['exist'];
//actualiser
if ($recentfid==0){
    $quer="insert into p1actif(uid,u2gid,chattype) values($uid,$gid,1)";
    //print_r($quer);
    $bdd->query($quer);
    }
//
print_r($recentfid."separatorrr");
//now return chatbox
?>
<div class="chatbox group-chat chatbox-min" id="calis<?php echo$gid;?>34abdagh">
        <div class="chatbox-top" id="<?php echo$gid.date('Y-m-d H:i:s'); ?>">
        <div class="chatbox-avatar">
            <a target="_blank" href="#"><img src="6.jpg" /></a>
          </div>
    
          
          <div class="chat-group-name">
            <span class="status away"></span>
            <?php echo $u2gnom;?>
          </div>
          <div class="chatbox-icons">
            <label for="chkSettings"><i class="fa fa-gear"></i></label><input type="checkbox" id="chkSettings" />
            <div class="settings-popup">
              <ul>
                <li><a href="#">Group members</a></li>
                <li><a href="#">Add members</a></li>
                <li><a href="#">Delete members</a></li>
                <li><a href="#">Leave group</a></li>
              </ul>
            </div>
            <a href="javascript:void(0);"><i class="fa fa-plus" onclick="toggleplusmoins(this)"></i></a>
            <a href="javascript:void(0);"><i class="fa fa-close" onclick="farmatayeule(this)"></i></a>       
          </div>      
        </div>
        <div class="chat-messages" style="color:black;">
    <?php
    //chatbox-min
    //need to get msg
    $querg="select * from (select * from p1chatgphist where gid=$gid order by dt desc limit 15) as selected order by dt asc";
    //echo $querg;
    $commsg=$bdd->query($querg);
    while($commg=$commsg->fetch()){
        //print_r($comm);
        $xmsg=$commg['msg'];
        $xdt=$commg['dt'];
        $xsenid=$commg['senid'];
        $xlu=$commg['lu'];
        $xludt=$commg['ludt'];
        if ($xsenid==$senid) {
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
    //while pour tous les msg gp
}
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
      <a href="#" class="fa fa-paperclip"></a>
      <a href="#" class="fa fa-link"></a>
      <a href="#" class="fa fa-trash-o"></a>
      <a href="#" class="fa fa-search"></a>
    </div>
  </div>

  



