<?php

// obtener el id de la provincia seleccionada
// devolver las localidades para que sean cargadas en el combo

$id = $_POST["id"];

/*$listadoLocalidades = Localidad::obtenerPorIdProvincia($id);

foreach ($listadoLocalidades as $localidad) {
	$options .= "<option value=$localidad->getIdLocalidad()> $localidad->getNombre() </option>";
}
*/

$options = "<option value=0>Seleccionar</option>";

if ($id == 1) {
	$options .= "<option value=1>Clorinda</option>";
	$options .= "<option value=2>Espinillo</option>";
	$options .= "<option value=3>Laguna Blanca</option>";
} else if ($id == 2) {
	$options .= "<option value=50>Resistencia</option>";
	$options .= "<option value=51>Roque Saenz P.</option>";
}


echo $options;

?>