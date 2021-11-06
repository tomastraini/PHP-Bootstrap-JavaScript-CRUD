<div class="modal fade" id="modalBorrar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <form method="POST" action="CDelete.php">
            <div class="modal-header">
                <center><h4 class="modal-title" id="myModalLabel">Borrar Empleado</h4></center>
                <input id="achex" name="achex"class="form-control" type="hidden">
            </div>
            <div class="modal-body">	
            	<p class="text-center">¿Esta seguro de Borrar el registro?</p>
				<h2 class="text-center"></h2>
			</div>
            <div class="modal-footer">
                <button type="submit" name="agregar" class="btn btn-danger"><span class="glyphicon glyphicon-floppy-disk"></span>Si</button>
            </div>

            </div>
        </form>
    </div>
</div>