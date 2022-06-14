<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<div class="container" style="max-width: 50%">
		<h1 class="display-4 animated rubberBand" style="margin:15px auto;">Agregar Nueva Oferta</h1>
		<form name="agregar" action="<?php echo base_url();?>oferta_controller/agregar" method="POST">
			<div class="form-group">
				<label>Monto</label>
				<input type="text" name="monto" required placeholder="$00.00" class="form-control">
			</div>
			<div class="form-group">
				<label>Fecha de la oferta</label>
				<input type="date" name="fecha_oferta" required class="form-control">
			</div>
			<div class="form-group">
				<label>Comprador</label>
				<select name="id_comprador" class="form-control">
					<option value="">Selecciona un comprador</option>
					<?php foreach($this->oferta_model->obtenerComprador() as $ofer): ?>
						<option value="<?php echo $ofer->id_comprador; ?>"><?php echo $ofer->nombre.' '.$ofer->apellido; ?></option>
					<?php endforeach; ?>
				</select>
			</div>
			<div class="form-group">
				<button type="submit" name="agregar" class="btn btn-success">+ Agregar</button>
			</div>
		</form>
	</div>
</body>
</html>