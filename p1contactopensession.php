<?php
include("conexion.php");
// Always start this first
//print_r($_SESSION);
//print_r("opensess");
if ( ! empty( $_POST ) ) {
    if ( isset( $_POST['username'] ) && isset( $_POST['password'] ) ) {
        // Getting submitted user data from database
        ///$con = new mysqli($db_host, $db_user, $db_pass, $db_name);
        //$stmt = $con->prepare("SELECT * FROM users WHERE username = ?");
        //$stmt->bind_param('s', $_POST['username']);
        //$stmt->execute();
        //$result = $stmt->get_result();
    	//$user = $result->fetch_object();
        $nom=$_POST['username'];
        $mdp=$_POST['password'];
        $userid=$_POST['userid'];    
        $quer="select * from p1usuarios where courriel='$nom'";
        //print_r($quer);
        $comms=$bdd->query($quer);
        $mdpcorr="";
        while ($comm=$comms->fetch()){
            $mdpcorr=$comm['mdp'];
            $userid=$comm['userid'];
            //print_r($comm);
        }    

    	// Verify user password and set $_SESSION
    	if ( password_verify( $mdp, $mdpcorr ) ) {
            //session_register('user_id');
            $_SESSION['user_id'] = $userid;
            $_SESSION['fuckyou'] = $userid;
            //echo "succ";
    	} elseif ($mdpcorr==""){
            ?>
            <div class="alert alert-warning alert-dismissible fade show">
    <strong>Warning!</strong><br/>The username does not exist.
    <button type="button" class="close" data-dismiss="alert">&times;</button>
</div>
            <?php
        } else {
            //msg erreur
            ?>
<div class="alert alert-warning alert-dismissible fade show">
    <strong>Warning!</strong><br/>The username and password do not match.
    <button type="button" class="close" data-dismiss="alert">&times;</button>
</div>
            <?php
        }
    }
}
?>