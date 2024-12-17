<?php
namespace Vista;
class ProductoVista {
      public static function productoicon($producto) {
      	     $htmlCode="";
	     $htmlCode.=$numero->getnumero();
	     if (!empty($numero->getnumero()))
	     	$htmlCode.="<br/>";
	     $htmlCode.=$descripcion->getdescripcion();
	     if (($descripcion->getdescripcion())!=null)
	     	$htmlCode.="<br/>";
	     $htmlCode.=$precio->getprecio();
	     if (!empty($precio->getprecio()))
	     	$htmlCode.="<br/>";
	     $htmlCode.=$cantidad->getcantidad();
	     if (!empty($cantidad->getcantidad()))
	     	$htmlCode.="<br/>";
	     $htmlCode.=$comentario->getcomentario();
	     if (($comentario->getcomentario())!=null)
	     	$htmlCode.="<br/>";
	     $htmlCode.=$categoria->getcategoria();
	     if (($categoria->getcategoria())!=null)
	     	$htmlCode.="<br/>";
	     $htmlCode.=$recurso->getrecurso();
	     if (($recurso->getrecurso())!=null)
	     	$htmlCode.="<br/>";
      }
}
?>