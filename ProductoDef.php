<?php
namespace Producto;

trait PropiedadesProducto {
      public function getnumero() {
      	     return $this->numero;
      }
      public function getdescripcion() {
      	     return $this->descripcion;
      }
      public function getprecio() {
      	     return $this->precio;
      }
      public function getrecurso() {
      	     return $this->recurso;
      }
      public function getcomentario() {
      	     return $this->comentario;
      }
      public function getcantidad() {
      	     return $this->cantidad;
      }
      public function getcategoria() {
      	     return $this->categoria;
      }

      public function setnumero($numero) {
      	     $this->numero=empty($numero)?"":$numero;
      }
      public function setdescription($descripcion) {
      	     $this->numero=empty($descripcion==null)?"":$descripcion;
      }
      public function setprecio($precio) {
      	     $this->numero=empty($precio)?"":$precio;
      }
      public function setrecurso($recurso) {
      	     $this->numero=empty($recurso==null)?"":$recurso;
      }
      public function setcomentario($comentario) {
      	     $this->numero=empty($comentario==null)?"":$comentario;
      }
      public function setcantidad($cantidad) {
      	     $this->numero=empty($cantidad)?"":$cantidad;
      }
      public function setcategoria($categoria) {
      	     $this->numero=empty($categoria)?"":$categoria;
      }
}
?>