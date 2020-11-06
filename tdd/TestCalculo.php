<?php

require_once "Calculo.php";

// Crear una clase que tenga funciones que devuelvan montos
//
// calculo de descuento segun monto
//    si monto > 2000 descuento = 15%
//    si monto > 1000 descuento = 10%
//
// calculo del IVA segun monto


class TestCalculo extends PHPUnit_Framework_TestCase
{
	public function setUp() {
		$this->calculo = new Calculo();
	}

	public function testCalcularDescuentoCero() {
		// Arrange - Definir un contexto (preparar)
		$monto = 800;

		// Act = ejecuta el método que se quiere testear
		$resultado = $this->calculo->calcularDescuento($monto);

		// Assert = afirmar algo
		$this->assertEquals(0, $resultado);
	}

	public function testCalcularDescuentoMontoMayor2000() {
		// Arrange - Definir un contexto (preparar)
		$monto = 3000;

		// Act = ejecuta el método que se quiere testear
		$resultado = $this->calculo->calcularDescuento($monto);

		// Assert = afirmar algo
		$this->assertEquals(450, $resultado);
	}

	public function testCalcularDescuentoMontoMenor2000() {
		// Arrange - Definir un contexto (preparar)
		$monto = 1500;

		// Act = ejecuta el método que se quiere testear
		$resultado = $this->calculo->calcularDescuento($monto);

		// Assert = afirmar algo
		$this->assertEquals(150, $resultado);
	}

}




?>