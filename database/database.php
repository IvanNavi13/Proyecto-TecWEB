<?php

class database
{
    public $usuario;
    public $clave;
    public $servidor;
    public $nombreBD;

    public $conexion;

    public function __construct()
    {													//Colocar los datos de su respectivo servidor de MySQL
        $this->usuario = 'root';						// <--
        $this->clave = '';							// <--
        $this->servidor = 'localhost';
        $this->nombreBD = 'proyectoWEB';       
    }

    public function obtenerConexion()
    {
	 $this->conexion = mysqli_connect($this->servidor,$this->usuario,$this->clave,$this->nombreBD); 
    }

	//------------------------------------Alumno

	public function cAlumno($boleta, $nombreA, $paterno, $materno, $fechaN, $genero, $curp, $calle, $colonia,
							$cp, $tel, $email, $otros, $promedio, $opcion, $contraseña, $ficha, $noCuenta, $idEs, $idEn){
		$consulta = "INSERT INTO Alumno (boleta, nombre, paterno, materno, fechaNacimiento, genero, curp, calle, colonia, cp,
								tel, email, otros, promedio, opcion, contraseña, ficha, noCuenta, idEscu, idEnti) 
		VALUES ('$boleta', '$nombreA', '$paterno', '$materno', '$fechaN', '$genero', '$curp', '$calle', '$colonia', '$cp', 
				'$tel', '$email', '$otros', '$promedio', '$opcion', '$contraseña', '$ficha', '$noCuenta', '$idEs', '$idEn')";

		$resultado = mysqli_query($this ->conexion,$consulta);
	    if ($resultado) {
	    	return '<div id="modal-contenedor" class="modal-contenedor active">
      				<div class="modal-contenido">
        				<i id="close-modal" class="fas fa-times"></i>
        				<h3 class="modal-titulo">¡REGISTRO EXITOSO!</h3>
        				<div class="modal-cuerpo">
          					En caso de quiera cambiar su informacio hay una opcion que lo permite,
          					de lo contrario puede obtner el pdf con toda la información
        				</div>
      				</div>
    			</div>';
	    } else {
			return '<div id="modal-contenedor" class="modal-contenedor active">
      				<div class="modal-contenido">
        				<i id="close-modal" class="fas fa-times"></i>
        				<h3 class="modal-titulo">¡ALGO SALIO MAL!</h3>
        				<div class="modal-cuerpo">
          					Por favor ponte en contacto con el personal de la escuela.
        				</div>
      				</div>
    			</div>';
	    }
    }  
	  
	public function sAlumno($busqueda){

		$consulta = "SELECT * FROM Alumno";

		if($busqueda != ""){
			$consulta = "SELECT * FROM alumno WHERE nombre LIKE '%".$busqueda."%' OR boleta LIKE '%".$busqueda."%'";
		}

		$resultado = mysqli_query($this->conexion, $consulta );
		
		$rows = array();
		while($r = mysqli_fetch_assoc($resultado)) {
    	$rows[] = $r;
		}
		return $rows;
	}

	public function rAlumno($boleta){
		$consulta = "SELECT * FROM Alumno WHERE boleta='$boleta'";
		$resultado = mysqli_query($this->conexion, $consulta );
		$columna = mysqli_fetch_array($resultado);
		return $columna;
	}
	
	public function uAlumno($boleta, $nombreA, $paterno, $materno, $fechaN, $genero, $curp, $calle, $colonia, $cp,
						    $tel, $email, $otros, $promedio, $opcion, $contraseña, $ficha, $noCuenta, $idEs, $idEn){
		$consulta = "UPDATE Alumno SET nombre = '$nombreA', paterno = '$paterno', materno = '$materno', fechaNacimiento = '$fechaN',
					genero = '$genero', curp = '$curp', calle = '$calle', colonia = '$colonia', cp = '$cp', tel = '$tel', email = '$email',
					otros = '$otros', promedio = '$promedio', opcion = '$opcion', contraseña = '$contraseña', ficha = '$ficha',
					noCuenta = '$noCuenta', idEscu = '$idEs', idEnti = '$idEn' WHERE boleta = '$boleta'";
		$resultado = mysqli_query($this ->conexion,$consulta);
	    if ($resultado) {
	    	    return '<div id="modal-contenedor" class="modal-contenedor active">
      				<div class="modal-contenido">
        				<i id="close-modal" class="fas fa-times"></i>
        				<h3 class="modal-titulo">¡ACTUALIZASTE TUS DATOS!</h3>
        				<div class="modal-cuerpo">
          					En caso de quiera cambiar su informacio hay una opcion que lo permite,
          					de lo contrario puede obtner el pdf con toda la información
        				</div>
      				</div>
    			</div>';
           
	    } else {
    
	    }
    }
	
	public function dAlumno($boleta){
		$consulta = "DELETE FROM Alumno WHERE boleta='$boleta'";
		$resultado = mysqli_query($this ->conexion, $consulta );
		$columna = mysqli_fetch_array( $resultado );
		return $columna;
	}
	
	//------------------------------------Admin

	public function cAdmin($contraseña, $noCuenta){
		$consulta = "INSERT INTO administrador (contraseña, noCuenta) VALUES ('$contraseña','$noCuenta')";
		$resultado = mysqli_query($this ->conexion,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscrito correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }  
	    	
	public function rAdmin($noCuenta){
		$consulta = "SELECT * FROM administrador WHERE noCuenta='$noCuenta'";
		$resultado = mysqli_query($this ->conexion, $consulta );
		$columna = mysqli_fetch_array( $resultado );
		return $columna;
	}
	
	public function uAdmin($contraseña, $noCuenta){
		$consulta = "UPDATE administrador SET contraseña = '$contraseña' WHERE noCuenta = '$noCuenta'";
		$resultado = mysqli_query($this ->conexion,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscrito correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
	}

	public function dAdmin($noCuenta){
		$consulta = "DELETE FROM administrador WHERE noCuenta ='$noCuenta'";
		$resultado = mysqli_query($this ->conexion, $consulta );
		$columna = mysqli_fetch_array( $resultado );
		return $columna;
	}
    
	//------------------------------------Examen
	
	public function cExamen($salon, $horario, $grupo, $cupo, $ficha){
		$consulta = "INSERT INTO examen (salon, horario, grupo, cupo, ficha) VALUES ('$salon','$horario', '$grupo', '$cupo', '$ficha')";
		$resultado = mysqli_query($this ->conexion,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscrito correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }  
	    	
	public function rExamen($ficha){
		$consulta = "SELECT * FROM examen WHERE ficha='$ficha'";
		$resultado = mysqli_query($this ->conexion, $consulta );
		$columna = mysqli_fetch_array( $resultado );
		return $columna;
	}
	
	public function uExamen($salon, $horario, $grupo, $cupo, $ficha){
		$consulta = "UPDATE examen SET salon = '$salon', horario = '$horario', grupo = '$grupo', cupo = '$cupo' WHERE ficha = '$ficha'";
		$resultado = mysqli_query($this ->conexion,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscrito correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
	}
	
	public function dExamen($ficha){
		$consulta = "DELETE FROM examen WHERE ficha ='$ficha'";
		$resultado = mysqli_query($this ->conexion, $consulta );
		$columna = mysqli_fetch_array( $resultado );
		return $columna;
	}
	
	
}
?>

