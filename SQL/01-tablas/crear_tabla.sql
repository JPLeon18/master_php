CREATE TABLE usuarios(
id INT (4) AUTO_INCREMENT NOT NULL ,
nombre VARCHAR (100) NOT NULL,
apellido VARCHAR (100) DEFAULT 'LEON',
email VARCHAR (100) NOT NULL,
password VARCHAR (20),
CONSTRAINT pk_usuarios PRIMARY KEY (id)
);