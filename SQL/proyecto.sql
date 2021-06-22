DROP DATABASE IF EXISTS proyectoWEB;
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
  cupo INT NOT NULL DEFAULT 0,
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


INSERT INTO Escuela ( nombre, idEscu) VALUES ( 'CECyT No. 1 "Gonzalo Vázquez Vela"', '01' );
INSERT INTO Escuela ( nombre, idEscu) VALUES ( 'CECyT No. 2 "Miguel Bernard"', '02' );
INSERT INTO Escuela ( nombre, idEscu) VALUES ( 'CECyT No. 3 "Estanislao Ramírez Ruiz"', '03' );
INSERT INTO Escuela ( nombre, idEscu) VALUES ( 'CECyT No. 4 "Lázaro Cárdenas"', '04' );
INSERT INTO Escuela ( nombre, idEscu) VALUES ( 'CECyT No. 5 "Benito Juárez García"', '05' );
INSERT INTO Escuela ( nombre, idEscu) VALUES ( 'CECyT No. 6 "Miguel Othón de Mendizábal"', '06' );
INSERT INTO Escuela ( nombre, idEscu) VALUES ( 'CECyT No. 7 "Cuauhtémoc"', '07' );
INSERT INTO Escuela ( nombre, idEscu) VALUES ( 'CECyT No. 8 "Narciso Bassols García"', '08' );
INSERT INTO Escuela ( nombre, idEscu) VALUES ( 'CECyT No. 9 "Juan de Dios Bátiz"', '09' );
INSERT INTO Escuela ( nombre, idEscu) VALUES ( 'CECyT No. 10 "Carlos Vallejo Márquez"', '10' );
INSERT INTO Escuela ( nombre, idEscu) VALUES ( 'CECyT No. 11 "Wilfrido Massieu Pérez"', '11' );
INSERT INTO Escuela ( nombre, idEscu) VALUES ( 'CECyT No. 12 "José María Morelos y Pavón"', '12' );
INSERT INTO Escuela ( nombre, idEscu) VALUES ( 'CECyT No. 13 "Ricardo Flores Magón"', '13' );
INSERT INTO Escuela ( nombre, idEscu) VALUES ( 'CECyT No. 14 "Luis Enrique Erro"', '14' );
INSERT INTO Escuela ( nombre, idEscu) VALUES ( 'CECyT No. 15 "Diódoro Antúnez Echegaray"', '15' );
INSERT INTO Escuela ( nombre, idEscu) VALUES ( 'CECyT No. 16 "Hidalgo"', '16' );
INSERT INTO Escuela ( nombre, idEscu) VALUES ( 'CECyT No. 17 "León-Guanajuato"', '17' );
INSERT INTO Escuela ( nombre, idEscu) VALUES ( 'CECyT No. 18 "Zacatecas"', '18' );
INSERT INTO Escuela ( nombre, idEscu) VALUES ( 'CET No. 1 "Walter Cross Buchanan"', '19' );
INSERT INTO Escuela ( nombre, idEscu) VALUES ( 'Otra', '20' );

