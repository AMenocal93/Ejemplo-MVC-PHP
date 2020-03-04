<?php
#aqui se muestran las salidas al usuario y tambien se envian las acciones del usuario al controlador

require_once "controladores/controlador.php";
require_once "modelos/modelo.php";

$mvc = new MvcControlador();
$mvc -> plantilla();


?>