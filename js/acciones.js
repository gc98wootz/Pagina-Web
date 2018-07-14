$(document).ready(documentoCargado)

function documentoCargado(){
  // el id llevado al Js es #

  $("#formu-registro").submit(registrarUsuario)
  $("#formu-inicio").submit(inicioSesion)
  $("#formu-nuevoAviso").submit(nuevoAviso)

}


function registrarUsuario(e){
  e.preventDefault()//para evitar que la pagina se recarge
  var datos = $("#formu-registro").serialize()
  $.ajax({
    url: "admin/controlador.php",
    type: "POST",
    data: datos,
    beforeSend: function(){
      $("#msnEstadoRegistro").html("<img src='img/cargando.gif'>")
    },
    //sera el estado luego de ejecutar la accion de envio de datos atraves del metodo al archivo asignado
    success: function (res){
      $("#msnEstadoRegistro").html(res)
    }
  })
}

function inicioSesion(e){
  e.preventDefault()//para evitar que la pagina se recarge
  var datos = $("#formu-inicio").serialize()
  $.ajax({
    url: "admin/controlador.php",
    type: "POST",
    data: datos,
    beforeSend: function(){
      $("#msnInicio").html("<img src='img/cargando.gif'>")
    },
    //sera el estado luego de ejecutar la accion de envio de datos atraves del metodo al archivo asignado
    success: function (res){
        if(res == 1){
          //incia sesion
          window.location = "admin/prueba.php"
        }else{
          $("#msnInicio").html(res)
        }
    }
  })
}

function nuevoAviso(e){
  e.preventDefault()//para evitar que la pagina se recarge
  var datos = new FormData($("#formu-nuevoAviso")[0])
  $.ajax({
    url: "controlador.php",
    type: "POST",
    data: datos,
    contentType: false,//en true: permite que los valores viajen como encabezado
    processData: false,//en true: hace que los valores se transformen en cadena de texto
    beforeSend: function(){
      $("#msnNuevoAviso").html("<p>Buen Trabajo</p>")
      //printf(SI :D)
    },
    //sera el estado luego de ejecutar la accion de envio de datos atraves del metodo al archivo asignado
    success: function (res){
      $("#msnNuevoAviso").html(res)

    }
  })
}
