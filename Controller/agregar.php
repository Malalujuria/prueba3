<?php

  require_once "../Model/cliente.php";
  $fecha = $precio = $descripcion = $checkBox = $cliente = "";

  $precio = $_POST['precio'];
  $descripcion = $_POST['descripcion'];
  $checkBox = $_POST['myCheckbox'];
  $cliente = $_POST['cliente'];

  if(isset($checkBox) && ($checkBox=="FA")){
    $fecha = date('Y-m-d H:i:s');
  }else{
    $fecha = $_POST['fecha'];
  }

  if(isset($precio)){
      $clienteObj = new cliente();
      $reg = $clienteObj->registro($fecha,$precio,$descripcion,$cliente);
  }
  //para ver diff
  /*if(!$reg)
    header("location:../View/index.php");
    //echo "Exito en PHP";
  else {
    echo "Fallo en Agregar.php...";
  }*/
  return $reg;

?>
