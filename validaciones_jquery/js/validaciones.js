

function validarDatos() {
    var divMensajeError = $("#mensajeError");
    var nombre = $("#txtNombre").val();

    if (nombre.trim() == "") {
        divMensajeError.html("<font color='red'>El nombre no debe estar vacio</font><br><br>");
        return;
    }

    if (nombre.length < 3) {
        divMensajeError.html("<font color='red'>El nombre debe contener al menos 3 caracteres</font><br><br>");
        return;
    }

    var form = $("#frmDatos");
    form.submit();
}