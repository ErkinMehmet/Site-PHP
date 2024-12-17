<?php
//print_r($_GET);
include('conexion.php');
//valider searchstr
$p=htmlspecialchars($_GET['p']);
$i=$_GET['i'];
$quer="select * from accounts where anom like '%$p%' and id<>".$i;
//echo $quer;
$existe=$bdd->query($quer);
?>
<div class="row">
<?php
while ($existe2=$existe->fetch()) {
    //info
    $image=$existe2['image'];
    $id=$existe2['id'];
    $uid=$existe2['uid'];
    $anom=$existe2['anom'];
    $online=$existe2['online'];
    $place=$existe2['place'];

    if ($image=='') {
        $image="drapeaux/VE.png";

    }
    ?>
    <div class="col-4">
    <div class="account row" style="padding:5px;cursor:pointer;" onclick="p2relocatechat(this)">
        <div class="accountimage col-5" style="border:5px solid black;">
            <?php echo "<img src=\"$image\">";?>
        </div>
        <div class="accountinfo col-7" style="display:inline-block;border:5px solid black;">
            <?php echo $anom;?>
            <?php echo $place;?>
            <?php echo "<input type=\"hidden\" class=\"hiddenid\" value=\"$id\">"?>
        </div>
    </div>
</div>
    <?php
}

?>
</div>