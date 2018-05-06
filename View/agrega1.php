<br>
  <div class="container">
    <h2>Agregar</h2>
    <form class="well form-horizontal" action="../Controller/agregar.php" method="post" id="myForm"><!-- action="../Controller/agregar.php" method="post" -->
      <!-- action="../Controller/agregar.php"  -->
      <div class="form-group" id="formulario">
        <label class="col-md-1 control-label">Fecha:</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
            <input type="text" class="form-control" id="my_fecha" placeholder="eg: aaaa-mm-dd" name="fecha">
            <span class="input-group-addon">
            <input id="my_check" onclick="check();" name="myCheckbox" type="checkbox" value="FA">Fecha Actual
          </div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-1 control-label">Precio</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-euro"></i></span>
            <input type="precio" class="form-control" id="precio" placeholder="$$" name="precio">
          </div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-1 control-label">Cliente:</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
            <input type="cliente" class="form-control" id="cliente" placeholder="cliente" name="cliente">
          </div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-1 control-label">Descripcion:</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
            <input type="descripcion" class="form-control" id="descripcion" placeholder="descripcion" name="descripcion">
          </div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-1 control-label"></label>
        <div class="col-md-4 inputGroupContainer">
          <button id="boton" type="submit" class="btn btn-warning btn-block active"> Guardar <span class="glyphicon glyphicon-floppy-disk"></span></button>
        </div>
      </div>

    </form>
  </div>
  <!--<script src="prueba.js"></script>-->
  <script src="main.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
