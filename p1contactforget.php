
<div class="chatbotlogin">
<div class="ctcontainer">

    <div class="row" style="padding:20px;color:black;">
<?php
include('conexion.php');
//verifer get
$paramclef=isset($_GET['param'])?$_GET['param']:"";
$envoie=isset($_GET['envoie'])?$_GET['envoie']:"";

if ($paramclef=="") {
  include('p1contactforgetemail.php');
} elseif($envoie==""){
  include("p1contactforgetemaillink.php");
} else {
  include("p1contactforgetemaillinkafter.php");
}
?>


</div>



</div>
</div>