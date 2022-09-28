CREATE DATABASE IF NOT EXISTS regufio;

USE refugio;

CREATE TABLE refugio (
  usuario VARCHAR(25) NOT NULL,
  contrasenia VARCHAR(50) NOT NULL,
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
  subidopor VARCHAR(25) NOT NULL,
  imagen IMAGE,
  
  PRIMARY KEY (id),
  FOREIGN KEY (subidopor) references usuarios(usuario)
);
