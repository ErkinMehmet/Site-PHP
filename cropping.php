<html>
<header>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="jquery.min.js"></script>
<script src="jquery.Jcrop.min.js"></script>
</header>

<body>

<?php
if (! empty($_POST["upload"])) {
    //print_r("uploaded");
    //print_r($_FILES);
    if (is_uploaded_file($_FILES['userImage']['tmp_name'])) {
        $targetPath = "drapeaux/" . $_FILES['userImage']['name'];
        if (move_uploaded_file($_FILES['userImage']['tmp_name'], $targetPath)) {
            $uploadedImagePath = $targetPath;
        }
    }
    //$imagePath=$targetPath.$_FILES['userImage']['name'];
    //print($imagePath);
} else {
    print_r('not uploaded');
}

?>

<div class="bgColor">
    <form id="uploadForm" action="" method="post"
        enctype="multipart/form-data">

        <div id="uploadFormLayer">
            <input name="userImage" id="userImage" type="file"
                class="inputFile" accept="image/*"><br> <input type="submit"
                name="upload" value="Submit" class="btnSubmit">

        </div>
    </form>
</div>
<div>
    <?php echo "<img src=\"".$targetPath."\" id=\"cropbox\" class=\"img\" />";
    ?>
<br/>
</div>
<div id="btn">
    <input type='button' id="crop" value='CROP'>
</div>
<div>
<form>
    <img src="#" id="cropped_img" style="display: none;">
</form>
</div>

<script type="text/javascript">
$(document).ready(function(){
    //alert("Hello! I am an alert box!!");
    var size;
    $('#cropbox').Jcrop({
      aspectRatio: 1,
      onSelect: function(c){
       size = {x:c.x,y:c.y,w:c.w,h:c.h};
       $("#crop").css("visibility", "visible");     
      }
    });
 
    $("#crop").click(function(){
        var img = $("#cropbox").attr('src');
        $("#cropped_img").show();
        $("#cropped_img").attr('src','image-crop.php?x='+size.x+'&y='+size.y+'&w='+size.w+'&h='+size.h+'&img='+img);
    });
});
</script>
</body>
</html>