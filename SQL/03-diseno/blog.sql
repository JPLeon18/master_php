CREATE TABLE usuarios(
id INT (5) AUTO_INCREMENT NOT NULL
nombre VARCHAR (100),
apellido VARCHAR (100),
email VARCHAR (100),
password VARCHAR (50),
fecha_registro DATE ,
CONSTRAINT pk_usuarios PRIMARY KEY (id)
);

CREATE TABLE categorias(
id INT (5) AUTO_INCREMENT NOT NULL ,
nombre VARCHAR (50)
CONSTRAINT pk_categorias PRIMARY KEY (id)
);

CREATE TABLE entradas(
id INT (5) AUTO_INCREMENT NOT NULL ,
usuario_id INT (5),
categoria_id INT (5),
titulo VARCHAR (100),
descripcion VARCHAR (255),
fecha DATE ,
CONSTRAINT pk_entradas PRIMARY KEY (id),
CONSTRAINT fk_entradas FOREIGN KEY (usuario_id),
CONSTRAINT fk_entradas FOREIGN KEY (categoria_id)
);

