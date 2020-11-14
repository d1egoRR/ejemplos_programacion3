<?php



class Persona
{
	private $_nombre;
	private $_apellido;
	private $_estado;

	const ACTIVO = 1;
	const INACTIVO = 2;

	public function __construct($nombre, $apellido) {
		$this->_nombre = $nombre;
		$this->_apellido = $apellido;
		$this->_estado = self::ACTIVO;
	}

	public function getEstado() {
		return $this->_estado;
	}

	public function estaActivo() {
		return $this->_estado == self::ACTIVO;
	}

}


$juan = new Persona("juan", "perez");

if ($juan->estaActivo()) {
	echo "esta activo";
}


?>