INSERT INTO Entidad ( nombre, idEnti) VALUES ( 'Aguascalientes', '01' );
INSERT INTO Entidad ( nombre, idEnti) VALUES ( 'Baja California', '02' );
INSERT INTO Entidad ( nombre, idEnti) VALUES ( 'Baja California Sur', '03' );
INSERT INTO Entidad ( nombre, idEnti) VALUES ( 'Campeche', '04' );
INSERT INTO Entidad ( nombre, idEnti) VALUES ( 'Coahuila', '05' );
INSERT INTO Entidad ( nombre, idEnti) VALUES ( 'Colima', '06' );
INSERT INTO Entidad ( nombre, idEnti) VALUES ( 'Chihuahua', '07' );
INSERT INTO Entidad ( nombre, idEnti) VALUES ( 'Ciudad de México', '08' );
INSERT INTO Entidad ( nombre, idEnti) VALUES ( 'Durango', '09' );
INSERT INTO Entidad ( nombre, idEnti) VALUES ( 'Estado de México', '10' );
INSERT INTO Entidad ( nombre, idEnti) VALUES ( 'Guanajuato', '11' );
INSERT INTO Entidad ( nombre, idEnti) VALUES ( 'Guerrero', '12' );
INSERT INTO Entidad ( nombre, idEnti) VALUES ( 'Hidalgo', '13' );
INSERT INTO Entidad ( nombre, idEnti) VALUES ( 'Jalisco', '14' );
INSERT INTO Entidad ( nombre, idEnti) VALUES ( 'Michoacán', '15' );
INSERT INTO Entidad ( nombre, idEnti) VALUES ( 'Morelos', '16' );
INSERT INTO Entidad ( nombre, idEnti) VALUES ( 'Nayarit', '17' );
INSERT INTO Entidad ( nombre, idEnti) VALUES ( 'Nuevo León', '18' );
INSERT INTO Entidad ( nombre, idEnti) VALUES ( 'Oaxaca', '19' );
INSERT INTO Entidad ( nombre, idEnti) VALUES ( 'Puebla', '20' );
INSERT INTO Entidad ( nombre, idEnti) VALUES ( 'Querétaro', '21' );
INSERT INTO Entidad ( nombre, idEnti) VALUES ( 'Quintana Roo', '22' );
INSERT INTO Entidad ( nombre, idEnti) VALUES ( 'San Luis Potosí', '23' );
INSERT INTO Entidad ( nombre, idEnti) VALUES ( 'Sinaloa', '24' );
INSERT INTO Entidad ( nombre, idEnti) VALUES ( 'Sonora', '25' );
INSERT INTO Entidad ( nombre, idEnti) VALUES ( 'Tabasco', '26' );
INSERT INTO Entidad ( nombre, idEnti) VALUES ( 'Tamaulipas', '27' );
INSERT INTO Entidad ( nombre, idEnti) VALUES ( 'Tlaxcala', '28' );
INSERT INTO Entidad ( nombre, idEnti) VALUES ( 'Veracruz', '29' );
INSERT INTO Entidad ( nombre, idEnti) VALUES ( 'Yucatán', '30' );
INSERT INTO Entidad ( nombre, idEnti) VALUES ( 'Zacatecas', '31' );

INSERT INTO administrador (contraseña, noCuenta) VALUES ( 'admin123', 'adminESCOM');

