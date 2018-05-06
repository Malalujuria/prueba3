<?php

require_once "../Model/cliente.php";
error_reporting(0);

$bus = new cliente();
$consulta = $_POST['consulta'];

$resultado = $bus->buscar($consulta);

echo $resultado;

?>
