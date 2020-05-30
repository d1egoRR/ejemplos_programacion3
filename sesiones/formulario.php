<?php

$mensaje = "";

if (isset($_GET['mensaje'])) {

    switch ($_GET['mensaje']) {
        case 'login_incorrecto':
            $mensaje = "Usuario o Password incorrecto.";
            break;
    }

}


?>



<html>
    <head></head>
    <body>

        <?php echo $mensaje; ?>
        <br>

        <form method="POST" action="procesar_login.php">
            <input type="text" name="txtUsuario">
            <br><br>
            <input type="password" name="txtPassword">
            <br><br>
            <input type="submit" value="Iniciar Sesion">
        </form>

    </body>
</html>