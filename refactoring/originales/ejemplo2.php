<?php


function imprimirFactura() {
	// encabezado
	echo "Juan Perez S.A. <br>";
	echo "Inicio de actividad: 11/12/2005 <br><br>";
	echo "Número: 00000255 <br>";
	echo "Fecha: 13/11/2020 <br><br>";

	// cliente
	echo "Cliente: Ana Lopez <br>";
	echo "Domicilio: San Martín 887 <br><br>";

	// detalles
	echo "Producto: Yerba - $50 - Cantidad: 3 <br>";
	echo "Producto: Arroz - $65 - Cantidad: 4 <br>";
	echo "Producto: Fideos - $45 - Cantidad: 2 <br>";

}


imprimirFactura();


?>