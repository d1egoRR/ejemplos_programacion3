<?php


class Calculo
{
	public function calcularDescuento($monto) {
		$descuento = 0;
		if ($monto > 2000) {
			$descuento = ($monto / 100) * 15;
		} else if ($monto > 1000) {
			$descuento = ($monto / 100) * 10;
		}
		return $descuento;
	}

	public function calcularIva($monto) {
		if ($monto <= 0) {
			return 0;
		}
		$iva = $monto * 0.21;
		return $iva;
	}
}


?>