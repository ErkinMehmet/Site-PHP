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
    <h2>Enter your email or username</h2>
<?php include('conexion.php'); ?>
<form action="p3oubliecont.php" method="post">
<label for="nom">Email or Username:</label>
<input type="text" name="nom"/>

<input type="submit"/>
</form>

</div>


<div class="droite">

</div>

</div>
</div>


<?php include('p3footer.php'); ?>