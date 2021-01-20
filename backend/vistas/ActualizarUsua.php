<?php
require_once 'backend/modelos/usuariosModel.php';

if(isset($_GET["idUsuario"]))
{
    $datosController= $_GET["idUsuario"];
     //echo $_GET["idProduct"];

    $respuesta= usuariosModel :: buscarporIdModel($datosController,"usuarios");

    if(isset($respuesta))
    {
        echo' <form  method="post" id="frmPr">
        <!--idUsuario-->
        <div class="form-group">
           <input name="idusuarioUpd" id="idusuarioUpd" value='.$respuesta["idUsuario"].' type="text" class="form-control"  placeholder="Id Usuario">
         </div>
        <!--email-->
        <div class="form-group">
           <input name="emailusuarioUpd" id="emailusuarioUpd" value='.$respuesta["email"].' type="email" class="form-control"  placeholder="Ingrese su Email">
         </div>
         <!--nombreusuario-->
         <div class="form-group">
           <input name="nombreUsuarioUpd" id="nombreUsuarioUpd" value='.$respuesta["nombre"].' type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Ingrese su nombre">
         </div>
         <!--claveusuario-->
         <div class="form-group">
           <input name="claveUsuarioUpd" id="claveUsuarioUpd" type="password" class="form-control"  aria-describedby="emailHelp" placeholder="Ingrese su contraseña">
         </div>
         <!--emailextra-->
         <div class="form-group">
           <input name="emailusuario2Upd" id="emailusuario2Upd" value='.$respuesta["emailExtra"].' type="email" class="form-control"  placeholder="Ingrese Email extra">
         </div>
         <!--fecharegistro-->
         <div class="form-group">
           <input name="fechaRegistUpd" id="fechaRegistUpd" value='.$respuesta["fechaRegistro"].' type="date" class="form-control" >
           <small id="fechregHelp" class="form-text text-muted"> Ingrese fecha de registro</small>
         </div>
         <!--fechaactualizacion-->
         <div class="form-group">
           <input name="fechaActuaUpd" id="fechaActuaUpd" value='.$respuesta["fechaActualizacion"].' type="date" class="form-control">
           <small id="fechActuaHelp" class="form-text text-muted"> Ingrese fecha de actualización</small>
         </div>
         <!--firmadigital-->
       
         <div class="form-group">
           <input name="firmadigUpd" id="firmadigUpd" value='.$respuesta["firmaDigital"].' type="text" class="form-control"  placeholder="Ingrese Firma Digital">
         </div>
         <input type="submit"  id="guardarUsuario" value="Guardar Usuario">
       </form>';
    }
    else{
        echo"No hay datos";
    }
}

$actualizar = new usuariosController();
$actualizar -> actualizarUsuarioController();

?>