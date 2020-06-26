function validarDatos() {
    /*alert(88998989898);*/
    var divMensajeError = document.getElementById("mensajeError");
    var nombre = document.getElementById("txtNombre").value;
    if (nombre.trim() == "") {
        //alert("El nombre no debe estar vacio");
        divMensajeError.innerHTML = "<font color='red'>El nombre no debe estar vacio</font><br><br>";
        return;
    }

    if (nombre.length < 3) {
        //alert("El nombre debe contener al menos 3 caracteres");
        divMensajeError.innerHTML = "<font color='red'>El nombre debe contener al menos 3 caracteres</font><br><br>";
        return;
    }

    var form = document.getElementById("frmDatos");
    form.submit();
}