<?php
foreach ($usuarios as $usuario) {
	?>
	<tr>
		<td><?= $usuario->Nombre ?></td>
		<td><?= $usuario->Apellido ?></td>
		<td><button class="btnEditar" value="<?= $usuario->Id ?>">Editar</button></td>
		<td><button class="btnEliminar" value="<?= $usuario->Id ?>">Eliminar</button></td>
	</tr>
	<?php
}