INSERT INTO examen (salon, horario, grupo, cupo, ficha) VALUES ( '1', '07:00:00', '1CM1', '0', '1');
INSERT INTO examen (salon, horario, grupo, cupo, ficha) VALUES ( '2', '07:00:00', '1CM2', '0', '2');
INSERT INTO examen (salon, horario, grupo, cupo, ficha) VALUES ( '3', '07:00:00', '1CM3', '0', '3');
INSERT INTO examen (salon, horario, grupo, cupo, ficha) VALUES ( '4', '07:00:00', '1CM4', '0', '4');
INSERT INTO examen (salon, horario, grupo, cupo, ficha) VALUES ( '5', '07:00:00', '1CM5', '0', '5');
INSERT INTO examen (salon, horario, grupo, cupo, ficha) VALUES ( '6', '07:00:00', '1CM6', '0', '6');
INSERT INTO examen (salon, horario, grupo, cupo, ficha) VALUES ( '1', '08:45:00', '1CM7', '0', '7');
INSERT INTO examen (salon, horario, grupo, cupo, ficha) VALUES ( '2', '08:45:00', '1CM8', '0', '8');
INSERT INTO examen (salon, horario, grupo, cupo, ficha) VALUES ( '3', '08:45:00', '1CM9', '0', '9');
INSERT INTO examen (salon, horario, grupo, cupo, ficha) VALUES ( '4', '08:45:00', '1CM10', '0', '10');
INSERT INTO examen (salon, horario, grupo, cupo, ficha) VALUES ( '5', '08:45:00', '1CM11', '0', '11');
INSERT INTO examen (salon, horario, grupo, cupo, ficha) VALUES ( '6', '08:45:00', '1CM12', '0', '12');
INSERT INTO examen (salon, horario, grupo, cupo, ficha) VALUES ( '1', '10:30:00', '1CM13', '0', '13');
INSERT INTO examen (salon, horario, grupo, cupo, ficha) VALUES ( '2', '10:30:00', '1CM14', '0', '14');
INSERT INTO examen (salon, horario, grupo, cupo, ficha) VALUES ( '3', '10:30:00', '1CM15', '0', '15');
INSERT INTO examen (salon, horario, grupo, cupo, ficha) VALUES ( '4', '10:30:00', '1CM16', '0', '16');
INSERT INTO examen (salon, horario, grupo, cupo, ficha) VALUES ( '5', '10:30:00', '1CM17', '0', '17');
INSERT INTO examen (salon, horario, grupo, cupo, ficha) VALUES ( '6', '10:30:00', '1CM18', '0', '18');
INSERT INTO examen (salon, horario, grupo, cupo, ficha) VALUES ( '1', '12:15:00', '1CM19', '0', '19');
INSERT INTO examen (salon, horario, grupo, cupo, ficha) VALUES ( '2', '12:15:00', '1CM20', '0', '20');
INSERT INTO examen (salon, horario, grupo, cupo, ficha) VALUES ( '3', '12:15:00', '1CM21', '0', '21');
INSERT INTO examen (salon, horario, grupo, cupo, ficha) VALUES ( '4', '12:15:00', '1CM22', '0', '22');
INSERT INTO examen (salon, horario, grupo, cupo, ficha) VALUES ( '5', '12:15:00', '1CM23', '0', '23');
INSERT INTO examen (salon, horario, grupo, cupo, ficha) VALUES ( '6', '12:15:00', '1CM24', '0', '24');
INSERT INTO examen (salon, horario, grupo, cupo, ficha) VALUES ( '1', '14:00:00', '1CV1', '0', '25');
INSERT INTO examen (salon, horario, grupo, cupo, ficha) VALUES ( '2', '14:00:00', '1CV2', '0', '26');
INSERT INTO examen (salon, horario, grupo, cupo, ficha) VALUES ( '3', '14:00:00', '1CV3', '0', '27');
INSERT INTO examen (salon, horario, grupo, cupo, ficha) VALUES ( '4', '14:00:00', '1CV4', '0', '28');
INSERT INTO examen (salon, horario, grupo, cupo, ficha) VALUES ( '5', '14:00:00', '1CV5', '0', '29');
INSERT INTO examen (salon, horario, grupo, cupo, ficha) VALUES ( '6', '14:00:00', '1CV6', '0', '30');
INSERT INTO examen (salon, horario, grupo, cupo, ficha) VALUES ( '1', '15:45:00', '1CV7', '0', '31');
INSERT INTO examen (salon, horario, grupo, cupo, ficha) VALUES ( '2', '15:45:00', '1CV8', '0', '32');
INSERT INTO examen (salon, horario, grupo, cupo, ficha) VALUES ( '3', '15:45:00', '1CV9', '0', '33');
INSERT INTO examen (salon, horario, grupo, cupo, ficha) VALUES ( '4', '15:45:00', '1CV10', '0', '34');
INSERT INTO examen (salon, horario, grupo, cupo, ficha) VALUES ( '5', '15:45:00', '1CV11', '0', '35');
INSERT INTO examen (salon, horario, grupo, cupo, ficha) VALUES ( '6', '15:45:00', '1CV12', '0', '36');
INSERT INTO examen (salon, horario, grupo, cupo, ficha) VALUES ( '1', '17:30:00', '1CV13', '0', '37');
INSERT INTO examen (salon, horario, grupo, cupo, ficha) VALUES ( '2', '17:30:00', '1CV14', '0', '38');
INSERT INTO examen (salon, horario, grupo, cupo, ficha) VALUES ( '3', '17:30:00', '1CV15', '0', '39');
INSERT INTO examen (salon, horario, grupo, cupo, ficha) VALUES ( '4', '17:30:00', '1CV16', '0', '40');
INSERT INTO examen (salon, horario, grupo, cupo, ficha) VALUES ( '5', '17:30:00', '1CV17', '0', '41');
INSERT INTO examen (salon, horario, grupo, cupo, ficha) VALUES ( '6', '17:30:00', '1CV18', '0', '42');
INSERT INTO examen (salon, horario, grupo, cupo, ficha) VALUES ( '1', '19:15:00', '1CV19', '0', '43');
INSERT INTO examen (salon, horario, grupo, cupo, ficha) VALUES ( '2', '19:15:00', '1CV20', '0', '44');
INSERT INTO examen (salon, horario, grupo, cupo, ficha) VALUES ( '3', '19:15:00', '1CV21', '0', '45');
INSERT INTO examen (salon, horario, grupo, cupo, ficha) VALUES ( '4', '19:15:00', '1CV22', '0', '46');
INSERT INTO examen (salon, horario, grupo, cupo, ficha) VALUES ( '5', '19:15:00', '1CV23', '0', '47');
INSERT INTO examen (salon, horario, grupo, cupo, ficha) VALUES ( '6', '19:15:00', '1CV24', '0', '48');


