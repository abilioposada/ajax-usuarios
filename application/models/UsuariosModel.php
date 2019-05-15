<?php
class UsuariosModel extends CI_Model {
	public function obtener () {
		return $this->db->get('usuarios')->result();
	}

	public function ingresar ($a) {
		$s = "INSERT INTO usuarios (Nombre, Apellido) VALUES (?, ?)";
		$this->db->query($s, $a);
	}

	public function eliminar ($id) {
		$this->db->query("DELETE FROM usuarios WHERE Id = $id");
	}

	public function obtenerPorId ($id) {
		return $this->db->query("SELECT * FROM usuarios WHERE Id = $id")->row();
	}

	public function editar ($a) {
		$s = "UPDATE usuarios SET Nombre = ?, Apellido = ? WHERE Id = ?";
		$this->db->query($s, $a);
	}
}