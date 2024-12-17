<?php 
if (isset($_POST['sujeto'])&&isset($_POST['mensaje'])&&isset($_POST['nombre'])&&isset($_POST['memsaje'])) {
   if (isset($_POST['enviar'])){
      $destinario='huachao@ualberta.ca';
      $sujeto=$_POST_['sujeto'];
      $mesaje=$_POST_['mensaje'];
      $header="".$POST_['nombre']." ".$_POST['correo'];
      $enviado=mail($destinario,$sujeto,$mensaje,$header);
      }

      if ($enviado) {
      echo "<body><strong>Gracias por tu mensaje. Tu correo ya está enviado</strong>";
      } else {
      echo "<body><strong>Lo siento. Hubo un problema</strong>";
      }
}
?>
<p>
<a href="projecta.php">Regresar</a>
</p>
</body>
