<?php

require_once "backend/controladores/controladores.php";
require_once "backend/controladores/productosController.php";
require_once "backend/controladores/usuariosController.php";
require_once "backend/controladores/ejerciciosController.php";

$mvc = new controladorMenu();
$mvc -> MostrarPlantilla();

?>