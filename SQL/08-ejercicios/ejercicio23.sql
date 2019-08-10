
SELECT clientes.id, clientes.nombre, vendedores.id, vendedores.nombre
FROM clientes
INNER JOIN vendedores ON vendedores.id = clientes.vendedor_id;
