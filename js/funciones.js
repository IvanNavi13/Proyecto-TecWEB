$(buscar_datos(""));

$(document).ready(function () {
  $(".eliminar").click(function () {
    console.log("eliminar");
    borrar_datos($(this).attr("id"));
  });
});

function borrar_datos(id) {
  $.ajax({
    url: "../php/funciones_crud.php",
    type: "POST",
    datatype: "html",
    data: { id: id, opcion: "eliminar" },
  })
    .done(function () {
      console.log("eleminar");
      buscar_datos("");
    })
    .fail(function () {
      console.log("error");
    });
}

function buscar_datos(consulta) {
  $.ajax({
    url: "../php/funciones_crud.php",
    type: "POST",
    datatype: "html",
    data: { consulta: consulta, opcion: "consulta" },
  })
    .done(function (respuesta) {
      $("#data").html(respuesta);
    })
    .fail(function () {
      console.log("error");
    });
}

$(document).on("keyup", "#search", function () {
  var valor = $(this).val();
  if (valor != "") buscar_datos(valor);
  else buscar_datos("");
});
