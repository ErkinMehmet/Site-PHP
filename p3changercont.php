<?php
//les info par post
$id=isset($_POST['id'])?$_POST['id']:'';
$mdp=isset($_POST['mdp'])?$_POST['mdp']:'';
$mdp2=isset($_POST['mdp2'])?$_POST['mdp2']:'';

if ($mdp<>$mdp2) {
    ?>
<div class="alert alert-warning alert-dismissible">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Failed!</strong> Two passwords do not match.
</div>
 <?php   
} else {
?>
<div class="alert alert-success alert-dismissible">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Success!</strong> Indicates a successful or positive action.
</div>

<?php
    include('p3changermdp.php?id='.$id);
}
?>