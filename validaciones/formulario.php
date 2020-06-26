<html>
    <head></head>
    <body>

        <div align="center">

            <form name="frmDatos" method="POST" action="procesar.php">
                Nombre: <input type="text" name="txtNombre">
                <br><br>
                Apellido: <input type="text" name="txtApellido">
                <br><br>
                Fecha Nacimiento: <input type="date" name="txtFechaNacimiento">
                <br><br>
                Celular: <input type="number" name="txtCelular">
                <br><br>
                Sexo: 
                <select name="cboSexo">
                    <option value="0">Seleccionar</option>
                    <option value="F">Femenino</option>
                    <option value="M">Masculino</option>
                </select>
                <br><br>
                <input type="submit" value="Guardar">
            </form>

        </div>

    </body>
</html>