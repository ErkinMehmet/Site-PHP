<?php include('p3header.php'); ?>
<a class="active" href="p3inscription.php">Subscription</a>
<a href="p3.php">Log In</a>
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
    <h2>Sign up your UniGymnacio account</h2>
<?php include('conexion.php'); ?>
<form action="p3inscriptioncontroleur.php" method="post">
<label for="nom">Username:</label>
<input type="text" name="nom"/>
<label for="email">Email:</label>
<input type="text" name="email"/>
<label for="mdp">Password:</label>
<input type="password" name="mdp"/>
<label for="mdp2">Confirm your Password:</label>
<input type="password" name="mdp2"/>


<input type="submit"/>
</form>







</div>


<div class="droite">

</div>

</div>
</div>


<?php include('p3footer.php'); ?>