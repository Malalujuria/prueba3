<?php

require_once "../Model/cliente.php";
error_reporting(0);

$selector = "";
$selector = $_POST['consul'];

//echo "HOLA + ".$selector;
$lis = new cliente();

$resultado = $lis->listar($selector);

echo $resultado;

?>
