<form  method="post" id="frmBusMarca" enctype="multipart/form-data">
  <div class="form-group">
    <label >Marca del producto :</label>
    <select class="form-control" name="marcaBus" id="marcaBus">
    <option> Avon</option>
    <option> Jafra</option>
    <option > ZY*zone</option>
    <option > TonyMoly</option>
    </select>

  </div>
  <input type="submit"  id="buscarArticulo" value="Buscar Producto" class="btns">
</form> 


  <?php

    $busMarca = new productosController();
    $busMarca -> bucarArticulosController(); 

  ?>