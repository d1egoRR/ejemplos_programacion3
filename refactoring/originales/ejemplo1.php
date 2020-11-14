<?php

function montoapagar($m) {
	$d = 0;

	if ($m >= 2000) {
		$d = $m * 0.15;
	} else if($m >= 1000) {
		$d = $m * 0.10;
	} else if ($m >= 500) {
		$d = $m * 0.05;
	}

	$m = $m - $d;
	$iva = $m * 0.21;
	$m = $m + $iva;

	return $m;
}


echo montoapagar(1000);



?>