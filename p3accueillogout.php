<?php
session_start();
$_SESSION=array();
session_destroy();
header("relocation:p3.php");
exit;

?>