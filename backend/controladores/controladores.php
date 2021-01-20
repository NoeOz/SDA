<?php

class ControladorMenu{

    public function MostrarPlantilla(){
        include "backend/vistas/plantilla.php";
    }


    public function enlacesPaginas(){
 
      
       if (isset($_GET["accion"])){
        $enlace=$_GET["accion"];
       //console.log($enlace);
        if($enlace == "catalogo" ||
         $enlace=="frmProductos"||
         $enlace=="frmCli"||
         $enlace=="frmProvee"||
         $enlace=="frmEmplea"||
         $enlace=="login" ||
         $enlace=="carritoAgregado" ||
         $enlace=="provedores" ||
         $enlace=="carrito" ||
         $enlace=="frmBuscar" ||
         $enlace=="Marca" ||
         $enlace=="frmActualizar" ||
         $enlace=="Salir" ||
         $enlace=="BuscarProvee" ||
         $enlace=="ActualizarProvee" ||
         $enlace=="BuscarCli" ||
         $enlace=="BuscarEmple" ||
         $enlace=="BuscarUsu" ||
         $enlace=="ActualizarEmple" ||
         $enlace=="ActualizarUsua" ||
         $enlace=="ActualizarCli" ||
         $enlace=="frmUsuarios" ||
         $enlace=="frmCliUsu"){
            
        $module="backend/vistas/".$enlace.".php";}
        else if($enlace=="index"){
            $module="backend/vistas/catalogo.php";
        }
    }
         else{
            $module="backend/vistas/catalogo.php";
         }

       return $module;
    }
}
?>