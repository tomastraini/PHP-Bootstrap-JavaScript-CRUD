<div id="modalModificar" class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modificación</h5>
      </div>
      <div class="modal-">
        <form method="POST" action="CModif.php">
           <input id="ache" name="ache" type="hidden" class="form-control">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Nombre de cliente:</label>
            <input id="nomcliax" name="nomcliax" type="text" class="form-control">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Dirección:</label>
            <input id="direcliax" name="direcliax" type="text" class="form-control">
          </div>
          
          <div class="row">
          <div class="col">
            <label for="message-text" class="col-form-label">Teléfono:</label>
            <input id="telcliax" name="telcliax" type="text" class="form-control">
          </div>
          </div>
          <div class="modal-footer">
          <button type="submit" name="modific" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span>Modificar!</button>
          </div>
          
        </form>
      </div>
      <div class="modal-footer">

      </div>
    </div>
  </div>
</div>