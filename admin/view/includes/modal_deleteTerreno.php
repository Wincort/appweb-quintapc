<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $terreno->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Borrar terreno</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">¿Esta seguro de Borrar el registro?</p>
				<h2 class="text-center"><?php echo $terreno->nombre; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <a href="<?php echo $helper->url("terrenos","borrar"); ?>&id=<?php echo $terreno->id; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Sí</a>
            </div>

        </div>
    </div>
</div>