INSERT INTO usuarios VALUES (NULL,'pepito','perez','calzon@chino.com','1234',CURDATE());

--- subconsulta--

SELECT * FROM usuarios WHERE id IN (SELECT usuario_id FROM entradas);


SELECT * FROM usuarios WHERE id NOT IN (SELECT usuario_id FROM entradas);

SELECT nombre, apellido FROM usuarios WHERE id IN (SELECT usuario_id FROM entradas WHERE descripcion LIKE'%online%');


SELECT  * FROM entradas WHERE categoria_id IN (SELECT id FROM categorias WHERE nombre = 'Accion');

SELECT * FROM categorias WHERE id IN (SELECT categoria_id FROM entradas WHERE COUNT(id) >= 2);

SELECT * FROM usuarios WHERE id IN (SELECT usuario_id FROM entradas WHERE WEEKDAY(fecha) = 'Tuesday');


