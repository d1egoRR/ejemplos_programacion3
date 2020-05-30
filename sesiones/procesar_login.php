<?php

$usuario = $_POST['txtUsuario'];
$password = $_POST['txtPassword'];


if ($usuario == "admin" && $password == "123456") {
	session_start();
	$_SESSION["usuario"] = $usuario;
	$_SESSION["estaLogueado"] = true;
	header("location: dashboard.php");
} else {
	header("location: formulario.php?mensaje=login_incorrecto");
}


?>