<?php
$pagina=13;
require('projectaheader.php');

?>

<h1>Énviame un mesaje en la caja en bajo</h1>
<form method="post" action="enviar.php">
  <p style="font-size:40px;">
    <label for="nombre" style:"font-size:40px;">
      Nombre: </label>
    <input name="nombre" type="text" id="nombre" size:50>
</input>
  </p>
    <label for="Correo" style:"font-size:40px;">
      Direción de Correo: </label>
    <input type="text" name="correo" id="correo" size:100>
</input>
  </p>
  <br/>
    <label for="sujeto" style:"font-size:40px;">
      Sujeto: </label>
    <input type="text" name="sujeto" id="sujeto" size:50>
</input>
  </p>
  <p style:"font-size:40px;">
    <label for="mensanje" id="body" style:"font-size:40px;">
      Mensaje: 
    </label>
    <textarea id="mensaje" rows="4" name="mensaje" cols="40" style="border:solid 5px #000000;border-radius:10px;">
    </textarea>
  </p>
  <p style="margin-left:15%;">
    <input id="enviar" name="enviar" type="submit" style="border:solid 5px #000000;border-radius:10px;font-size:40px;">
</input>
  </p>
</form>

<?php
require('projectafooter.php');
?>
