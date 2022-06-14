<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<div class="container" style="max-width: 50%">
		<h1 class="display-4" style="margin:15px auto;">Agregar Nueva Obra</h1>
		<form name="agregar" action="<?php echo base_url();?>obra_controller/agregar" method="POST">
			<div class="form-group">
				<label>Número de registro</label>
				<input type="text" name="num_registro" required class="form-control">
			</div>
			<div class="form-group">
				<label>Título</label>
				<input type="text" name="titulo" required class="form-control">
			</div>
			<div class="form-group">
				<label>Artista</label>
				<select name="id_artista" class="form-control">
					<option value="">Selecciona un artista</option>
					<?php foreach($this->obra_model->obtenerArtista() as $ob): ?>
						<option value="<?php echo $ob->id_artista; ?>"><?php echo $ob->nombre.' '.$ob->apellido; ?></option>
					<?php endforeach; ?>
				</select>
			</div>
			<div class="form-group">
				<label>Descripción</label>
				<input type="text" name="descripcion" required class="form-control">
			</div>
			<div class="form-group">
				<label>Estilo</label>
				<input type="text" name="estilo" required class="form-control">
			</div>
			<div class="form-group">
				<label>Precio</label>
				<input type="text" name="precio" required class="form-control">
			</div>
			<div class="form-group">
				<label>Propietario</label>
				<select name="id_propietario" class="form-control">
					<option value="">Selecciona un propietario</option>
					<?php foreach($this->obra_model->obtenerPropietario() as $pro): ?>
						<option value="<?php echo $pro->id_propietario; ?>"><?php echo $pro->nombre.' '.$pro->apellido; ?></option>
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