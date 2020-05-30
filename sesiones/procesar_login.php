<?php

$username = $_POST['txtUsuario'];
$password = $_POST['txtPassword'];


/*
$usuario = Usuario::login($username, $password);

if ($usuario->estaLogueado()) {
	session_start();
}
*/

if ($usuario == "admin" && $password == "123456") {
	session_start();
	$_SESSION["usuario"] = $usuario;
	$_SESSION["estaLogueado"] = true;
	header("location: dashboard.php");
} else {
	header("location: formulario.php?mensaje=login_incorrecto");
}


?>