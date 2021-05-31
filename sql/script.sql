CREATE DATABASE proyectoWEB;
USE proyectoWEB;


CREATE TABLE Escuela
(
  nombre VARCHAR (50) NOT NULL,
  idEscu INT NOT NULL,
  PRIMARY KEY (idEscu)
);

CREATE TABLE Entidad
(
  nombre VARCHAR (50) NOT NULL,
  idEnti INT NOT NULL,
  PRIMARY KEY (idEnti)
);


CREATE TABLE examen
(
  salon VARCHAR(20) NOT NULL,
  horario TIME NOT NULL,
  grupo VARCHAR(5) NOT NULL,
  ficha INT NOT NULL,
  PRIMARY KEY (ficha)
);


CREATE TABLE administrador
(
  contraseña VARBINARY(60) NOT NULL,
  noCuenta VARCHAR(15) NOT NULL,
  PRIMARY KEY (noCuenta)
);


CREATE TABLE Alumno
(
    boleta INT(10) NOT NULL,
 	nombre VARCHAR(60)  NOT NULL,
    paterno VARCHAR(60)  NOT NULL,
    materno VARCHAR(60)  NOT NULL, 
    fechaNacimiento DATE DEFAULT '2000-01-01',
    genero VARCHAR (15) NOT NULL,
    curp VARCHAR(18) NOT NULL,

    calle VARCHAR(40) NOT NULL,
    colonia VARCHAR (40) NOT NULL,
    cp INT(5) NOT NULL,
    tel VARCHAR(15) NOT NULL,
    email VARCHAR (60) NOT NULL,

    otros VARCHAR (50) DEFAULT "",
    promedio DOUBLE NOT NULL,
    opcion VARCHAR (30) NOT NULL,
    contraseña VARBINARY(60) NOT NULL,

    ficha INT NOT NULL,
    noCuenta VARCHAR(15) NOT NULL,
    idEscu INT NOT NULL,
    idEnti INT NOT NULL,
    PRIMARY KEY (boleta),
    FOREIGN KEY (ficha) REFERENCES examen(ficha),
    FOREIGN KEY (noCuenta) REFERENCES administrador(noCuenta),
    FOREIGN KEY (idEnti) REFERENCES Entidad(idEnti),
    FOREIGN KEY (idEscu) REFERENCES Escuela(idEscu)
);


---INSERTAR DATOS AL CATALOGO ESCUELA & ENTIDAD

INSERT INTO Escuela ( nombre, idEscu)
VALUES 
( 'CECyT No. 1 "Gonzalo Vázquez Vela', '01' );


INSERT INTO Entidad ( nombre, idEnti)
VALUES 
( 'Aguascalientes', '01' );


