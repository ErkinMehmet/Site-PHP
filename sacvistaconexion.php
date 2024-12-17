<?php
$uri_parts = explode('?', $_SERVER['REQUEST_URI'], 2);
$urirt= 'http://' . $_SERVER['HTTP_HOST'] . $uri_parts[0];
?>
<div class="formulaire">

  <form method="post" action="<?php echo $urirt;?>">

        <input type="text" name="username" placeholder="Correo" required>
        <input type="password" name="password" placeholder="Contraseña" required>
        <input type="submit" value="Conectar">

  </form>

</div>