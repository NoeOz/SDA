<div id="seccionArticulos" class="col-lg-12 col-md-10 col-sm-9 col-xs-12">
	 <br> <br>
		<button id="btnAgregarArticulo" class="btn btn-info btn-lg" >Agregar Empleado</button>


	<div id="agregarArticulo" style="display:none" class="col-lg-8">


 <form  method="post" id="frmPr">
 <!--email-->
 <div class="form-group">
    <input name="emailEmpleado" id="emailEmpleado" type="email" class="form-control"  placeholder="Ingrese su Email">
  </div>
   <!--nombre empresa-->
 <div class="form-group">
    <input name="nomEmpresEmp" id="nomEmpresEmp" type="text" class="form-control"  placeholder="Ingrese el Nombre de la Empresa">
 </div>
   <!-- rfc -->
 <div class="form-group">
    <input name="rfcEmpleado" id="rfcEmpleado" type="text" class="form-control"  placeholder="Ingrese su RFC">
 </div>
 <!--telEmpleado-->
 <div class="form-group">
    <input name="telEmpleado" id="telEmpleado" type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Ingrese su telefono">
  </div>

  <!--nombreEmpleado-->
  <div class="form-group">
    <input name="nombreEmpleado" id="nombreEmpleado" type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Ingrese su nombre">
  </div>
  
  <input type="submit"  id="guardarUsuario" value="Guardar Empleado">
</form> 
</div>
</div>

<?php

$crearEmpleado = new usuariosController();
$crearEmpleado -> guardarEmpleadoController(); 
$mostrarEmpleado = new usuariosController();
$mostrarEmpleado -> mostrarEmpleadoController();
$borrarEmp = new usuariosController();
$borrarEmp->borrarEmpleadoController();


?>