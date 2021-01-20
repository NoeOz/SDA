<div id="seccionArticulos" class="col-lg-12 col-md-10 col-sm-9 col-xs-12">
	 <br> <br>
		<button id="btnAgregarArticulo" class="btn btn-info btn-lg">Agregar Proveedor</button>


	<div id="agregarArticulo" style="display:none" class="col-lg-8">


 <form  method="post" id="frmPr">
  <!--nombreProveeedor-->
  <div class="form-group">
    <input name="nombreProveeedor" id="nombreProveeedor" type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Ingrese su nombre">
  </div>
  <!--telProveedor-->
  <div class="form-group">
    <input name="telProveedor" id="telProveedor" type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Ingrese su telefono">
  </div>
 <!--paginaWeb-->
 <div class="form-group">
    <input name="paginaWeb" id="paginaWeb" type="text" class="form-control"  placeholder="Ingres el nombre de su Pagina web">
  </div>
   <!--idRepresentante-->
 <div class="form-group">
    <input name="idRepresentante" id="idRepresentante" type="text" class="form-control"  placeholder="Ingrese el Nombre de la Empresa">
 </div>

  <input type="submit"  id="guardarUsuario" value="Guardar Proveedor">
</form> 
</div>
</div>

<?php

$crearProveedor = new usuariosController();
$crearProveedor -> guardarProveedorController(); 
$mostrarProveedor = new usuariosController();
$mostrarProveedor -> mostrarProveedorController();
$borrarProv = new usuariosController();
$borrarProv->borrarProveedorController();


?>