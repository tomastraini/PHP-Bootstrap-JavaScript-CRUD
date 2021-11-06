<div id="modalArticulo" class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Carga de clientes</h5>
      </div>
      <div class="modal-">
        <form method="POST" action="CInsert.php">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Nombre de cliente:</label>
            <input id= "nombreclia"  name="nombreclia" type="text" class="form-control">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Dirección:</label>
            <input id= "direccionclia"  name="direccionclia" type="text" class="form-control">
          </div>
          
          <div class="row">
          <div class="col">
            <label for="message-text" class="col-form-label">Teléfono:</label>
            <input id= "telefonoclia" name="telefonoclia" type="text" class="form-control">
          </div>
          </div>
        
      </div>
      <div class="modal-footer">

      <button type="submit" name="agregar" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span>Cargar!</button>
      </div>
      </form>
    </div>
  </div>
</div>