<?php



class Persona
{
	private $_nombre;
	private $_apellido;
	private $_estado;

	public function __construct($nombre, $apellido) {
		$this->_nombre = $nombre;
		$this->_apellido = $apellido;
		$this->_estado = 1;
	}

}


$p = new Persona("juan", "perez");


?>