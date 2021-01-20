<?php
require_once 'backend/modelos/usuariosModel.php';

if(isset($_GET["idEmpleado"]))
{
    $datosController= $_GET["idEmpleado"];
     //echo $_GET["idProduct"];

    $respuesta= usuariosModel :: buscarporIdModel3($datosController,"empleados");

    if(isset($respuesta))
    {
        echo'<form  method="post" id="frmPr">
        <!--idEmpleado-->
        <div class="form-group">
           <input name="idEmpleadoUpd" id="idEmpleadoUpd" value='.$respuesta["idEmpleado"].' type="text" class="form-control"  placeholder="Id Usuario">
         </div>
        <!--email-->
        <div class="form-group">
           <input name="emailEmpleadoUpd" id="emailEmpleadoUpd" value='.$respuesta["email"].' type="email" class="form-control"  placeholder="Ingrese su Email">
         </div>
          <!--nombre empresa-->
        <div class="form-group">
           <input name="nomEmpresEmpUpd" id="nomEmpresEmpUpd" value='.$respuesta["nombreEmpresa"].' type="text" class="form-control"  placeholder="Ingrese el Nombre de la Empresa">
        </div>
          <!-- rfc -->
        <div class="form-group">
           <input name="rfcEmpleadoUpd" id="rfcEmpleadoUpd" value='.$respuesta["rfc"].' type="text" class="form-control"  placeholder="Ingrese su RFC">
        </div>
        <!--telEmpleado-->
        <div class="form-group">
           <input name="telEmpleadoUpd" id="telEmpleadoUpd" value='.$respuesta["telEmpleado"].' type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Ingrese su telefono">
         </div>
         <!--nombreEmpleado-->
         <div class="form-group">
           <input name="nombreEmpleadoUpd" id="nombreEmpleadoUpd" value='.$respuesta["nombreEmpleado"].' type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Ingrese su nombre">
         </div>
         
         <input type="submit"  id="guardarUsuario" value="Guardar Empleado">
       </form>';
    }
    else{
        echo"No hay datos";
    }
}

$actualizar = new usuariosController();
$actualizar -> actualizarEmpleadoController();

?>