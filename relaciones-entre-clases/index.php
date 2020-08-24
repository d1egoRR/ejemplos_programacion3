<?php

require_once 'Modulo.php';
require_once 'Perfil.php';
require_once 'Usuario.php';



$modulo1 = new Modulo("Facturacion");
$modulo2 = new Modulo("Seguridad");
$modulo3 = new Modulo("Dashboard");

$perfilAdmin = new Perfil("ADMIN");

$perfilAdmin->agregarModulo($modulo1);
$perfilAdmin->agregarModulo($modulo2);
$perfilAdmin->agregarModulo($modulo3);


$user1 = new Usuario("driquelme", "11/12/2019");
$user1->setPerfil($perfilAdmin);


//highlight_string(var_export($user1, true));

echo $user1->perfil->getDescripcion();


?>