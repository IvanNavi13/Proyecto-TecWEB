
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
  cupo INT NOT NULL,
  ficha INT NOT NULL,
  PRIMARY KEY (ficha)
);


CREATE TABLE administrador
(
  contraseña VARCHAR(60) NOT NULL,
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
    contraseña VARCHAR(60) NOT NULL,

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


INSERT INTO Escuela ( nombre, idEscu) VALUES ( 'CECyT No. 1 "Gonzalo Vázquez Vela"',        '01' );
INSERT INTO Escuela ( nombre, idEscu) VALUES ( 'CECyT No. 2 "Miguel Bernard"',              '02' );
INSERT INTO Escuela ( nombre, idEscu) VALUES ( 'CECyT No. 3 "Estanislao Ramírez Ruiz"',     '03' );
INSERT INTO Escuela ( nombre, idEscu) VALUES ( 'CECyT No. 4 "Lázaro Cárdenas"',             '04' );
INSERT INTO Escuela ( nombre, idEscu) VALUES ( 'CECyT No. 5 "Benito Juárez García"',        '05' );
INSERT INTO Escuela ( nombre, idEscu) VALUES ( 'CECyT No. 6 "Miguel Othón de Mendizábal"',  '06' );
INSERT INTO Escuela ( nombre, idEscu) VALUES ( 'CECyT No. 7 "Cuauhtémoc"',                  '07' );
INSERT INTO Escuela ( nombre, idEscu) VALUES ( 'CECyT No. 8 "Narciso Bassols García"',      '08' );
INSERT INTO Escuela ( nombre, idEscu) VALUES ( 'CECyT No. 9 "Juan de Dios Bátiz"',          '09' );
INSERT INTO Escuela ( nombre, idEscu) VALUES ( 'CECyT No. 10 "Carlos Vallejo Márquez"',     '10' );
INSERT INTO Escuela ( nombre, idEscu) VALUES ( 'CECyT No. 11 "Wilfrido Massieu Pérez"',     '11' );
INSERT INTO Escuela ( nombre, idEscu) VALUES ( 'CECyT No. 12 "José María Morelos y Pavón"', '12' );
INSERT INTO Escuela ( nombre, idEscu) VALUES ( 'CECyT No. 13 "Ricardo Flores Magón"',       '13' );
INSERT INTO Escuela ( nombre, idEscu) VALUES ( 'CECyT No. 14 "Luis Enrique Erro"',          '14' );
INSERT INTO Escuela ( nombre, idEscu) VALUES ( 'CECyT No. 15 "Diódoro Antúnez Echegaray"',  '15' );
INSERT INTO Escuela ( nombre, idEscu) VALUES ( 'CECyT No. 16 "Hidalgo"',                    '16' );
INSERT INTO Escuela ( nombre, idEscu) VALUES ( 'CECyT No. 17 "León-Guanajuato"',            '17' );
INSERT INTO Escuela ( nombre, idEscu) VALUES ( 'CECyT No. 18 "Zacatecas"',                  '18' );
INSERT INTO Escuela ( nombre, idEscu) VALUES ( 'CET No. 1 "Walter Cross Buchanan"',         '19' );
INSERT INTO Escuela ( nombre, idEscu) VALUES ( 'Otra',                                      '20' );

INSERT INTO Entidad ( nombre, idEnti) VALUES ( 'Aguascalientes',       '01' );
INSERT INTO Entidad ( nombre, idEnti) VALUES ( 'Baja California',      '02' );
INSERT INTO Entidad ( nombre, idEnti) VALUES ( 'Baja California Sur',  '03' );
INSERT INTO Entidad ( nombre, idEnti) VALUES ( 'Campeche',             '04' );
INSERT INTO Entidad ( nombre, idEnti) VALUES ( 'Coahuila',             '05' );
INSERT INTO Entidad ( nombre, idEnti) VALUES ( 'Colima',               '06' );
INSERT INTO Entidad ( nombre, idEnti) VALUES ( 'Chiapas',              '07' );
INSERT INTO Entidad ( nombre, idEnti) VALUES ( 'Chihuahua',            '08' );
INSERT INTO Entidad ( nombre, idEnti) VALUES ( 'Ciudad de México',     '09' );
INSERT INTO Entidad ( nombre, idEnti) VALUES ( 'Durango',              '10' );
INSERT INTO Entidad ( nombre, idEnti) VALUES ( 'Estado de México',     '11' );
INSERT INTO Entidad ( nombre, idEnti) VALUES ( 'Guanajuato',           '12' );
INSERT INTO Entidad ( nombre, idEnti) VALUES ( 'Guerrero',             '13' );
INSERT INTO Entidad ( nombre, idEnti) VALUES ( 'Hidalgo',              '14' );
INSERT INTO Entidad ( nombre, idEnti) VALUES ( 'Jalisco',              '15' );
INSERT INTO Entidad ( nombre, idEnti) VALUES ( 'Michoacán',            '16' );
INSERT INTO Entidad ( nombre, idEnti) VALUES ( 'Morelos',              '17' );
INSERT INTO Entidad ( nombre, idEnti) VALUES ( 'Nayarit',              '18' );
INSERT INTO Entidad ( nombre, idEnti) VALUES ( 'Nuevo León',           '19' );
INSERT INTO Entidad ( nombre, idEnti) VALUES ( 'Oaxaca',               '20' );
INSERT INTO Entidad ( nombre, idEnti) VALUES ( 'Puebla',               '21' );
INSERT INTO Entidad ( nombre, idEnti) VALUES ( 'Querétaro',            '22' );
INSERT INTO Entidad ( nombre, idEnti) VALUES ( 'Quintana Roo',         '23' );
INSERT INTO Entidad ( nombre, idEnti) VALUES ( 'San Luis Potosí',      '24' );
INSERT INTO Entidad ( nombre, idEnti) VALUES ( 'Sinaloa',              '25' );
INSERT INTO Entidad ( nombre, idEnti) VALUES ( 'Sonora',               '26' );
INSERT INTO Entidad ( nombre, idEnti) VALUES ( 'Tabasco',              '27' );
INSERT INTO Entidad ( nombre, idEnti) VALUES ( 'Tamaulipas',           '28' );
INSERT INTO Entidad ( nombre, idEnti) VALUES ( 'Tlaxcala',             '29' );
INSERT INTO Entidad ( nombre, idEnti) VALUES ( 'Veracruz',             '30' );
INSERT INTO Entidad ( nombre, idEnti) VALUES ( 'Yucatán',              '31' );
INSERT INTO Entidad ( nombre, idEnti) VALUES ( 'Zacatecas',            '32' );


INSERT INTO administrador (contraseña, noCuenta) VALUES ( 'admin123', 'adminESCOM');

INSERT INTO examen (salon, horario, grupo, cupo, ficha) VALUES ( '1', '07:00:00', '1CM1', '0', '1');
