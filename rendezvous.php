<?php include('p1header.php'); ?>
<a href="p1.php">Mon CV</a>
<a href="aspir.php">Services</a>
<a href="arti.php">Articles</a>
<a href="comm.php">Comments</a>
<a class="active" href="rendezvous.php?#">Rendez-vous</a><a href="p1contact.php">Contact</a>
<a href="oth.php">Others</a>

</div>
<?php include('conexion.php'); ?>
<!-- POUR COMM
<div class="content">
hello this is contenido
<div contentEditable="true" class="commentbox">ddfaf
</div>
</div>
-->
<div class="content">
<div class="ligne">

<div class="gauche30" style="padding:45px;">
<?php
include("calendar.php");
?>
</div>



<div class="droite70" style="border: 5px solid black;vertical-align:top;background-color:grey;">
<?php

include("timeline2.php");
?>

</div>

</div>
</div>


<?php include('p1footer.php'); ?>