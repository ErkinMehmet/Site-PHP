<?php
//incluir el modelo
include('sacmodelo.php');

//crear la clase controlador
class Controlador {
    public $model;
    //auto contruir para arrancar
    public function __construct()
        {
        $this->model = new Modelo();
        }

    //el metodo mostrar es para mostar las vistas
    public function mostrar()
        {   
            session_start();
            $this->model->conexion();  
            //verificar si la conexion ha sido lanzada
            if ( isset( $_SESSION['user_id'] ) ) {
                //vista de exito
                include('sacvistaexito.php');
            } else {
                //si no logra conectarse regresa a la pagina principal
                include('sacvistaconexion.php');
            }
        }
}