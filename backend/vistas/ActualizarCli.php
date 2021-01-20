<?php
require_once 'backend/modelos/usuariosModel.php';

if(isset($_GET["idCliente"]))
{
    $datosController= $_GET["idCliente"];
     //echo $_GET["idProduct"];

    $respuesta= usuariosModel :: buscarporIdModel2($datosController,"clientes");

    if(isset($respuesta))
    {
        echo'<form  method="post" id="frmPr">
        <!--idCliente-->
        <div class="form-group">
           <input name="idClienteUpd" id="idClienteUpd" value='.$respuesta["idCliente"].' type="text" class="form-control"  placeholder="Ingrese su Email">
         </div>
        <!--email-->
        <div class="form-group">
           <input name="emailClienteUpd" id="emailClienteUpd" value='.$respuesta["email"].' type="email" class="form-control"  placeholder="Ingrese su Email">
         </div>
          <!--tipo Cliente-->
        <div class="form-group">
           <input name="tipoClienteUpd" id="tipoClienteUpd" value='.$respuesta["tipoCliente"].' type="text" class="form-control"  placeholder="Tipo de Cliente">
         </div>
          <!--nombre empresa-->
        <div class="form-group">
           <input name="nomEmpresUpd" id="nomEmpresUpd" value='.$respuesta["nombreEmpresa"].' type="text" class="form-control"  placeholder="Ingrese el Nombre de la Empresa">
        </div>
          <!-- rfc -->
        <div class="form-group">
           <input name="rfcClienteUpd" id="rfcClienteUpd" value='.$respuesta["rfc"].' type="text" class="form-control"  placeholder="Ingrese su RFC">
        </div>
        <!--telCliente-->
        <div class="form-group">
           <input name="telClienteUpd" id="telClienteUpd" value='.$respuesta["telCliente"].' type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Ingrese su telefono">
         </div>
       
         <!--nombreCliente-->
         <div class="form-group">
           <input name="nombreClienteUpd" id="nombreClienteUpd" value='.$respuesta["nombreCliente"].' type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Ingrese su nombre">
         </div>
         
         <input type="submit"  id="guardarUsuario" value="Guardar Cliente">
       </form>';
    }
    else{
        echo"No hay datos";
    }
}

$actualizar = new usuariosController();
$actualizar -> actualizarClienteController();

?>
