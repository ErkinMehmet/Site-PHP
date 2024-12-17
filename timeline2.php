<html>
<head>
<title>Pays de Licorne</title>
<link rel="stylesheet" type="text/css" href="timeline2.css">
<meta charset="UTF-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lettering.js/0.6.1/jquery.lettering.min.js"></script>
</head>

<body>

<div id="cd-timeline2" class="cd-container2" style="display:none;padding:40px;">orign
</div>
<section id="cd-timeline" class="cd-container">

<?php
$hoy="'".date('Y')."-".date('m')."-".date('d')."'";
$quer="select * from p1rendezvous WHERE dia>=".$hoy." ORDER BY dia,debuthm ASC LIMIT 6";
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


        
	</section> <!-- cd-timeline -->



</body>
</html>