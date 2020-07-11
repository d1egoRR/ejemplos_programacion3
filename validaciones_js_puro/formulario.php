<?php

session_start();

?>

<html>

    <head>
        
        <title>Ejemplo de validacion</title>

        <script type="text/javascript" src="js/validaciones.js"></script>

    </head>

    <body>

        <div align="center">

            <?php if (isset($_SESSION['mensaje_error'])) : ?>

                <font color="red">
                    <?php echo $_SESSION['mensaje_error'] ?>
                </font>

                <br><br>

            <?php
                    unset($_SESSION['mensaje_error']);
                endif;
            ?>

            <div id="mensajeError"></div>

            <form name="frmDatos" id="frmDatos" method="POST" action="procesar.php">
                Nombre: <input type="text" name="txtNombre" id="txtNombre" maxlength="15">
                <br><br>
                Apellido: <input type="text" name="txtApellido" id="txtApellido">
                <br><br>
                Fecha Nacimiento: <input type="date" name="txtFechaNacimiento">
                <br><br>
                Celular (370): <input type="number" name="txtCelular">
                <br><br>
                Sexo: 
                <select name="cboSexo" id="cboSexo">
                    <option value="0">Seleccionar</option>
                    <option value="1">Femenino</option>
                    <option value="2">Masculino</option>
                </select>
                <br><br>
                <input type="button" value="Guardar" onclick="validarDatos();">
            </form>

        </div>

    </body>
</html>