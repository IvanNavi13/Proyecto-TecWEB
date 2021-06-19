<?php
     // conexion a la base de datos  
    include( './database.php');
    $db = new database();
    $db->obtenerConexion();
    $a = $db->rAlumno("2020630401");
?>

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

      <form action="../validando.php" method="POST" class="row p-4 g-2 my-4">
        <h2 class="text-white">Identidad</h2>
        <div class="col-lg-12">
          <label for="boleta" class="form-label">No. De Boleta</label>
          <input
            value="<?php echo $a[0] ?>"
            type="text"
            class="form-control"
            id="boleta"
            name="boleta"
            placeholder="No. De Boleta"
          />
        </div>
        <div class="col-lg-4">
          <label for="nombre" class="form-label">Nombre(S)</label>
          <input value="<?php echo $a[1] ?>" type="text" class="form-control" id="nombre" name="nombre" />
        </div>
        <div class="col-lg-4">
          <label for="paterno" class="form-label">Apellido Paterno</label>
          <input value="<?php echo $a[2] ?>" type="text" class="form-control" id="paterno" name="paterno" />
        </div>
        <div class="col-lg-4">
          <label for="materno" class="form-label">Apellido Materno</label>
          <input value="<?php echo $a[3] ?>" type="text" class="form-control" id="materno" name="materno" />
        </div>
        <div class="col-sm-12 col-lg-4">
          <label for="fechaNacimiento" class="form-label">Fecha de Nacimiento:</label>
          <input value="<?php echo $a[4] ?>" type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento" />
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
            <?php if ($a[5] == "Masculino") echo "checked" ?>
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
            <?php if ($a[5] == "Femenino") echo "checked" ?>
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
            <?php if ($a[5] == "Otro") echo "checked" ?>
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
          <input value="<?php echo $a[6] ?>" type="text" class="form-control" id="curp" name="curp" />
        </div>
        <h2 class="mt-4 text-white">Contacto</h2>
        <div class="col-lg-4">
          <label for="calle" class="form-label">Calle y Número</label>
          <input value="<?php echo $a[7] ?>" type="text" class="form-control" id="calle" name="calle" />
        </div>
        <div class="col-lg-4">
          <label for="colonia" class="form-label">Colonia</label>
          <input value="<?php echo $a[8] ?>" type="text" class="form-control" id="colonia" name="colonia" />
        </div>
        <div class="col-lg-4">
          <label for="cp" class="form-label">Código Postal</label>
          <input value="<?php echo $a[9] ?>" type="number" class="form-control" id="cp" name="cp" control="false" />
        </div>
        <div class="col-lg-6">
          <label for="tel" class="form-label">Teléfono o Celular</label>
          <input value="<?php echo $a[10] ?>" type="tel" class="form-control" id="tel" name="tel" />
        </div>
        <div class="col-lg-6">
          <label for="email" class="form-label">Correo Electrónico</label>
          <input value="<?php echo $a[11] ?>" type="email" class="form-control" id="email" name="email" control="emial" />
        </div>
        <h2 class="mt-4 text-white">Procendencia</h2>
        <div class="col-lg-6">
          <label for="escuela" class="form-label">Escuela de Procedencia</label>
          <select class="form-select" id="escuela" name="escuela">
            <option value="" selected>Selecciona una escuela...</option>
            <option  value="02" <?php if ($a[18] == "01") echo "selected" ?>>CECyT No. 2 "Miguel Bernard"</option>
            <option  value="01" <?php if ($a[18] == "02") echo "selected" ?>>CECyT No. 1 "Gonzalo Vázquez Vela"</option>
            <option  value="03" <?php if ($a[18] == "03") echo "selected" ?>>CECyT No. 3 "Estanislao Ramírez Ruiz"</option>
            <option  value="04" <?php if ($a[18] == "04") echo "selected" ?>>CECyT No. 4 "Lázaro Cárdenas"</option>
            <option  value="05" <?php if ($a[18] == "05") echo "selected" ?>>CECyT No. 5 "Benito Juárez García"</option>
            <option  value="06" <?php if ($a[18] == "06") echo "selected" ?>>CECyT No. 6 "Miguel Othón de Mendizábal"</option>
            <option  value="07" <?php if ($a[18] == "07") echo "selected" ?>>CECyT No. 7 "Cuauhtémoc"</option>
            <option  value="08" <?php if ($a[18] == "08") echo "selected" ?>>CECyT No. 8 "Narciso Bassols García"</option>
            <option  value="09" <?php if ($a[18] == "09") echo "selected" ?>>CECyT No. 9 "Juan de Dios Bátiz"</option>
            <option  value="10" <?php if ($a[18] == "10") echo "selected" ?>>CECyT No. 10 "Carlos Vallejo Márquez"</option>
            <option  value="11" <?php if ($a[18] == "11") echo "selected" ?>>CECyT No. 11 "Wilfrido Massieu Pérez"</option>
            <option  value="12" <?php if ($a[18] == "12") echo "selected" ?>>CECyT No. 12 "José María Morelos y Pavón"</option>
            <option  value="13" <?php if ($a[18] == "13") echo "selected" ?>>CECyT No. 13 "Ricardo Flores Magón"</option>
            <option  value="14" <?php if ($a[18] == "14") echo "selected" ?>>CECyT No. 14 "Luis Enrique Erro"</option>
            <option  value="15" <?php if ($a[18] == "15") echo "selected" ?>>CECyT No. 15 "Diódoro Antúnez Echegaray"</option>
            <option  value="16" <?php if ($a[18] == "16") echo "selected" ?>>CECyT No. 16 "Hidalgo"</option>
            <option  value="17" <?php if ($a[18] == "17") echo "selected" ?>>CECyT No. 17 "León-Guanajuato"</option>
            <option  value="18" <?php if ($a[18] == "18") echo "selected" ?>>CECyT No. 18 "Zacatecas"</option>
            <option  value="19" <?php if ($a[18] == "19") echo "selected" ?>>CET No. 1 "Walter Cross Buchanan"</option>
            <option  value="20" <?php if ($a[18] == "20") echo "selected" ?>>Otra...</option>
          </select>
        </div>
        <div class="otro col-lg-6">
          <label for="otros" class="form-label">Indique cual es:</label>
          <input type="text" class="form-control" id="otros" name="otros" />
        </div>
        <div class="col-lg-6">
          <label for="entidad" class="form-label">Entidad Federativa</label>
          <select class="form-select" id="entidad" name="entidad">
            <option value="" selected>Selecciona una Entidad Federativa...</option>
            <option  value="01" <?php if ($a[19] == "01") echo "selected" ?>>Aguascalientes</option>
            <option  value="02" <?php if ($a[19] == "02") echo "selected" ?>>Baja California</option>
            <option  value="03" <?php if ($a[19] == "03") echo "selected" ?>>Baja California Sur</option>
            <option  value="04" <?php if ($a[19] == "04") echo "selected" ?>>Campeche</option>
            <option  value="05" <?php if ($a[19] == "05") echo "selected" ?>>Coahuila</option>
            <option  value="06" <?php if ($a[19] == "06") echo "selected" ?>>Colima</option>
            <option  value="07" <?php if ($a[19] == "07") echo "selected" ?>>Chiapas</option>
            <option  value="08" <?php if ($a[19] == "08") echo "selected" ?>>Chihuahua</option>
            <option  value="09" <?php if ($a[19] == "09") echo "selected" ?>>Ciudad de México</option>
            <option  value="10" <?php if ($a[19] == "10") echo "selected" ?>>Durango</option>
            <option  value="11" <?php if ($a[19] == "11") echo "selected" ?>>Estado de México</option>
            <option  value="12" <?php if ($a[19] == "12") echo "selected" ?>>Guanajuato</option>
            <option  value="13" <?php if ($a[19] == "13") echo "selected" ?>>Guerrero</option>
            <option  value="14" <?php if ($a[19] == "14") echo "selected" ?>>Hidalgo</option>
            <option  value="15" <?php if ($a[19] == "15") echo "selected" ?>>Jalisco</option>
            <option  value="16" <?php if ($a[19] == "16") echo "selected" ?>>Michoacán</option>
            <option  value="17" <?php if ($a[19] == "17") echo "selected" ?>>Morelos</option>
            <option  value="18" <?php if ($a[19] == "18") echo "selected" ?>>Nayarit</option>
            <option  value="19" <?php if ($a[19] == "19") echo "selected" ?>>Nuevo León</option>
            <option  value="20" <?php if ($a[19] == "20") echo "selected" ?>>Oaxaca</option>
            <option  value="21" <?php if ($a[19] == "21") echo "selected" ?>>Puebla</option>
            <option  value="22" <?php if ($a[19] == "22") echo "selected" ?>>Querétaro</option>
            <option  value="23" <?php if ($a[19] == "23") echo "selected" ?>>Quintana Roo</option>
            <option  value="24" <?php if ($a[19] == "24") echo "selected" ?>>San Luis Potosí</option>
            <option  value="25" <?php if ($a[19] == "25") echo "selected" ?>>Sinaloa</option>
            <option  value="26" <?php if ($a[19] == "26") echo "selected" ?>>Sonora</option>
            <option  value="27" <?php if ($a[19] == "27") echo "selected" ?>>Tabasco</option>
            <option  value="28" <?php if ($a[19] == "28") echo "selected" ?>>Tamaulipas</option>
            <option  value="29" <?php if ($a[19] == "29") echo "selected" ?>>Tlaxcala</option>
            <option  value="30" <?php if ($a[19] == "30") echo "selected" ?>>Veracruz</option>
            <option  value="31" <?php if ($a[19] == "31") echo "selected" ?>>Yucatán</option>
            <option  value="32" <?php if ($a[19] == "32") echo "selected" ?>>Zacatecas</option>
          </select>
        </div>
        <div class="col-lg-6">
          <label for="promedio" class="form-label">Promedio</label>
          <input value="<?php echo $a[13] ?>" type="number" step="0.01" class="form-control" id="promedio" name="promedio" value="0.0" />
        </div>
        <div class="col-lg-6">
          <label for="opcion" class="form-label">ESCOM Fue Tu</label>
          <select class="form-select" id="opcion" name="opcion">
            <option value="" selected>Selecciona una Opci&oacute;n...</option>
            <option <?php if ($a[14] == "1era Opción") echo "selected" ?>>1era Opci&oacute;n</option>
            <option <?php if ($a[14] == "1da Opción") echo "selected" ?>>2da Opci&oacute;n</option>
            <option <?php if ($a[14] == "3era Opción") echo "selected" ?>>3era Opci&oacute;n</option>
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

