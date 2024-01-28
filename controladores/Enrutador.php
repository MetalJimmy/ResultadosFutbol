<?php
include "ControladorResultado.php";

$accion = $_REQUEST['ctl'] ?? "enfrentamientoVista";

switch ($accion)
{
    case 'enfrentamientoVista':
        include "vistas/enfrentamiento.php";
        break;
    case 'enfrentamiento':
        $vista = Resultado::simularResultado();
        echo $vista;
    default:
        break;    
}

?>