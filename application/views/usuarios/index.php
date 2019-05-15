<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Usuarios</title>
</head>
<body>
	<h1>Usuarios</h1>
	<div id="frm">
		<input type="hidden" id="id" />
		<input id="txtNombre" placeholder="Nombre" />
		<input id="txtApellido" placeholder="Apellido" />
		<button id="btn" value="ingresar">Ingresar</button>
	</div>
	<table border="1">
		<thead><!-- Encabezado -->
			<tr>
				<th>Nombres</th>
				<th>Apellidos</th>
				<th colspan="2">Opciones</th>
			</tr>
		</thead>
		<tbody id="cuerpo"><!-- Cuerpo -->
		</tbody>
	</table>
	<script src="<?= base_url('assets/js/script.js') ?>"></script>
</body>
</html>