INSERT INTO Alumno (boleta, nombre, paterno, materno, fechaNacimiento, genero, curp, calle, colonia, cp, tel, email, otros, promedio, opcion, contraseña, ficha, noCuenta, idEscu, idEnti) VALUES ('2021630701', 'B', 'B', 'B', '2003-01-01', 'Masculino', 'BBBB030101MDFBBB01', 'Las Maldivas', 'La Finca', '16801', '55768301', 'B@B.com', ' ', '8', '1', 'BBB', '1', 'adminESCOM', '09', '04'); 
INSERT INTO Alumno (boleta, nombre, paterno, materno, fechaNacimiento, genero, curp, calle, colonia, cp, tel, email, otros, promedio, opcion, contraseña, ficha, noCuenta, idEscu, idEnti) VALUES ('2021630702', 'C', 'C', 'C', '2003-01-01', 'Femenino', 'CCCC030102FDFCCC02', 'Las Maldivas', 'La Finca', '16802', '55768302', 'C@C.com', ' ', '8', '1', 'CCC', '1', 'adminESCOM', '9', '4'); 
INSERT INTO Alumno (boleta, nombre, paterno, materno, fechaNacimiento, genero, curp, calle, colonia, cp, tel, email, otros, promedio, opcion, contraseña, ficha, noCuenta, idEscu, idEnti) VALUES ('2021630703', 'D', 'D', 'D', '2003-01-01', 'Masculino', 'DDDD030103MDFDDD03', 'Las Maldivas', 'La Finca', '16803', '55768303', 'D@D.com', ' ', '8', '1', 'DDD', '1', 'adminESCOM', '9', '4'); 
INSERT INTO Alumno (boleta, nombre, paterno, materno, fechaNacimiento, genero, curp, calle, colonia, cp, tel, email, otros, promedio, opcion, contraseña, ficha, noCuenta, idEscu, idEnti) VALUES ('2021630704', 'E', 'E', 'E', '2003-01-01', 'Femenino', 'EEEE030104FDFEEE04', 'Las Maldivas', 'La Finca', '16804', '55768304', 'E@E.com', ' ', '8', '1', 'EEE', '1', 'adminESCOM', '9', '4'); 
INSERT INTO Alumno (boleta, nombre, paterno, materno, fechaNacimiento, genero, curp, calle, colonia, cp, tel, email, otros, promedio, opcion, contraseña, ficha, noCuenta, idEscu, idEnti) VALUES ('2021630705', 'F', 'F', 'F', '2003-01-01', 'Masculino', 'FFFF030105MDFFFF05', 'Las Maldivas', 'La Finca', '16805', '55768305', 'F@F.com', ' ', '8', '1', 'FFF', '1', 'adminESCOM', '9', '4'); 
INSERT INTO Alumno (boleta, nombre, paterno, materno, fechaNacimiento, genero, curp, calle, colonia, cp, tel, email, otros, promedio, opcion, contraseña, ficha, noCuenta, idEscu, idEnti) VALUES ('2021630706', 'G', 'G', 'G', '2003-01-01', 'Femenino', 'GGGG030106FDFGGG06', 'Las Maldivas', 'La Finca', '16806', '55768306', 'G@G.com', ' ', '8', '1', 'GGG', '1', 'adminESCOM', '9', '4'); 
INSERT INTO Alumno (boleta, nombre, paterno, materno, fechaNacimiento, genero, curp, calle, colonia, cp, tel, email, otros, promedio, opcion, contraseña, ficha, noCuenta, idEscu, idEnti) VALUES ('2021630707', 'H', 'H', 'H', '2003-01-01', 'Masculino', 'HHHH030107MDFHHH07', 'Las Maldivas', 'La Finca', '16807', '55768307', 'H@H.com', ' ', '8', '1', 'HHH', '1', 'adminESCOM', '9', '4'); 
INSERT INTO Alumno (boleta, nombre, paterno, materno, fechaNacimiento, genero, curp, calle, colonia, cp, tel, email, otros, promedio, opcion, contraseña, ficha, noCuenta, idEscu, idEnti) VALUES ('2021630708', 'I', 'I', 'I', '2003-01-01', 'Femenino', 'IIII030108FDFIII08', 'Las Maldivas', 'La Finca', '16808', '55768308', 'I@I.com', ' ', '8', '1', 'III', '1', 'adminESCOM', '9', '4'); 
INSERT INTO Alumno (boleta, nombre, paterno, materno, fechaNacimiento, genero, curp, calle, colonia, cp, tel, email, otros, promedio, opcion, contraseña, ficha, noCuenta, idEscu, idEnti) VALUES ('2021630709', 'J', 'J', 'J', '2003-01-01', 'Masculino', 'JJJJ030109MDFJJJ09', 'Las Maldivas', 'La Finca', '16809', '55768309', 'J@J.com', ' ', '8', '1', 'JJJ', '1', 'adminESCOM', '9', '4'); 
INSERT INTO Alumno (boleta, nombre, paterno, materno, fechaNacimiento, genero, curp, calle, colonia, cp, tel, email, otros, promedio, opcion, contraseña, ficha, noCuenta, idEscu, idEnti) VALUES ('2021630710', 'K', 'K', 'K', '2003-01-01', 'Femenino', 'KKKK030110FDFKKK10', 'Las Maldivas', 'La Finca', '16810', '55768310', 'K@K.com', ' ', '8', '1', 'KKK', '1', 'adminESCOM', '9', '4'); 
INSERT INTO Alumno (boleta, nombre, paterno, materno, fechaNacimiento, genero, curp, calle, colonia, cp, tel, email, otros, promedio, opcion, contraseña, ficha, noCuenta, idEscu, idEnti) VALUES ('2021630711', 'L', 'L', 'L', '2003-01-01', 'Masculino', 'LLLL030111MDFLLL11', 'Las Maldivas', 'La Finca', '16811', '55768311', 'L@L.com', ' ', '8', '1', 'LLL', '1', 'adminESCOM', '9', '4'); 
INSERT INTO Alumno (boleta, nombre, paterno, materno, fechaNacimiento, genero, curp, calle, colonia, cp, tel, email, otros, promedio, opcion, contraseña, ficha, noCuenta, idEscu, idEnti) VALUES ('2021630712', 'M', 'M', 'M', '2003-01-01', 'Femenino', 'MMMM030112FDFMMM12', 'Las Maldivas', 'La Finca', '16812', '55768312', 'M@M.com', ' ', '8', '1', 'MMM', '1', 'adminESCOM', '9', '4'); 
INSERT INTO Alumno (boleta, nombre, paterno, materno, fechaNacimiento, genero, curp, calle, colonia, cp, tel, email, otros, promedio, opcion, contraseña, ficha, noCuenta, idEscu, idEnti) VALUES ('2021630713', 'N', 'N', 'N', '2003-01-01', 'Masculino', 'NNNN030113MDFNNN13', 'Las Maldivas', 'La Finca', '16813', '55768313', 'N@N.com', ' ', '8', '1', 'NNN', '1', 'adminESCOM', '9', '4'); 
INSERT INTO Alumno (boleta, nombre, paterno, materno, fechaNacimiento, genero, curp, calle, colonia, cp, tel, email, otros, promedio, opcion, contraseña, ficha, noCuenta, idEscu, idEnti) VALUES ('2021630714', 'O', 'O', 'O', '2003-01-01', 'Femenino', 'OOOO030114FDFOOO14', 'Las Maldivas', 'La Finca', '16814', '55768314', 'O@O.com', ' ', '8', '1', 'OOO', '1', 'adminESCOM', '9', '4'); 
INSERT INTO Alumno (boleta, nombre, paterno, materno, fechaNacimiento, genero, curp, calle, colonia, cp, tel, email, otros, promedio, opcion, contraseña, ficha, noCuenta, idEscu, idEnti) VALUES ('2021630715', 'P', 'P', 'P', '2003-01-01', 'Masculino', 'PPPP030115MDFPPP15', 'Las Maldivas', 'La Finca', '16815', '55768315', 'P@P.com', ' ', '8', '1', 'PPP', '1', 'adminESCOM', '9', '4'); 
INSERT INTO Alumno (boleta, nombre, paterno, materno, fechaNacimiento, genero, curp, calle, colonia, cp, tel, email, otros, promedio, opcion, contraseña, ficha, noCuenta, idEscu, idEnti) VALUES ('2021630716', 'Q', 'Q', 'Q', '2003-01-01', 'Femenino', 'QQQQ030116FDFQQQ16', 'Las Maldivas', 'La Finca', '16816', '55768316', 'Q@Q.com', ' ', '8', '1', 'QQQ', '1', 'adminESCOM', '9', '4'); 
INSERT INTO Alumno (boleta, nombre, paterno, materno, fechaNacimiento, genero, curp, calle, colonia, cp, tel, email, otros, promedio, opcion, contraseña, ficha, noCuenta, idEscu, idEnti) VALUES ('2021630717', 'R', 'R', 'R', '2003-01-01', 'Masculino', 'RRRR030117MDFRRR17', 'Las Maldivas', 'La Finca', '16817', '55768317', 'R@R.com', ' ', '8', '1', 'RRR', '1', 'adminESCOM', '9', '4'); 
INSERT INTO Alumno (boleta, nombre, paterno, materno, fechaNacimiento, genero, curp, calle, colonia, cp, tel, email, otros, promedio, opcion, contraseña, ficha, noCuenta, idEscu, idEnti) VALUES ('2021630718', 'S', 'S', 'S', '2003-01-01', 'Femenino', 'SSSS030118FDFSSS18', 'Las Maldivas', 'La Finca', '16818', '55768318', 'S@S.com', ' ', '8', '1', 'SSS', '1', 'adminESCOM', '9', '4'); 
INSERT INTO Alumno (boleta, nombre, paterno, materno, fechaNacimiento, genero, curp, calle, colonia, cp, tel, email, otros, promedio, opcion, contraseña, ficha, noCuenta, idEscu, idEnti) VALUES ('2021630719', 'T', 'T', 'T', '2003-01-01', 'Masculino', 'TTTT030119MDFTTT19', 'Las Maldivas', 'La Finca', '16819', '55768319', 'T@T.com', ' ', '8', '1', 'TTT', '1', 'adminESCOM', '9', '4'); 
INSERT INTO Alumno (boleta, nombre, paterno, materno, fechaNacimiento, genero, curp, calle, colonia, cp, tel, email, otros, promedio, opcion, contraseña, ficha, noCuenta, idEscu, idEnti) VALUES ('2021630720', 'U', 'U', 'U', '2003-01-01', 'Femenino', 'UUUU030120FDFUUU20', 'Las Maldivas', 'La Finca', '16820', '55768320', 'U@U.com', ' ', '8', '1', 'UUU', '1', 'adminESCOM', '9', '4'); 
INSERT INTO Alumno (boleta, nombre, paterno, materno, fechaNacimiento, genero, curp, calle, colonia, cp, tel, email, otros, promedio, opcion, contraseña, ficha, noCuenta, idEscu, idEnti) VALUES ('2021630721', 'V', 'V', 'V', '2003-01-01', 'Masculino', 'VVVV030121MDFVVV21', 'Las Maldivas', 'La Finca', '16821', '55768321', 'V@V.com', ' ', '8', '1', 'VVV', '1', 'adminESCOM', '9', '4'); 
INSERT INTO Alumno (boleta, nombre, paterno, materno, fechaNacimiento, genero, curp, calle, colonia, cp, tel, email, otros, promedio, opcion, contraseña, ficha, noCuenta, idEscu, idEnti) VALUES ('2021630722', 'W', 'W', 'W', '2003-01-01', 'Femenino', 'WWWW030122FDFWWW22', 'Las Maldivas', 'La Finca', '16822', '55768322', 'W@W.com', ' ', '8', '1', 'WWW', '1', 'adminESCOM', '9', '4'); 
INSERT INTO Alumno (boleta, nombre, paterno, materno, fechaNacimiento, genero, curp, calle, colonia, cp, tel, email, otros, promedio, opcion, contraseña, ficha, noCuenta, idEscu, idEnti) VALUES ('2021630723', 'X', 'X', 'X', '2003-01-01', 'Masculino', 'XXXX030123MDFXXX23', 'Las Maldivas', 'La Finca', '16823', '55768323', 'X@X.com', ' ', '8', '1', 'XXX', '1', 'adminESCOM', '9', '4'); 
INSERT INTO Alumno (boleta, nombre, paterno, materno, fechaNacimiento, genero, curp, calle, colonia, cp, tel, email, otros, promedio, opcion, contraseña, ficha, noCuenta, idEscu, idEnti) VALUES ('2021630724', 'Y', 'Y', 'Y', '2003-01-01', 'Femenino', 'YYYY030124FDFYYY24', 'Las Maldivas', 'La Finca', '16824', '55768324', 'Y@Y.com', ' ', '8', '1', 'YYY', '1', 'adminESCOM', '9', '4'); 
INSERT INTO Alumno (boleta, nombre, paterno, materno, fechaNacimiento, genero, curp, calle, colonia, cp, tel, email, otros, promedio, opcion, contraseña, ficha, noCuenta, idEscu, idEnti) VALUES ('2021630725', 'Z', 'Z', 'Z', '2003-01-01', 'Masculino', 'ZZZZ030125MDFZZZ25', 'Las Maldivas', 'La Finca', '16825', '55768325', 'Z@Z.com', ' ', '8', '1', 'ZZZ', '1', 'adminESCOM', '9', '4');

UPDATE examen SET cupo = '25' WHERE ficha = '1'; 
