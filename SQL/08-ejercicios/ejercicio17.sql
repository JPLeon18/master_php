SELECT clientes.nombre, vendedores.nombre
FROM clientes
INNER JOIN vendedores ON vendedores.id = clientes.vendedor_id
GROUP BY clientes.id
HAVING vendedores.nombre = 'consianpirula';

SELECT * FROM clientes WHERE vendedor_id IN (SELECT id FROM vendedores WHERE nombre = 'consianpirula');