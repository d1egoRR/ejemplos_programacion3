<?php


class Perfil {
	

	private $_descripcion;
	private $_arrModulos;

	function __construct($descripcion)
	{
		$this->_descripcion = $descripcion;
	}

	public function agregarModulo($modulo) {
		$this->_arrModulos[] = $modulo;
	}

	public function getModulos() {
		return $this->_arrModulos;
	}

    /**
     * @return mixed
     */
    public function getDescripcion()
    {
        return $this->_descripcion;
    }

    /**
     * @param mixed $_descripcion
     *
     * @return self
     */
    public function setDescripcion($_descripcion)
    {
        $this->_descripcion = $_descripcion;

        return $this;
    }

    public function __toString() {
    	return $this->_descripcion;
    }
}


?>