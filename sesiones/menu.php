<?php

session_start();

if (!isset($_SESSION["estaLogueado"])) {
	header("location: formulario.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    MENU PRINCIPAL
</body>
</html>