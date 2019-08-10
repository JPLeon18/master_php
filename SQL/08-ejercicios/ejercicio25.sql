
SELECT coches.modelo, clientes.nombre, clientes.ciudad
FROM encargos
INNER JOIN coches ON coches.id = encargos.coche_id
INNER JOIN clientes ON clientes.id = encargos.cliente_id
GROUP BY clientes.id
HAVING clientes.ciudad = 'cali';


SELECT coches.modelo, clientes.nombre, clientes.ciudad
FROM coches, clientes, encargos
WHERE coches.id = encargos.coche_id AND clientes.id = encargos.cliente_id AND clientes.ciudad = 'cali'
GROUP BY clientes.id;