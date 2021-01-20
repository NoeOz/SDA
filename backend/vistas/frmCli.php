<div id="seccionArticulos" class="col-lg-12 col-md-10 col-sm-9 col-xs-12">
	 <br> <br>
		<button id="btnAgregarArticulo" class="btn btn-info btn-lg">Agregar Cliente</button>


	<div id="agregarArticulo" style="display:none" class="col-lg-8">


 <form  method="post" id="frmPr">
 <!--email-->
 <div class="form-group">
    <input name="emailCliente" id="emailCliente" type="email" class="form-control"  placeholder="Ingrese su Email">
  </div>
   <!--tipo Cliente-->
 <div class="form-group">
    <input name="tipoCliente" id="tipoCliente" type="text" class="form-control"  placeholder="Tipo de Cliente">
  </div>
   <!--nombre empresa-->
 <div class="form-group">
    <input name="nomEmpres" id="nomEmpres" type="text" class="form-control"  placeholder="Ingrese el Nombre de la Empresa">
 </div>
   <!-- rfc -->
 <div class="form-group">
    <input name="rfcCliente" id="rfcCliente" type="text" class="form-control"  placeholder="Ingrese su RFC">
 </div>
 <!--telCliente-->
 <div class="form-group">
    <input name="telCliente" id="telCliente" type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Ingrese su telefono">
  </div>

  <!--nombreCliente-->
  <div class="form-group">
    <input name="nombreCliente" id="nombreCliente" type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Ingrese su nombre">
  </div>
  
  <input type="submit"  id="guardarUsuario" value="Guardar Cliente">
</form> 
</div>
</div>

<?php

$crearCliente = new usuariosController();
$crearCliente -> guardarClienteController(); 
$mostrarCliente = new usuariosController();
$mostrarCliente -> mostrarClienteController();
$borrarCli = new usuariosController();
$borrarCli->borrarClienteController();


?>