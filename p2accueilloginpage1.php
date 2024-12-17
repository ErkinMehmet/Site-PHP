<?php
//online
$quer="update accounts set online=1 where id=".$aid;
$bdd->query($quer);
?>

<div class="row" style="padding:30px;">
<div class="col-8">
<h4>Search for your friend here:</h4>
<div id="friendsearch">
<br/>
    <div id="searchelement" class="form-group row">
    <label for="friendsearch col-2 control-label">Username: </label>
    <div class="col-9">
    <input type="text" name="friendsearch form-control" id="friendsearchinput">
    <button type="button" onclick="p2findf()">Search</button>
    <input type="hidden" id="tabarnak" value="<?php echo $aid; ?>">
</div>
    </div>
    <div class="searchresults" class="btn btn-primary" id="searchresults" class="row">
hkhk
    </div>

</div>
<hr/>
<div class="row" id="friendlist">

</div>
<hr/>
<div class="row" id="messagelist">
</div>






</div>











<div class="col-4">
</div>
</div>

