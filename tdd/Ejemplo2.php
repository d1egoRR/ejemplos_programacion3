<?php


class TestEjemplo extends PHPUnit_Framework_TestCase {

	public function testSuma() {
		// contexto - Arrange
		$a = 5;
		$b = 20;

		// Action
		$suma = $a + $b;

		// Afirmación - Assert
		$this->assertEquals($suma, 25);

	}

	public function testResta() {
		// contexto - Arrange
		$a = 5;
		$b = 20;

		// Action
		$resta = $a - $b;

		// Afirmación - Assert
		$this->assertEquals($resta, -15);

	}

	public function testBoolean() {
		// contexto - Arrange
		$x = false;

		// Afirmación - Assert
		$this->assertFalse($x);

	}

    public function testSample()
    {
    	$arrNumeros = [1, 2, 3, 4];

        $this->assertContains(4, $arrNumeros);
    }

}


?>