<div class="modal fade" id="info_<?php echo $Lote->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Información <?php echo $Lote->nombre; ?></h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
				<div class="row form-group">
					<div class="col-sm-3">
						<label class="control-label" style="">Código:</label>
					</div>
					<div class="col-sm-9">
                        <p><?php echo $Lote->codigo; ?></p>
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-3">
						<label class="control-label" style="">Medidas:</label>
					</div>
					<div class="col-sm-9">
                        <p><?php echo $Lote->medida; ?>m<sup>2</p>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-3">
						<label class="control-label" style="">Precio por m<sup>2</sup>:</label>
					</div>
					<div class="col-sm-9">
                        <p>$<?php echo $Lote->precio_m2; ?></p>
					</div>
				</div>

                <div class="row form-group">
					<div class="col-sm-3">
						<label class="control-label">Estado del lote:</label>
					</div>
					<div class="col-sm-9">
                        <?php
                        $ESTADO_LOTE="";
                        switch($Lote->estado_lote){
                            case 1:$ESTADO_LOTE="Disponible";break;
                            case 0:$ESTADO_LOTE="Vendido";break;
                            case 2:$ESTADO_LOTE="En disputa";break;
                            default:$ESTADO_LOTE="Sin información disponible"; break;
                        }
                        echo "<p>".$ESTADO_LOTE."</p>";
                        
                        ?>
						
					</div>
				</div>

            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>

        </div>
    </div>
</div>