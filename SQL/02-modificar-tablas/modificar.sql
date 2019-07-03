
# Renombrar tabla #
ALTER TABLE usuarios RENAME TO users;


# Cambiar nombre de la columna #
ALTER TABLE users CHANGE nombre nombres VARCHAR (100) NOT NULL ;


#modificar propiedades de una columna sin cambiar el nombre #
ALTER TABLE users MODIFY apellidos CHAR (50) NOT NULL ;


#añadir columna#
ALTER TABLE users ADD website VARCHAR (100);


# restriccion de tipo unico a una columna #
ALTER TABLE users ADD CONSTRAINT uq_email UNIQUE (email);

# borrar la columna  #
ALTER TABLE users DROP website;