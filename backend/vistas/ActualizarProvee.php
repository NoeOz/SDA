<?php
require_once 'backend/modelos/usuariosModel.php';

if(isset($_GET["idProveedor"]))
{
    $datosController= $_GET["idProveedor"];
     //echo $_GET["idProduct"];

    $respuesta= usuariosModel :: buscarporIdModel4($datosController,"proveedores");

    if(isset($respuesta))
    {
        echo'<form  method="post" id="frmPr">
        <!--idPreveedorUpd-->
        <div class="form-group">
           <input name="idPreveedorUpd" id="idPreveedorUpd" value='.$respuesta["idProveedor"].' type="text" class="form-control"  placeholder="Id Usuario">
         </div>
        <!--nombreProveeedor-->
        <div class="form-group">
          <input name="nombreProveeedorUpd" id="nombreProveeedorUpd" value='.$respuesta["nombreProveedor"].' type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Ingrese su nombre">
        </div>
        <!--telProveedor-->
        <div class="form-group">
          <input name="telProveedorUpd" id="telProveedorUpd" value='.$respuesta["telefonoProveedor"].' type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Ingrese su telefono">
        </div>
       <!--paginaWeb-->
       <div class="form-group">
          <input name="paginaWebUpd" id="paginaWebUpd" value='.$respuesta["paginaWeb"].' type="text" class="form-control"  placeholder="Ingres el nombre de su Pagina web">
        </div>
         <!--idRepresentante-->
       <div class="form-group">
          <input name="idRepresentanteUpd" id="idRepresentanteUpd" value='.$respuesta["representante"].' type="text" class="form-control"  placeholder="Ingrese el Nombre de la Empresa">
       </div>
      
        <input type="submit"  id="guardarUsuario" value="Guardar Proveedor">
      </form>';
    }
    else{
        echo"No hay datos";
    }
}

$actualizar = new usuariosController();
$actualizar -> actualizarProveedorController();

?>