
function procesarForm() {

    var nombre = document.getElementById("txtNombre").value;
    if (nombre.trim() == "") {
        alert("error, nombre no dbee estar vacio");
        return;
    }

    var form = document.getElementById("frmDatos");
    form.submit();

}