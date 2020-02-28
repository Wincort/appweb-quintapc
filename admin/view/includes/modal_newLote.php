<!-- Agregar Nuevos Registros -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Agregar Lote</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form action="<?php echo $helper->url("Lotes","crear"); ?>" method="post">
				<input name="id_terreno" type="hidden" value="<?php echo $id_terreno; ?>">
				<div class="row form-group">
					<div class="col-sm-3">
						<label class="control-label" style="position:relative; top:7px;">Nombre:</label>
					</div>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="nombre">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-3">
						<label class="control-label" style="position:relative; top:7px;">Código:</label>
					</div>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="codigo">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-3">
						<label class="control-label" style="position:relative; top:7px;">Coordenadas:</label>
					</div>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="coordenadas">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-3">
						<label class="control-label">Estado del lote:</label>
					</div>
					<div class="col-sm-9">
						<label class="radio-inline"><input type="radio" name="estado_lote" value="1" checked='checked' >Disponible</label>
						<label class="radio-inline"><input type="radio" name="estado_lote" value="0">Vendido</label>
						<label class="radio-inline"><input type="radio" name="estado_lote" value="2" >Contendiendo</label>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-3">
						<label class="control-label" style="position:relative; top:7px;">Medidas:</label>
					</div>
					<div class="col-sm-9">
						<input id="medida_0" type="text" class="form-control" name="medida" onblur="CalcularPrecio('0');return false;" onkeypress="return isNumberKey(event);">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-3">
						<label class="control-label" style="position:relative; top:7px;">Medidas (Detalles):</label>
					</div>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="medida_detalle">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-3">
						<label class="control-label" style="position:relative; top:7px;">Precio por m<sup>2</sup>:</label>
					</div>
					<div class="col-sm-9">
						<input id="precio_m2_0" type="text" class="form-control" name="precio_m2" onblur="CalcularPrecio('0');return false;" onkeypress="return isNumberKey(event);">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-3">
						<label class="control-label" style="position:relative; top:7px;">Precio</label>
					</div>
					<div class="col-sm-9">
						<input id="precio_contado_0" type="text" class="form-control" name="precio_contado">
					</div>
				</div>
				<!--<div class="row form-group">
					<div class="col-sm-3">
						<label class="control-label" style="position:relative; top:7px;">Precio (Financiado)</label>
					</div>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="precio_financiado">
					</div>
				</div>-->
                <div class="row form-group">
					<div class="col-sm-3">
						<label class="control-label">Publicar:</label>
					</div>
					<div class="col-sm-8">
						<label class="radio-inline"><input type="radio" name="publicar" value="1" checked='checked'>Sí</label>
						<label class="radio-inline"><input type="radio" name="publicar" value="0">No</label>
					</div>
				</div>

            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <button type="submit" name="agregar" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar</button>
			</form>
            </div>

        </div>
    </div>
</div>