<?php
include('conexion.php');
?>


<div class="comment" id="comment">
<div id="panel2"><h2>Articles</h2></div>
<div class="comcon">
<?php
$quer="select * from articulos";
$commentaires=$bdd->query($quer);

$counter=0;
while ($commentaire=$commentaires->fetch())
{
$counter+=1;

if ($counter % 2 ==0) {
	echo "<div class=\"comm commeven\">";
} else {
	echo "<div class=\"comm commodd\">";
}
?>

<p class="commti">
<strong><a class="articuloenlace" href="http://localhost:8888/avril/arti.php?artnum=<?php echo $commentaire['id'];?>"><?php echo $commentaire['titulo']; ?></a></strong> written on <label><?php echo $commentaire['tiempo']; ?></label> 
</p>
<p class="abstracto">
<?php echo $commentaire['abstracto']; ?>
</p>
</div>
<?php
}
?>
</div>
</div>
?>