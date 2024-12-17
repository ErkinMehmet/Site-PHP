<?php
//metodo get para alcazar la persona con quien hablar
$id=$_GET['id'];
//echo $aid.$id;
if ($id=='') {
//si no existe una persona con quien hablar
//aparece una lista de amigos para poder elegir uno

} elseif((preg_match('/[0-9]+/',$id))) {
//find aid - por que id es el numero de la cuanta general pero necesitan buscar la cuenta especifica para el char



?>
<input type="hidden" id="sender" value="<?php echo $aid;?>">
<input type="hidden" id="receiver" value="<?php echo $id;?>">

<div class="chatwindow">
<div class="title" style="background-color:#fff;text-align:center;width:100%;"><h4 style="width:100%;">Lico Chat</h4>
</div>

<form style="width:100%;text-align:center;margin-left:0px;">
<div class="form-group">
<textarea name="message" cols="90" rows="3" onfocus="typing()" onblur="nottyping()" id="p2inputbox" placeholder="What do you want to say?"></textarea>
</div>
<div style="padding-left:170px;padding-right:170px;">

<input type="hidden" id="fuck" name="fuck" value="<?php echo $aid;?>">
<input type="hidden" id="fuck2" name="fuck2" value="<?php echo $id;?>">
</div>
</form>
<button class="btn btn-primary btn-block" onclick="p2chatsend()">Send</button>
</div>

<div id="history">

</div>

<?php
}



?>