<?php
namespace Producto;
require_once(dirname(__FILE__).'/ProductoDef.php');
class Producto {
   private $numero;
   private $descripcion;
   private $precio;
   private $recurso;
   private $comentario;
   private $cantidad;
   private $categoria;
   use PropiedadesProducto
;
   public function __construct($numero,$descripcion,$precio,$recurso,$comentario,$cantidad,$categoria) {
   $this->setnumero($numero);
   $this->setdescripcion($descripcion);
   $this->setprecio($precio);
   $this->setrecurso($recurso);
   $this->setcomentario($comentario);
   $this->setcantidad($cantidad);
   $this->setcategoria($categoria);
   }
}
?>
