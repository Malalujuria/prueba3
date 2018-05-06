$(buscar_datos());
$(imprimir_todo());

function buscar_datos(consulta){
  $.ajax({
    url: '../Controller/buscar.php',
    type: 'POST',
    dataType: 'html',
    data: {consulta: consulta}
  })
  .done(function(respuesta) {
    $("#datos").html(respuesta);
  })
  .fail(function() {
    console.log("error");
  })
}

function imprimir_todo(consul){
  $.ajax({
    url: '../Controller/listar.php',
    type: 'POST',
    dataType: 'html',
    data: {consul: consul}
  })
  .done(function(res) {
    $("#datos1").html(res);
  })
  .fail(function() {
    console.log("error");
  })
}
//Lo llamo afuera del .ready por ser objeo particular
$('#lis').change(function(event) {
  var sel = $(this).val();
  imprimir_todo(sel);
});


$(document).ready(function() {
    //acomoda el Body luego del Header
    $(document.body).css('padding-top', $('#topnavbar').height() + 10);
      $(window).resize(function(){
          $(document.body).css('padding-top', $('#topnavbar').height() + 10);
    });
    $("#buscargar").on('click',function(e){
      //event.preventDefault();
      $('#cargar').load('busca1.php');
    });
    $("#ajax_agrega").on('click',function(e){
      //event.preventDefault();
      $("#cargar").load('agrega1.php',function() {
        $("#my_fecha").focus();
      });
    });
    $("#ajax_listar").on('click',function(e){
      //event.preventDefault();
        $('#cargar').load('lista1.php');
    });

});

$('#myForm').on('submit', function(event) {
  //event.preventDefault();
  window.location.reload();
  $('#cargar').load('lista1.php');

});
/*
jQuery.fn.preventDoubleSubmission = function() {
  $(this).on('submit',function(e){
    var $form = $(this);

    if ($form.data('submitted') === true) {
      // Previously submitted - don't submit again
      e.preventDefault();
    } else {
      // Mark it so that the next submit can be ignored
      $form.data('submitted', true);
    }
  });

  // Keep chainability
  return this;
};*/
//SBIR FORM
/*
$("#myForm").on('submit',function(event) {
  event.preventDefault();
  var fecha = $("#my_fecha").val();
  var precio = $("#precio").val();
  var check = $("#my_check").val();
  var cliente = $("#cliente").val();
  var des = $("#descripcion").val();

  if(precio == ""){
    $('#boton').hide();
  }else{
    $.ajax({
      url: '../Controller/agregar.php',
      type: 'POST',
      data: { precio: precio,
        descripcion: des,
        myCheckbox: check,
        cliente: cliente,
        fecha: fecha
      }
    })
    .done(function(data) {
      $("#myForm").off('submit')
      $('#cargar').load('lista1.php');
    })
    .fail(function() {
      alert("error");
    })
  }
});
*/
/*
function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("myTable");
  switching = true;
  //Set the sorting direction to ascending:
  dir = "asc";
  //Make a loop that will continue until no switching has been done:
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.getElementsByTagName("TR");
    //Loop through all table rows (except the first, which contains table headers):
    for (i = 1; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      //Get the two elements you want to compare,one from current row and one from the next:
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      //check if the two rows should switch place, based on the direction, asc or desc:
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch= true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch= true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      //If a switch has been marked, make the switch and mark that a switch has been done:
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      //Each time a switch is done, increase this count by 1:
      switchcount ++;
    } else {
      //If no switching has been done AND the direction is "asc"  set the direction to "desc" and run the while loop again.
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}
*/
function check(){
  var x = document.getElementById('my_check');
  if(x.checked==true){
    document.getElementById("my_fecha").setAttribute("disabled","true");
  }else {
    document.getElementById("my_fecha").removeAttribute("disabled");
  }
}
/*
$($(document).ready(function() {
  $('#myForm').bootstrapValidation({
    feedBackIcons: {
      valid: 'glyphicon glyphicon-ok',
      invalid: 'glyphicon glyphicon-remove',
      validating: 'glyphicon glyphicon-refresh'
    }.
    field: {
      fecha: {
        validators: {
          date :{
            format: 'AAAA-MM-DD',
            message: 'not valid'
          }
        }
      }
      precio: {
        validators: {
          stringLenght: {
            min: 2,
          },
          notEmpty: {
            message: 'Colocar nombre'
          }
        }
      }
      descripcion: {
        validators: {
          stringLenght: {
            min: 2,
          },
          notEmpty: {
            message: 'descripcion'
          }
        }
      }
    }
  })
});)
*/
