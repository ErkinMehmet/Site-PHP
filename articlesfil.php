<?php

//print_r($_GET);
include('conexion.php');
//get valeurs
$flang=$_GET['lang'];
$fcat=$_GET['cat'];
$mc=$_GET['mc'];

if ($flang=="All"){
    $flang="";
}
if ($fcat=="All"){
    $fcat="";
}

$quer="select * from articulos";
//lang cat
if ($flang=="") {
	if ($fcat==""){
        $quer.="";
        if ($mc==""){
            $quer.="";
        } else {
            $quer.=" where titulo like \"%".$mc."%\"";
        }
	} else {
        $quer.=" where cat=".$fcat;
        if ($mc==""){
            $quer.="";
        } else {
            $quer.=" and titulo like \"%".$mc."%\"";
        }
    }
} else {
	$quer.=" where lang=".$flang;
	if ($fcat==""){
        $quer.="";
        if ($mc==""){
            $quer.="";
        } else {
            $quer.=" and titulo like \"%".$mc."%\"";
        }
	}	else {
        $quer.=" and cat".$fcat;
        if ($mc==""){
            $quer.="";
        } else {
            $quer.=" and titulo like \"%".$mc."%\"";
        }
	}
}




//print_r($quer);
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
<strong><a class="articuloenlace" href="<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?>?artnum=<?php echo $commentaire['id'];?>"> <?php echo $commentaire['titulo']; ?></a></strong> written on <label><?php echo $commentaire['tiempo']; ?></label> 
</p>
<p class="abstracto">
<?php echo $commentaire['abstracto']; ?>
</p>
</div>
<?php
}
?>
</div>
