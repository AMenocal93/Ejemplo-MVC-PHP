<?php

class MvcControlador{

    #llamada a la plantilla
    #-----------------------------------------------

    public function plantilla(){
        include "vistas/template.php";
            

    }


    #interaccion del usuario
    #----------------------------------------------------

    public function enlacesPaginasController(){

        if(isset($_GET["action"])){

        $enlacesController = $_GET["action"];
        }

        else{
            $enlacesController = "index";

        }

        $respuesta = EnlacesPaginas::enlacesPaginasModel($enlacesController);

        include $respuesta;
    }

}

?> 