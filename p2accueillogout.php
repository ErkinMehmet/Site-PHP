<?php
session_start();
$_SESSION=array();
session_destroy();
header("relocation:p2.php");
exit;

?>