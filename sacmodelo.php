<?php

class Modelo {
    public function conexion()
    {
        session_start();
        //Valider les informations de connexion
        try{
            $bdd = new PDO('mysql:host=localhost;dbname=test1;charset=utf8', 'root', 'Fqm123!');
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }

    //validate password with md5
        if ( ! empty( $_POST ) ) {
            if ( isset( $_POST['username'] ) && isset( $_POST['password'] ) ) {
                //get the username and password by post
                $courriel=$_POST['username'];
                $mdp=$_POST['password'];
                $userid=$_POST['userid'];
                //first sql query to get the right password with the username so that we can validate    
                $quer="select * from sacsusuarios where courriel='$courriel'";
                $comms=$bdd->query($quer);
                $mdpcorr="";
                while ($comm=$comms->fetch()){
                    $mdpcorr=$comm['mdp'];
                    $userid=$comm['userid'];
                    $lastlogin=$comm['lastlogin'];
                }    
                // Verify user password
                if ( strcmp( md5($mdp), $mdpcorr )==0 ) {
                //set session variables
                    $_SESSION['user_id'] = $userid;
                    $_SESSION['lastlogin'] = $lastlogin;
                //update the lastlogin
                $now=date("Y-m-d h:i:s");
                $quer="update sacsusuarios set lastlogin='$now' where userid='$userid'";
                $bdd->query($quer);
                //if there are errors we show error messages
                } elseif ($mdpcorr==""){  
                    echo "<div><strong>Warning! The username does not exist.</strong></div>";
                } else {
                    echo "<div><strong>Warning! The username and password do not match.</strong></div>";
                }
            }
        }
        //get session variables
        $sessionid=$_SESSION['user_id'];
    }
}




