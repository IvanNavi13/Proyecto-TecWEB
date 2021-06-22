<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulario</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../styles/form.css" />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div class="container-xl">
      <div
        id="encabezado"
        class="
          row
          px-5
          py-2
          g-2
          my-4
          justify-content-center justify-content-md-between
        "
      >
        <img
          class="d-none d-md-block"
          style="width: 100px"
          src="../images/logoIpn.png"
          alt=""
        />
        <div
          class="
            w-auto
            d-flex
            flex-column
            align-items-center
            justify-content-center
          "
        >
          <span class="fs-6 text-center">INSTITUTO POLITÉCNICO NACIONAL</span>
          <span class="text-center">"TÉCNICA AL SERVICIO DE LA PATRIA"</span>
          <span class="text-center">ESCUELA SUPERIOR DE CÓMPUTO</span>
        </div>
        <img
          class="d-none d-md-block"
          style="width: 100px"
          src="../images/logoEscom.png"
          alt=""
        />
      </div>

      <form action="./validando.php" method="POST" class="row p-4 g-2 my-4">
        <h2 class="text-white">Identidad</h2>
        <div class="col-lg-12">
          <label for="boleta" class="form-label">No. De Boleta</label>
          <input
          required
            type="text"
            class="form-control"
            id="boleta"
            name="boleta"
            placeholder="No. De Boleta"
          />
        </div>
        <div class="col-lg-4">
          <label for="nombre" class="form-label">Nombre(S)</label>
          <input required type="text" class="form-control" id="nombre" name="nombre" />
        </div>
        <div class="col-lg-4">
          <label for="paterno" class="form-label">Apellido Paterno</label>
          <input required type="text" class="form-control" id="paterno" name="paterno" />
        </div>
        <div class="col-lg-4">
          <label for="materno" class="form-label">Apellido Materno</label>
          <input required type="text" class="form-control" id="materno" name="materno" />
        </div>
        <div class="col-sm-12 col-lg-4">
          <label for="fechaNacimiento" class="form-label">Fecha de Nacimiento:</label>
          <input required type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento" />
        </div>
        <div
          class="
            col-sm-12 col-lg-8
            pb-sm-3
            px-5
            mt-md-5
            d-flex
            flex-column flex-md-row
            justify-content-between
          "
        >
          <span class="text-white">Género:</span>
          <div  id="genero" name="genero" class="form-check form-check-inline">
            <input
              required
              class="form-check-input"
              type="radio"
              name="genero"
              id="masculino"
              name="masculino"
              value="Masculino"
            />
            <label class="form-check-label" for="masculino">Masculino</label>
          </div>
          <div class="form-check form-check-inline">
            <input
              required
              class="form-check-input"
              type="radio"
              name="genero"
              id="femenino"
              name="femenino"
              value="Femenino"
            />
            <label class="form-check-label" for="femenino">Femenino</label>
          </div>
          <div class="form-check form-check-inline">
            <input
              required
              class="form-check-input"
              type="radio"
              name="genero"
              id="otro"
              name="otro"
              value="Otro"
            />
            <label class="form-check-label" for="otro">Otro</label>
          </div>
        </div>
        <div class="col-lg-12">
          <label for="materno" class="form-label">CURP</label>
          <input required type="text" class="form-control" id="curp" name="curp" />
        </div>
        <h2 class="mt-4 text-white">Contacto</h2>
        <div class="col-lg-4">
          <label for="calle" class="form-label">Calle y Número</label>
          <input required type="text" class="form-control" id="calle" name="calle" />
        </div>
        <div class="col-lg-4">
          <label for="colonia" class="form-label">Colonia</label>
          <input required type="text" class="form-control" id="colonia" name="colonia" />
        </div>
        <div class="col-lg-4">
          <label for="cp" class="form-label">Código Postal</label>
          <input required type="number" class="form-control" id="cp" name="cp" control="false" />
        </div>
        <div class="col-lg-6">
          <label for="tel" class="form-label">Teléfono o Celular</label>
          <input required type="tel" class="form-control" id="tel" name="tel" />
        </div>
        <div class="col-lg-6">
          <label for="email" class="form-label">Correo Electrónico</label>
          <input required type="email" class="form-control" id="email" name="email" control="emial" />
        </div>
        <h2 class="mt-4 text-white">Procendencia</h2>
        <div class="col-lg-6">
          <label for="escuela" class="form-label">Escuela de Procedencia</label>
          <select required class="form-select" id="escuela" name="escuela">
            <option value="" selected>Selecciona una escuela...</option>
            <option  value="01" >CECyT No. 1 "Gonzalo Vázquez Vela"</option>
            <option  value="02" >CECyT No. 2 "Miguel Bernard"</option>
            <option  value="03">CECyT No. 3 "Estanislao Ramírez Ruiz"</option>
            <option  value="04">CECyT No. 4 "Lázaro Cárdenas"</option>
            <option  value="05">CECyT No. 5 "Benito Juárez García"</option>
            <option  value="06">CECyT No. 6 "Miguel Othón de Mendizábal"</option>
            <option  value="07">CECyT No. 7 "Cuauhtémoc"</option>
            <option  value="08">CECyT No. 8 "Narciso Bassols García"</option>
            <option  value="09">CECyT No. 9 "Juan de Dios Bátiz"</option>
            <option  value="10">CECyT No. 10 "Carlos Vallejo Márquez"</option>
            <option  value="11">CECyT No. 11 "Wilfrido Massieu Pérez"</option>
            <option  value="12">CECyT No. 12 "José María Morelos y Pavón"</option>
            <option  value="13">CECyT No. 13 "Ricardo Flores Magón"</option>
            <option  value="14">CECyT No. 14 "Luis Enrique Erro"</option>
            <option  value="15">CECyT No. 15 "Diódoro Antúnez Echegaray"</option>
            <option  value="16">CECyT No. 16 "Hidalgo"</option>
            <option  value="17">CECyT No. 17 "León-Guanajuato"</option>
            <option  value="18">CECyT No. 18 "Zacatecas"</option>
            <option  value="19">CET No. 1 "Walter Cross Buchanan"</option>
            <option  value="20">Otra...</option>
          </select>
        </div>
        <div class="otro col-lg-6">
          <label for="otros" class="form-label">Indique cual es:</label>
          <input  type="text" class="form-control" id="otros" name="otros" />
        </div>
        <div class="col-lg-6">
          <label for="entidad" class="form-label">Entidad Federativa</label>
          <select required class="form-select" id="entidad" name="entidad">
            <option value="" selected>Selecciona una Entidad Federativa...</option>
            <option  value="01" >Aguascalientes</option>
            <option  value="02">Baja California</option>
            <option  value="03">Baja California Sur</option>
            <option  value="04">Campeche</option>
            <option  value="05">Coahuila</option>
            <option  value="06">Colima</option>
            <option  value="07">Chiapas</option>
            <option  value="08">Chihuahua</option>
            <option  value="09">Ciudad de México</option>
            <option  value="10">Durango</option>
            <option  value="11">Estado de México</option>
            <option  value="12">Guanajuato</option>
            <option  value="13">Guerrero</option>
            <option  value="14">Hidalgo</option>
            <option  value="15">Jalisco</option>
            <option  value="16">Michoacán</option>
            <option  value="17">Morelos</option>
            <option  value="18">Nayarit</option>
            <option  value="19">Nuevo León</option>
            <option  value="20">Oaxaca</option>
            <option  value="21">Puebla</option>
            <option  value="22">Querétaro</option>
            <option  value="23">Quintana Roo</option>
            <option  value="24">San Luis Potosí</option>
            <option  value="25">Sinaloa</option>
            <option  value="26">Sonora</option>
            <option  value="27">Tabasco</option>
            <option  value="28">Tamaulipas</option>
            <option  value="29">Tlaxcala</option>
            <option  value="30">Veracruz</option>
            <option  value="31">Yucatán</option>
            <option  value="32">Zacatecas</option>
          </select>
        </div>
        <div class="col-lg-6">
          <label for="promedio" class="form-label">Promedio</label>
          <input required value="" type="number" step="0.01" class="form-control" id="promedio" name="promedio" value="0.0" />
        </div>
        <div class="col-lg-6">
          <label for="opcion" class="form-label">ESCOM Fue Tu</label>
          <select required class="form-select" id="opcion" name="opcion">
            <option value="" selected>Selecciona una Opci&oacute;n...</option>
            <option >1era Opci&oacute;n</option>
            <option >2da Opci&oacute;n</option>
            <option >3era Opci&oacute;n</option>
            <!-- <option >Opci&oacute;n</option> -->
          </select>
        </div>
        <div class="col-12 d-flex justify-content-center">
          <button type="submit" class="mt-4 w-50 btn btn-primary">
            Enviar
          </button>
        </div>
      </form>
    </div>
    <script>
      const escuela = document.getElementById("escuela");
      const otro = document.getElementsByClassName("otro");

      escuela.onchange = function () {
        if (escuela.value == "20") {
          otro[0].classList.add("active");
        } else {
          otro[0].classList.remove("active");
        }
      };
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
  </body>
</html>
