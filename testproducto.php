<?php 
      require_once(dirname(__FILE__).'/producto.php');
      use Producto\producto;
      try {
      	  $producto=new producto(1,"Ojo de dragon de Veronica",1000,"Venezuela","sec",2,"magia");
	  echo "hi2";
      } catch (Exception $e) {
      	  echo "hi";
      }
?>
      