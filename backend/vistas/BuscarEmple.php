<form  method="post" id="frmProd" enctype="multipart/form-data">
  <div class="form-group">
    <label >Nombre del Empleado :</label>
    <input  name="nombreEmple" type="text" class="form-control" id="nombreEmple">
  </div>
  <input type="submit"  id="guardarProducto" value="Buscar Empleado">
</form> 
<?php

$crearUsuario = new usuariosController();
$crearUsuario -> buscarEmpleadoController(); 

?>