<form  method="post" id="frmProd">
<div class="form-group">
    <label for="iddepa">ID:</label>
    <input name="iddepa" type="text" class="form-control" id="iddepa">
  </div>
 <div class="form-group">
    <label for="nombreDepa">Nombre:</label>
    <input name="nombreDepa" type="text" class="form-control" id="nombreDepa">
  </div>
  <div class="form-group">
    <label for="status">Status:</label>
    <input name="status" type="text" class="form-control" id="status">
  </div>
  <div class="form-group">
    <label for="descripcion">Descripcion :</label>
    <input name="descripcion" type="text" class="form-control" id="descripcion">
  </div>
  <div class="form-group">
    <label for="fechaRE">Fecha de registro :</label>
    <input name="fechaRE" type="date" class="form-control" id="fechaRE">
  </div>
  <div class="form-group">
    <label for="fechaAC">Fecha de Actualizacion :</label>
    <input name="fechaAC" type="date" class="form-control" id="fechaAC">
  </div>
  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox"> Remember me
    </label>
  </div>
  <input type="submit"  id="guardarinformacion" value="Guardar informacion">
</form> 
<?php

$crearEjercicio = new ejerciciosController();
$crearEjercicio -> guardarEjerciciosController(); 

?>