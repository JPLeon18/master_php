CREATE TABLE usuarios(
id INT (5) AUTO_INCREMENT NOT NULL,
nombre VARCHAR (100),
apellido VARCHAR (100),
email VARCHAR (100),
password VARCHAR (50),
fecha_registro DATE ,
CONSTRAINT pk_usuarios PRIMARY KEY (id),
CONSTRAINT uq_email UNIQUE (email)
)ENGINE=InnoDB;

CREATE TABLE categorias(
id INT (5) AUTO_INCREMENT NOT NULL ,
nombre VARCHAR (50),
CONSTRAINT pk_categorias PRIMARY KEY (id)
)ENGINE=InnoDB;

CREATE TABLE entradas(
id INT (5) AUTO_INCREMENT NOT NULL ,
usuario_id INT (5) NOT NULL,
categoria_id INT (5) NOT NULL,
titulo VARCHAR (100),
descripcion MEDIUMTEXT,
fecha DATE ,
CONSTRAINT pk_entradas PRIMARY KEY (id),
CONSTRAINT fk_entrada_usuario FOREIGN KEY (usuario_id) REFERENCES  usuarios(id),
CONSTRAINT fk_entrada_categoria FOREIGN KEY (categoria_id) REFERENCES categorias(id)
)ENGINE=InnoDB;

