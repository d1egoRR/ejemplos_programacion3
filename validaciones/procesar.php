<?php

session_start();

$nombre = $_POST['txtNombre'];
$apellido = $_POST['txtApellido'];
$fechaNacimiento = $_POST['txtFechaNacimiento'];
$celular = $_POST['txtCelular'];
$sexo = $_POST['cboSexo'];

// empty() <-- true or false

if (empty(trim($nombre))) {
	$_SESSION['mensaje_error'] = "el nombre no debe estar vacio";
	header("location: formulario.php");
	exit;
}

if (strlen(trim($nombre)) < 3) {
	$_SESSION['mensaje_error'] = "el nombre debe contener al menos 3 caracteres";
	header("location: formulario.php");
	exit;
}

if ((int) $sexo == 0) {
	$_SESSION['mensaje_error'] = "debe seleccionar el sexo";
	header("location: formulario.php");
	exit;
}

echo "DATOS CORRECTOS. PUEDE GUARDARLOS EN LA BD.";

?>