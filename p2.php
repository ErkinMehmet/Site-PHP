<?php include('p2header.php'); ?>
<a class="active" href="p2.php">Profile</a>
<a href="p2friends.php">Friends</a>
<a href="p2chats.php">Chats</a>
<a href="p2oth.php">Others</a>
</div>

<!-- POUR COMM
<div class="content">
hello this is contenido
<div contentEditable="true" class="commentbox">ddfaf
</div>
</div>
-->
<div class="content">
<div class="ligne">

<div class="gauche">


</div>

<div class="centre">
<h2>Log In to your Lico Chat</h2>
<?php include('conexion.php'); ?>
<form action="p2accueil.php" method="post">
<label for="nom">Username or Email:</label>
<input type="text" name="nom"/>
<label for="mdp">Password:</label>
<input type="password" name="mdp"/>

<input type="submit"/>
</form>

<a href="p3inscription.php">Not signed up yet?</a><br/>
<a href="p3oublie.php">Forgot password?</a>

</div>


<div class="droite">

</div>

</div>
</div>


<?php include('p2footer.php'); ?>