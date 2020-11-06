<?php

class Persona {

	protected $_nombre;
	protected $_apellido;
	protected $_estado;

	const ACTIVO = 1;
	const INACTIVO = 2;

	public function __construct($nombre, $apellido) {
		$this->_nombre = $nombre;
		$this->_apellido = $apellido;
		$this->_estado = self::ACTIVO;
	}

	public function estaActivo() {
		return $this->_estado == self::ACTIVO;
	}

	public function eliminar() {
		$this->_estado = self::INACTIVO;
	}

}

?>