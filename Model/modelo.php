<?php

require_once('config.php');

class modelo{
  protected $db;

  public function __construct(){
    $this->db = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    if($this->db->connect_errno){
      echo "Fallo al conectar a la Base de Datos!!" . $this->db->connect_errno;
      return;
    }
    $this->db->set_charset(DB_CHARSET);
  }

}

?>
