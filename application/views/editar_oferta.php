<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<div class="container">
		<h1 class="display-4 animated pulse">Editar oferta</h1>
		<form name="editar" action="<?php echo base_url();?>oferta_controller/editar" method="POST">
			<div class="form-group">
				<label>Monto</label>
				<input type="text" name="monto" value="<?=$oferta->monto?>" required class="form-control">
			</div>			
			<div class="form-group">
				<label>Fecha de Oferta</label>
				<input type="date" name="fecha_oferta" value="<?=$oferta->fecha_oferta?>" required class="form-control">
			</div>			
			<div class="form-group">
				<label>Comprador</label>
				<select name="id_comprador" required class="form-control">
					<?php foreach($this->oferta_model->obtenerComprador() as $ofer):?>
						<option value="<?php echo $ofer->id_comprador; ?>"<?php echo $ofer->id_comprador == $oferta->id_comprador ? 'selected':'' ?>><?php echo $ofer->nombre.' '.$ofer->apellido; ?></option>
					<?php endforeach; ?>
				</select>				
			</div>			
			<input type="hidden" name="id" value="<?=$oferta->id_oferta?>">
			<div class="form-group">
				<button type="submit" class="btn btn-success"><i class="fas fa-save"></i>&nbsp;Guardar</button>
			</div>			
		</form>
	</div>	
</body>
</html>