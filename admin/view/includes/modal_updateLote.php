<div class="modal fade" id="edit_<?php echo $Lote->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Editar Lote</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form id="Lote_<?php echo $Lote->id;?>" action="<?php echo $helper->url("Lotes","actualizar"); ?>&id=<?php echo $Lote->id; ?>" method="POST">
				<input name="id_terreno" type="hidden" value="<?php echo $id_terreno; ?>">
				<div class="row form-group">
					<div class="col-sm-3">
						<label class="control-label" style="position:relative; top:7px;">Nombre:</label>
					</div>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="nombre" value="<?php echo $Lote->nombre; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-3">
						<label class="control-label" style="position:relative; top:7px;">Código:</label>
					</div>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="codigo" value="<?php echo $Lote->codigo; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-3">
						<label class="control-label" style="position:relative; top:7px;">Coordenadas:</label>
					</div>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="coordenadas" value="<?php echo $Lote->coordenadas; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-3">
						<label class="control-label">Estado del lote:</label>
					</div>
					<div class="col-sm-9">
						<label class="radio-inline"><input type="radio" name="estado_lote" value="1" <?php if ($Lote->estado_lote == 1) { echo "checked='checked'"; } ?>>Disponible</label>
						<label class="radio-inline"><input type="radio" name="estado_lote" value="0" <?php if ($Lote->estado_lote  == 0) { echo "checked='checked'"; } ?>>Vendido</label>
						<label class="radio-inline"><input type="radio" name="estado_lote" value="2" <?php if ($Lote->estado_lote  == 2) { echo "checked='checked'"; } ?>>Contendiendo</label>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-3">
						<label class="control-label" style="position:relative; top:7px;">Medidas:</label>
					</div>
					<div class="col-sm-9">
						<input id="medida_<?php echo $Lote->id;?>" type="text" class="form-control" name="medida" value="<?php echo $Lote->medida; ?>" onblur="CalcularPrecio('<?php echo $Lote->id; ?>');return false;" onkeypress="return isNumberKey(event);">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-3">
						<label class="control-label" style="position:relative; top:7px;">Medidas (Detalles):</label>
					</div>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="medida_detalle" value="<?php echo $Lote->medida_detalle; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-3">
						<label class="control-label" style="position:relative; top:7px;">Precio por m<sup>2</sup>:</label>
					</div>
					<div class="col-sm-9">
						<input id="precio_m2_<?php echo $Lote->id;?>" type="text" class="form-control" name="precio_m2" value="<?php echo $Lote->precio_m2; ?>" onblur="CalcularPrecio('<?php echo $Lote->id; ?>');return false;" onkeypress="return isNumberKey(event);">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-3">
						<label class="control-label" style="position:relative; top:7px;">Precio</label>
					</div>
					<div class="col-sm-9">
						<input id="precio_contado_<?php echo $Lote->id;?>" type="text" class="form-control" name="precio_contado" value="<?php echo $Lote->precio_contado; ?>">
					</div>
				</div>
				<!--<div class="row form-group">
					<div class="col-sm-3">
						<label class="control-label" style="position:relative; top:7px;">Precio (Financiado)</label>
					</div>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="precio_financiado" value="<?php echo $Lote->precio_financiado; ?>">
					</div>
				</div>-->
				<div class="row form-group">
					<div class="col-sm-3">
						<label class="control-label">Publicar:</label>
					</div>
					<div class="col-sm-9">
						<label class="radio-inline"><input type="radio" name="publicar" value="1" <?php if ($Lote->publicar == 1) { echo "checked='checked'"; } ?>>Sí</label>
						<label class="radio-inline"><input type="radio" name="publicar" value="0" <?php if ($Lote->publicar  == 0) { echo "checked='checked'"; } ?>>No</label>
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <button type="submit" name="editar" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Actualizar</a>
			</form>
            </div>

        </div>
    </div>
</div>