<?php


class Usuario
{

	private $_idUsuario;
	private $_username;
	private $_password;
	private $_idPerfil;
	private $_fechaUltimoLogin;
	
	function __construct($username, $fechaUltimoLogin)
	{
		$this->_username = $username;
		$this->_fechaUltimoLogin = $fechaUltimoLogin;
	}

    /**
     * @return mixed
     */
    public function getPerfil()
    {
        return $this->perfil;
    }

    /**
     * @param mixed $_perfil
     *
     * @return self
     */
    public function setPerfil($perfil)
    {
        $this->perfil = $perfil;

        return $this;
    }
}


?>