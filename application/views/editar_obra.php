<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<div class="container">
		<h1 class="display-4 animated pulse">Editar obra</h1>
		<form name="editar" action="<?php echo base_url();?>obra_controller/editar" method="POST">
			<div class="form-group">
				<label>Título</label>
				<input type="text" name="titulo" value="<?=$obra->titulo?>" required class="form-control">
			</div>
			<div class="form-group">
				<label>Artista</label>
				<select name="id_artista" required class="form-control">
					<?php foreach($this->obra_model->obtenerArtista() as $ob):?>
						<option value="<?php echo $ob->id_artista; ?>"<?php echo $ob->id_artista == $obra->id_artista ? 'selected':'' ?>><?php echo $ob->nombre.' '.$ob->apellido; ?></option>
					<?php endforeach; ?>
				</select>				
			</div>
			<div class="form-group">
				<label>Descripción</label>
				<input type="text" name="descripcion" value="<?=$obra->descripcion?>" required class="form-control">
			</div>
			<div class="form-group">
				<label>Estilo</label>
				<input type="text" name="estilo" value="<?=$obra->estilo?>" required class="form-control">
			</div>
			<div class="form-group">
				<label>Precio</label>
				<input type="text" name="precio" value="<?=$obra->precio?>" required class="form-control">
			</div>
			<div class="form-group">
				<label>Propietario</label>
				<select name="id_propietario" required class="form-control">
					<?php foreach($this->obra_model->obtenerPropietario() as $op): ?>
						<option value="<?php echo $op->id_propietario;?>"<?php echo $op->id_propietario == $obra->id_propietario ? 'selected':''?>><?php echo $op->nombre.' '.$op->apellido; ?></option>
					<?php endforeach; ?>
				</select>					
			</div>			
			<input type="hidden" name="id" value="<?=$obra->num_registro?>">
			<div class="form-group">
				<button type="submit" class="btn btn-success"><i class="fas fa-save"></i>&nbsp;Guardar</button>
			</div>			
		</form>
	</div>	
</body>
</html>