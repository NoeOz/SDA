<form  method="post" id="frmProd" enctype="multipart/form-data">
  <div class="form-group">
    <label >Nombre del Usuario :</label>
    <input  name="nombreUs" type="text" class="form-control" id="nombreUs">
  </div>
  <input type="submit"  id="guardarProducto" value="Buscar Usuario">
</form> 
<?php

$crearUsuario = new usuariosController();
$crearUsuario -> buscarUsuarioController2(); 

?>
