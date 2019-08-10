CREATE DATABASE IF NOT EXISTS concesionario;
use concesionario;

CREATE TABLE coches (
id INT(5) AUTO_INCREMENT NOT NULL,
modelo VARCHAR (50) NOT NULL,
marca VARCHAR (50) NOT NULL,
precio INT(20) NOT NULL,
stock INT(255) NOT NULL,
CONSTRAINT pk_coches PRIMARY KEY (id)
)ENGINE=InnoDB;

CREATE TABLE grupos (
id INT(5) AUTO_INCREMENT NOT NULL,
nombre VARCHAR (100) NOT NULL,
ciudad VARCHAR (100),
CONSTRAINT pk_grupos PRIMARY KEY (id)
)ENGINE=InnoDB;

CREATE TABLE vendedores (
id INT(5) AUTO_INCREMENT NOT NULL,
grupo_id INT(5) NOT NULL,
jefe INT(5) NOT NULL,
nombre VARCHAR (100) NOT NULL,
apellido VARCHAR (100) NOT NULL,
cargo VARCHAR (100) NOT NULL,
fecha_alta DATE NOT NULL,
sueldo INT (255) NOT NULL,
comision INT(255) NOT NULL,
CONSTRAINT pk_vendedores PRIMARY KEY (id),
CONSTRAINT fk_vendedor_grupo FOREIGN KEY (grupo_id) REFERENCES grupos(id),
CONSTRAINT fk_vendedor_jefe FOREIGN KEY (jefe) REFERENCES vendedores(id)
)ENGINE=InnoDB;

CREATE TABLE clientes (
id INT (5) AUTO_INCREMENT NOT NULL,
vendedor_id INT (5) NOT NULL,
nombre VARCHAR (100) NOT NULL,
ciudad VARCHAR (100),
gastado INT (255) NOT NULL,
fecha DATE NOT NULL,
CONSTRAINT pk_clientes PRIMARY KEY (id),
CONSTRAINT fk_cliente_vendedor FOREIGN KEY (vendedor_id) REFERENCES vendedores(id)
)ENGINE=InnoDB;

CREATE TABLE encargos (
id INT (5) AUTO_INCREMENT NOT NULL,
cliente_id INT (5) NOT NULL,
coche_id INT (5) NOT NULL,
cantidad INT (100) NOT NULL,
fecha DATE NOT NULL,
CONSTRAINT pk_encargos PRIMARY KEY (id),
CONSTRAINT fk_encargo_cliente FOREIGN KEY (cliente_id) REFERENCES clientes(id),
CONSTRAINT fk_encango_coche FOREIGN KEY (coche_id) REFERENCES coches(id)
)ENGINE=InnoDB;

