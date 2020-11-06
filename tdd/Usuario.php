<?php

require_once 'Persona.php';


class Usuario extends Persona
{
	private $_username;
	private $_password;

	public function login($username, $password) {
		if ($username == 'user1' && $password == 'user1') {
			return true;
		} else {
			return false;
		}
	}

}


?>