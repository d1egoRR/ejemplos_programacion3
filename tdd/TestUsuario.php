<?php

require_once "Usuario.php";


class TestUsuario extends PHPUnit_Framework_TestCase
{
	public function setUp() {
		$this->user = new Usuario('Sergio', 'Cuevas');
	}

    public function tearDown() {
    	//delete $this->user;
    }

    public function testLoginOk() {
    	// context
    	$username = 'user1';
    	$password = 'user1';

    	// act
    	$resultado = $this->user->login($username, $password);

    	$this->assertTrue($resultado);
    }

    public function testLoginFalla() {
    	// context
    	$username = 'user2';
    	$password = 'user2';

    	// act
    	$resultado = $this->user->login($username, $password);

    	$this->assertFalse($resultado);

    	// context
    	$username = 'user1';
    	$password = 'user2';

    	// act
    	$resultado = $this->user->login($username, $password);

    	$this->assertFalse($resultado);
    }

    public function testEstaActivo() {
    	$activo = $this->user->estaActivo();

    	$this->assertTrue($activo);
    }

    public function testEstaInactivo() {

    	$this->user->eliminar();
    	$activo = $this->user->estaActivo();

    	$this->assertFalse($activo);
    }
}


?>