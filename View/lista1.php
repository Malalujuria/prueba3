<br>
    <div class="row">
      <label class="col-md-1 control-label"></label>
      <label class="col-md-1 control-label">Ordenar</label>
      <div class="col-md-5 control-label">
          <select class="form-control" name="selector" id="lis">
            <option value="anio">defecto año</option>
            <option value="mes">mes</option>
            <option value="cliente">cliente</option>
            <option value="menor_precio">menor precio</option>
            <option value="mayor_precio">mayor precio</option>
          </select>
        <br>
      </div>
    </div>

    <div class="container" id="datos3">
      <table class="table table-hover">
          <thead class="inverse">
            <tr>
              <td>Fecha</td>
              <td>Precio</td>
              <td>Cliente</td>
              <td>Descripcion</td>
            </tr>
          </thead>
          <tbody id="datos1">

          </tbody>
      </table>
    </div>
    <div class="panel-footer">
        <div class="row">
          <div class="col-lg-9">
            <nav aria-label="Page navigation" class="text-center">
              <ul class="pagination">
                <li><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
  <script src="main.js"></script>
