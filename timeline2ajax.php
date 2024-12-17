
<?php
include("conexion.php");
//print_r($_GET);
//info
$fecha=isset($_GET['fecha'])?$_GET['fecha']:date('Y-m-d');
//$hoy="'".date('Y')."-".date('m')."-".date('d')."'";
$quer="select * from p1rendezvous WHERE dia='".$fecha."' ORDER BY dia,debuthm ASC";
//print_r($quer);
$commentaires=$bdd->query($quer);
$counter=0;
while ($commentaire=$commentaires->fetch())
{
    $counter+=1;
    //prendre les info
    $id=$commentaire['id'];
    $titre=$commentaire['tire'];
    $debuthm=$commentaire['debuthm'];
    $finhm=$commentaire['finhm'];
    $dia=$commentaire['dia'];
    $msg=$commentaire['msg'];
    $email=$commentaire['email'];
    $nom=$commentaire['nom'];
    $statut=$commentaire['statut'];
    $cell=$commentaire['cell'];
    if ($titre==""){$titre=$msg;}
    if ($statut==0){
        $statut2="Not completed";
    } else {
        $statut="Completed";
    }

    //formatter
    echo "<div class=\"cd-timeline-block\"><div class=\"cd-timeline-img cd-picture\"></div><div class=\"cd-timeline-content\">";
    echo "<h2>$dia</h2><div class=\"timeline-content-info\"><span class=\"timeline-content-info-title\"><i class=\"fa fa-certificate\" aria-hidden=\"true\"></i>";
    echo "From: ".$debuthm." To: ".$finhm."</span></div><p>".$titre."</p><p>Status: $statut2</p></div> </div> ";
    //echo $commentaire['debuthm']."<br/>";
}
?>


        
