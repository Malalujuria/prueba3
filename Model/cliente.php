<?php

  require_once('modelo.php');

  class cliente extends modelo{

    protected $codigo;
    /*protected $descripcion;
    protected $precio;
    protected $fecha;*/

    public function __construct(){
      parent::__construct();
    }

    public function registro($fecha,$precio,$descripcion,$cliente){
      $sql = "INSERT INTO producto(fecha,precio,cliente,descripcion) VALUES ('$fecha','$precio','$cliente','$descripcion')";
      //('".$nombre."','".$tipo."','".$fecha."')";
      /*
      $resul = $this->db->query($sql);
      if($resul)
        echo "Fallo al Insertar!!" .$this->db->connect_errno ."</br>";
      else{
        return $resul;
      }
      $resul->close();
      $this->db->close();*/
      try{
			     $this->db->query($sql);

		  }

		  catch (Exception $e){
			     echo "There is a problem: " . $e->getMessage();
			     exit();
		  }
    }

    public function buscar($consulta){
      $salida = "";
      $sql = "SELECT * FROM producto ORDER BY fecha DESC";

      if(isset($consulta)){
        $q = $this->db->real_escape_string($consulta);
        $sql = "SELECT codigo,fecha,precio,cliente,descripcion FROM producto
                WHERE fecha LIKE '%".$q."%' OR precio LIKE '%".$q."%' OR descripcion LIKE '%".$q."%' OR
                cliente LIKE '%".$q."'";
      }
      $busca = $this->db->query($sql);

      if($busca->num_rows > 0){
        //table-striped

        while($fila = $busca->fetch_assoc()){
          $salida.="<tr>
                      <td>".$fila['fecha']."</td>
                      <td>".$fila['precio']."</td>
                      <td>".$fila['cliente']."</td>
                      <td>".$fila['descripcion']."</td>
                    </tr>";
        }

      }else{
        $salida.="<td>No Data</td>";
      }
      return $salida;
      $this->db->close();
      /*
      $resul = $busca->fetch_all(MYSQLI_ASSOC);
      if(!$resul)
        echo "Fallo al Buscar!";
      else{
        return $resul;
        $resul->close();
        $this->db->close();
      }*/
    }

    public function listar($valor){
      $sql = "SELECT * FROM producto ORDER BY fecha DESC";
      $salida = "";
      if(isset($valor)){
        switch ($valor) {
          case 'mes':
            $sql ="SELECT codigo,fecha,precio,cliente,descripcion FROM producto ORDER BY MONTH(fecha) DESC";
            break;
          case 'cliente':
            $sql ="SELECT codigo,fecha,precio,cliente,descripcion FROM producto ORDER BY cliente DESC";
            break;
          case 'mayor_precio':
            $sql ="SELECT codigo,fecha,precio,cliente,descripcion FROM producto ORDER BY precio DESC";
            break;
          case 'menor_precio':
            $sql ="SELECT codigo,fecha,precio,cliente,descripcion FROM producto ORDER BY precio ASC";
            break;
        }

      }

      $busca = $this->db->query($sql);
      if($busca->num_rows > 0){

        while($fila = $busca->fetch_assoc()){
          $salida.="<tr>
                      <td>".$fila['fecha']."</td>
                      <td>".$fila['precio']."</td>
                      <td>".$fila['cliente']."</td>
                      <td>".$fila['descripcion']."</td>
                    </tr>";
        }

      }else{
        $salida.= "No Data";
      }
      return $salida;
      $this->db->close();
      /*
      $resul = $usuario->fetch_all(MYSQLI_ASSOC);//fetch_all(MYSQLI_ASSOC);

      if(!$resul)
        echo "Fallo al Buscar!";
      else{
        return $resul;
        $resul->close();
        $this->db->close();
      }*/
    }

  }


?>
