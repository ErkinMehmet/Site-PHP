<?php 
try{
   //$bdd = new PDO('mysql:host=localhost;port=8889;dbname=fernand1_test;charset=utf8', 'fernand1_1', 'Fernando888');
   
   //$bdd = new PDO('mysql:host=54.39.193.189;dbname=fernand1_test;charset=utf8', 'fernand1_1', 'Fernando888');
   $bdd = new PDO('mysql:host=localhost;port=3306;dbname=test1;charset=utf8', 'root', 'Fqm123!');
}
catch(Exception $e)
{
 die('Erreur : '.$e->getMessage());
}
?>