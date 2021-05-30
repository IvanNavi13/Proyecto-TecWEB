CREATE DATABASE proyectoWEBNuevoIngreso;
USE proyectoWEBNuevoIngreso;

CREATE TABLE alumno(
    boleta INT(10) DEFAULT "",
	nombre VARCHAR(60) DEFAULT "",
    paterno VARCHAR(60) DEFAULT "",
    materno VARCHAR(60) DEFAULT "",
    fechaNacimiento DATE DEFAULT '2000-01-01',
    genero VARCHAR (15) DEFAULT "",
    curp VARCHAR(18) NOT NULL PRIMARY KEY,
    calle VARCHAR(40) DEFAULT "",
    colonia VARCHAR (40) DEFAULT "",
    cp INT(5) DEFAULT "",
    tel VARCHAR(15) DEFAULT "",
    email VARCHAR (60) DEFAULT "",
    escuela VARCHAR (50) DEFAULT "",
    otros VARCHAR (50) DEFAULT "",
    entidad VARCHAR (50) DEFAULT "",
    promedio DOUBLE DEFAULT "",
    opcion VARCHAR (30) DEFAULT "",
    contraseña VARBINARY(60) NOT NULL
);
