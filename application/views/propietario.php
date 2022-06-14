<!DOCTYPE html>
<html>
<head>
	<title>Propietarios</title>
</head>
<body>
	<div class="container">
		<h1 class="display-4 animated slideInLeft">Propietarios</h1>
		<div>
			<button class="btn btn-dark">
				<a href="<?php echo base_url();?>exposicion_controller/index"><i class="fas fa-layer-group"></i>&nbsp;Exposiciones</a>
			</button>
			<button class="btn btn-dark">
				<a href="<?php echo base_url();?>artista_controller/index"><i class="fas fa-palette"></i>&nbsp;Artistas</a>
			</button>
			<button class="btn btn-dark">
				<a href="<?php echo base_url();?>obra_controller/index"><i class="fas fa-images"></i>&nbsp;Obras</a>
			</button>
			<button class="btn btn-dark">
				<a href="<?php echo base_url();?>comprador_controller/index"><i class="fas fa-shopping-bag"></i>&nbsp;Compradores</a>
			</button>
			<button class="btn btn-dark">
				<a href="<?php echo base_url();?>oferta_controller/index"><i class="fas fa-tags"></i>&nbsp;Ofertas</a>
			</button>
		</div>
		<form action="<?php echo base_url();?>propietario_controller/accion" name="mostrar" method="POST">
			<table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
				<thead class="thead-dark">
					<tr>
						<th class="th-sm">Modificar</th>
						<th class="th-sm">Nombre</th>
						<th class="th-sm">Apellido</th>
						<th class="th-sm">Teléfono</th>
						<th class="th-sm">Correo</th>
						<th class="th-sm">Dirección</th>
						<th class="th-sm">Nacionalidad</th>
						<th class="th-sm">Oferta</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($propietario as $prop): ?>
						<tr>
							<td><input type="radio" name="editar" value="<?=$prop->id_propietario ?>" required></td>
							<td><?=$prop->nombre ?></td>
							<td><?=$prop->apellido ?></td>
							<td><?=$prop->telefono ?></td>
							<td><?=$prop->correo ?></td>
							<td><?=$prop->direccion ?></td>
							<td><?=$prop->nacionalidad ?></td>
							<td><?=$prop->monto ?></td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
			<br>
			<div>
				<button class="btn btn-info">
					<a href="<?php echo base_url();?>propietario_controller/index"><i class="fas fa-user-secret"></i>&nbsp;Propietarios</a>
				</button>
				<button class="btn btn-info">
					<a href="<?php echo base_url();?>propietario_controller/agregar_accion"><i class="fas fa-plus"></i>&nbsp;Agregar</a>
				</button>
				<!-- actualizar -->
				<button class="btn btn-info" type="submit">
					<i class="far fa-edit"></i>&nbsp;Editar
				</button>
				<!-- Eliminar -->
				<button class="btn btn-info" type="submit">
					<a href="<?php echo base_url();?>propietario_controller/eliminar_a"><i class="fas fa-trash"></i>&nbsp;Eliminar</a>
				</button>
			</div>
		</form>		
		<br>
	</div>
	<!-- Scripts JS -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="<?php echo base_url();?>assets/mdb/js/addons/datatables.min.js"></script>
	<script>
		$(document).ready(function () {
			$('#dtBasicExample').DataTable();
			$('.dataTables_length').addClass('bs-select');
		});
	</script>
</body>
</html>