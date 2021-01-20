 <div id="seccionArticulos" class="col-lg-12 col-md-10 col-sm-9 col-xs-12">
	 <br> <br>
		<button id="btnAgregarArticulo" class="btn btn-info btn-lg" >Agregar Usuario</button>


	<div id="agregarArticulo" style="display:none" class="col-lg-8">


 <form  method="post" id="frmPr">
 <!--email-->
 <div class="form-group">
    <input name="emailUser" id="emailUser" type="email" class="form-control"  placeholder="Ingrese su Email">
  </div>
  <!--nombreusuario-->
  <div class="form-group">
    <input name="nombreUser" id="nombreUser" type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Ingrese su nombre">
  </div>
  <!--claveusuario-->
  <div class="form-group">
    <input name="passwordUser" id="passwordUser" type="password" class="form-control"  aria-describedby="emailHelp" placeholder="Ingrese su contraseña">
  </div>
  <!--emailextra-->
  <div class="form-group">
    <input name="emailExtra" id="emailExtra" type="email" class="form-control"  placeholder="Ingrese Email extra">
  </div>
  <!--fecharegistro-->
  <div class="form-group">
    <input name="FRE" id="FRE" type="date" class="form-control" >
    <small id="fechregHelp" class="form-text text-muted"> Ingrese fecha de registro</small>
  </div>
  <!--fechaactualizacion-->
  <div class="form-group">
    <input name="FAC" id="FAC" type="date" class="form-control">
    <small id="fechActuaHelp" class="form-text text-muted"> Ingrese fecha de actualización</small>
  </div>
  <!--firmadigital-->

  <div class="form-group">
    <input name="FirmaD" id="FirmaD" type="text" class="form-control"  placeholder="Ingrese Firma Digital">
  </div>
  <input type="submit"  id="guardarUsuario" value="Guardar Usuario">
</form> 
</div>
</div>
<?php

$crearUsuario = new usuariosController();
$crearUsuario -> guardarUsuarioController(); 
$mostrarUsuario = new usuariosController();
$mostrarUsuario -> mostrarUsuarioController();
$borrarUs = new usuariosController();
$borrarUs->borrarUsuarioController();

?>