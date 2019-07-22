SELECT grupos.nombre, CEIL(AVG(vendedores.sueldo)) AS 'sueldo por grupo'
FROM vendedores
INNER JOIN grupos ON grupos.id = vendedores.grupo_id
GROUP BY grupo_id;