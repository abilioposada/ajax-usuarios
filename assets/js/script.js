window.addEventListener('load', recargar);

function recargar () {
	var peticion = new XMLHttpRequest();

	peticion.onreadystatechange = function () {
		if (this.readyState == 4) {
			document.getElementById('cuerpo').innerHTML = this.responseText;
			asignarEventos();
		}
	};

	peticion.open('GET', 'usuarios/recargar');
	peticion.send();
}

function asignarEventos () {
	document.getElementById('btn').addEventListener('click', accion);
	var btnsEdit = document.getElementsByClassName('btnEditar');
	var btnsElim = document.getElementsByClassName('btnEliminar');

	for (var i = 0; i < btnsEdit.length; i++) {
		btnsEdit[i].addEventListener('click', actualizar);
		btnsElim[i].addEventListener('click', eliminar);
	}
}

function accion () {
	var id = document.getElementById('id').value;
	var nombre = document.getElementById('txtNombre').value;
	var apellido = document.getElementById('txtApellido').value;
	var peticion = new XMLHttpRequest();

	peticion.onreadystatechange = function () {
		if (this.readyState == 4) {
			recargar();
			borrarCampos();
			document.getElementById('btn').value = "ingresar";
			document.getElementById('btn').innerHTML = "Ingresar";
		}
	};

	var datos = 'nombre=' + nombre + "&apellido=" + apellido;

	if (this.value == "editar") {
		datos += '&id=' + id;
	}

	peticion.open('POST', 'usuarios/' + this.value);
	peticion.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
	peticion.send(datos);
}

function eliminar () {
	var peticion = new XMLHttpRequest();

	peticion.onreadystatechange = function () {
		if (this.readyState == 4) {
			recargar();
		}
	};

	peticion.open('GET', 'usuarios/eliminar/' + this.value);
	peticion.send();
}

function actualizar () {
	var peticion = new XMLHttpRequest();

	peticion.onreadystatechange = function () {
		if (this.readyState == 4) {
			document.getElementById('frm').innerHTML = this.responseText;
			recargar();
		}
	};

	peticion.open('GET', 'usuarios/actualizar/' + this.value);
	peticion.send();
}

function borrarCampos () {
	document.getElementById('txtNombre').value = '';
	document.getElementById('txtApellido').value = '';
}