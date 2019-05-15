<?php
class Usuarios extends CI_Controller {
	public function index () {
		$this->load->view('usuarios/index');
	}

	public function recargar () {
		$a = ['usuarios' => $this->usuariosModel->obtener()];
		$this->load->view('usuarios/tabla', $a);
	}

	public function ingresar () {
		$a = [$_POST['nombre'], $_POST['apellido']];
		$this->usuariosModel->ingresar($a);
	}

	public function eliminar ($id) {
		$this->usuariosModel->eliminar($id);
	}

	public function actualizar ($id) {
		$a = ['usuario' => $this->usuariosModel->obtenerPorId($id)];
		$this->load->view('usuarios/form', $a);
	}

	public function editar () {
		$a = [$_POST['nombre'], $_POST['apellido'], $_POST['id']];
		$this->usuariosModel->editar($a);
	}
}