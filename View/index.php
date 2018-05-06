<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <!--[if lt IE 9]>
      <script src="https://cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <nav class="navbar navbar-inverse navbar-fixed-top" id="topnavbar">
        <div class="container-fluid">
          <ul class="nav navbar-nav">
            <li role="presentation" class="active"><a href="#" id="ajax_agrega">Agregar</a></li>
            <li role="presentation"><a id="buscargar" href="#">Buscar</a></li>
            <li role="presentation"><a id="ajax_listar" href="#">Listar</a></li>
          </ul>
        </div>
      </nav>

      <!--<div class="page-header">
      <ul class="nav nav-pills" align="center">
        <li role="presentation" class="active"><a href="#" id="ajax_agrega">Agregar</a></li>
        <li role="presentation"><a id="buscargar" href="#">Buscar</a></li>
        <li role="presentation"><a id="ajax_listar" href="#">Listar</a></li>
      </ul>
    </div>-->

      <div class="container" id="cargar"></div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="main.js"></script>

  </body>
</html>
