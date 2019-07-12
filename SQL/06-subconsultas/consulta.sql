INSERT INTO usuarios VALUES (NULL,'pepito','perez','calzon@chino.com','1234',CURDATE());

--- subconsulta--

SELECT * FROM usuarios WHERE id IN (SELECT usuario_id FROM entradas);


SELECT * FROM usuarios WHERE id NOT IN (SELECT usuario_id FROM entradas);

SELECT nombre, apellido FROM usuarios WHERE id IN (SELECT usuario_id FROM entradas WHERE descripcion LIKE'%online%');


SELECT  * FROM entradas WHERE categoria_id IN (SELECT id FROM categorias WHERE nombre = 'Accion');

SELECT * FROM categorias WHERE id IN (SELECT categoria_id FROM entradas GROUP BY categoria_id HAVING COUNT(categoria_id) >= 2);

SELECT * FROM usuarios WHERE id IN (SELECT usuario_id FROM entradas WHERE WEEKDAY(fecha) = 3);

SELECT nombre FROM usuarios WHERE id = (SELECT usuario_id FROM entradas GROUP BY usuario_id ORDER BY COUNT(id) DESC LIMIT 1);

SELECT nombre FROM categorias WHERE id NOT IN (SELECT categoria_id FROM entradas);


SELECT entradas.titulo, usuarios.nombre, categorias.nombre
FROM entradas, usuarios, categorias
WHERE entradas.usuario_id = usuarios.id AND entradas.categoria_id = categorias.id;

SELECT categorias.nombre, COUNT(entradas.id) AS 'CANTIDAD DE ENTRADAS'
FROM categorias, entradas
WHERE entradas.categoria_id = categorias.id
GROUP BY categorias.nombre;

SELECT usuarios.email, COUNT(entradas.id) AS 'CANTIDAD DE ENTRADAS'
FROM usuarios, entradas
WHERE entradas.usuario_id = usuarios.id
GROUP BY usuarios.id;

