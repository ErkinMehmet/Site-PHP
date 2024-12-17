<?php
    $dataError=array();
    try {
            $dbh=new PDO('mysql:host=localhost;dbname=test1;charset:utf-8','root','root');
    } catch (PDOException $e) {
        $dataError["connexion"]="Erreur de connexion a la base de donnees.";
        require ("vueErreur.php");
        die();
    }
    $requete='SELECT * FROM users';
    $resultExec=$dbh->exec($requete);
    echo $resultExec;
    if ($resultExec==false) {
       		
        $dataError["requete"]="probleme de execution de la requete";
        require("vueErreur.php");
	
    } else {
      	
        require("vueConnexionPDO.php");
    }
    $resultExec=null;
    $dbh=null;
?>