DROP TABLE IF EXISTS asistencia;

CREATE TABLE `asistencia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_empleado` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `fecha` date NOT NULL,
  `time_in` time NOT NULL,
  `estado` int(11) NOT NULL,
  `time_out` time NOT NULL,
  `num_hr` double NOT NULL,
  `registro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=latin1;

INSERT INTO asistencia VALUES("73","3443","Carlos Rivas","2020-12-15","07:46:35","1","07:49:05","9","2020-12-15 07:49:05");
INSERT INTO asistencia VALUES("74","4632","Juan Cortez","2020-12-15","07:47:30","1","07:48:01","9","2020-12-15 07:48:01");
INSERT INTO asistencia VALUES("75","8364","Abraham Douglas Escobar Duran","2020-12-15","07:51:32","1","07:51:38","9","2020-12-15 07:51:38");


DROP TABLE IF EXISTS cargo;

CREATE TABLE `cargo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

INSERT INTO cargo VALUES("10","Programador");


DROP TABLE IF EXISTS empleado;

CREATE TABLE `empleado` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `direccion` text NOT NULL,
  `dui` varchar(50) NOT NULL,
  `edad` int(3) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `id_cargo` int(11) NOT NULL,
  `id_horario` int(11) NOT NULL,
  `salario` double NOT NULL,
  `seguro` double NOT NULL,
  `afp` double NOT NULL,
  `registro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=latin1;

INSERT INTO empleado VALUES("84","4632","Juan Cortez","San salvador, Valle del sol","2345678-9","25","6564-5796","10","7","448.75","15","36.25","2020-12-15 07:45:03");
INSERT INTO empleado VALUES("85","3443","Carlos Rivas","Los conacastes #2","97607996-2","22","9875-3804","10","9","359","12","29","2020-12-15 07:51:05");
INSERT INTO empleado VALUES("86","8364","Abraham Douglas Escobar Duran","Santiago Nonualco","97607996-2","22","9876-8980","10","7","400","0","0","2020-12-15 07:51:23");


DROP TABLE IF EXISTS hora_extra;

CREATE TABLE `hora_extra` (
  `id` int(11) NOT NULL,
  `id_empleado` varchar(15) NOT NULL,
  `horas` double NOT NULL,
  `pago_hora` double NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



DROP TABLE IF EXISTS horario;

CREATE TABLE `horario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time_in` time NOT NULL,
  `time_out` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO horario VALUES("7","07:00:00","16:00:00");
INSERT INTO horario VALUES("9","07:30:00","16:30:00");


DROP TABLE IF EXISTS pago;

CREATE TABLE `pago` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) NOT NULL,
  `mensual` double NOT NULL,
  `quincenal` double NOT NULL,
  `afp` double NOT NULL,
  `seguro` double NOT NULL,
  `descuento` int(11) NOT NULL,
  `registro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;

INSERT INTO pago VALUES("53","Carlos Rivas","359","179.5","29","12","41","2020-12-15 07:52:20");
INSERT INTO pago VALUES("54","Juan Cortez","365.41666666667","182.70833333333","36.25","15","51","2020-12-15 07:52:37");
INSERT INTO pago VALUES("55","Abraham Douglas Escobar Duran","386.66666666667","193.33333333333","0","0","0","2020-12-15 07:52:51");
INSERT INTO pago VALUES("56","Abraham Douglas Escobar Duran","400","200","0","0","0","2020-12-15 07:55:26");


DROP TABLE IF EXISTS planilla;

CREATE TABLE `planilla` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_empleado` int(11) NOT NULL,
  `nombre` int(11) NOT NULL,
  `fecha` int(11) NOT NULL,
  `ime_in` int(11) NOT NULL,
  `estado` int(11) NOT NULL,
  `time_out` int(11) NOT NULL,
  `num_hr` int(11) NOT NULL,
  `registro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



DROP TABLE IF EXISTS usuario;

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(150) NOT NULL,
  `clave` varchar(255) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `registro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

INSERT INTO usuario VALUES("3","abraham","63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1","dstiloficial@gmail.com","Planillero","1","2020-12-15 06:53:24");
INSERT INTO usuario VALUES("25","admin","90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad","admin@admin.com","Administrador","1","2020-12-15 07:40:36");


