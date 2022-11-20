SET time_zone = "+01:00";

CREATE TABLE usuarios(
  usuario VARCHAR(25) NOT NULL,
  contrasenia VARCHAR(1000),
  nombreapellidos VARCHAR (100),
  DNI VARCHAR(10),
  telefono INT(9),
  fechanacimiento DATE,
  email VARCHAR(100),

  PRIMARY KEY (usuario)
);

CREATE TABLE animales(
  id INT NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(20) NOT NULL,
  especie VARCHAR(20),
  raza VARCHAR(30),
  edad VARCHAR(20),
  sexo CHAR(1) NOT NULL,
  descripcion LONGTEXT,

  PRIMARY KEY (id)
);

CREATE TABLE log(
  id INT NOT NULL AUTO_INCREMENT,
  usuario VARCHAR(25) NOT NULL,
  iniciocorrecto VARCHAR(2) NOT NULL,
  fechahora DATETIME NOT NULL,

  PRIMARY KEY(id)
);