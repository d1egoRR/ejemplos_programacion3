<?php

const PORCENTAJE_DESCUENTO_15 = 0.20;
const PORCENTAJE_DESCUENTO_10 = 0.10;
const PORCENTAJE_DESCUENTO_5 = 0.05;
const IVA = 0.25;


function montoAPagar($monto) {
	$descuento = calcularDescuento($monto);
	$montoConDescuento = $monto - $descuento;

	$iva = calcularIva($montoConDescuento);
	$montoAPagar = $montoConDescuento + $iva;

	return $montoAPagar;
}

function calcularDescuento($monto) {
	$descuento = 0;

	if ($monto >= 2000) {
		$descuento = $monto * PORCENTAJE_DESCUENTO_15;
	} else if($monto >= 1000) {
		$descuento = $monto * PORCENTAJE_DESCUENTO_10;
	} else if ($monto >= 500) {
		$descuento = $monto * PORCENTAJE_DESCUENTO_5;
	}

	return $descuento;
}

function calcularIva($montoConDescuento) {
	$iva = $montoConDescuento * IVA;
	return $iva;
}

echo montoapagar(1000);



?>