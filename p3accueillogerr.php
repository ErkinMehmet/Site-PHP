<?php include('p3header.php'); 
//commmencer la session
session_start();
echo $_SESSION['userid'];
exit();
?>
<a class="active" href="p3.php">Log In</a>
<a href="p3info.php">Info</a>
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
   
<?php include('conexion.php'); ?>






</div>


<div class="droite">

</div>

</div>
</div>


<?php include('p3footer.php'); ?>