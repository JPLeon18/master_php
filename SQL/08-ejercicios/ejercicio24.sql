
SELECT coches.marca, clientes.nombre
FROM coches
INNER JOIN encargos ON encargos.coche_id = coches.id
INNER JOIN clientes ON clientes.id = encargos.cliente_id;



SELECT coches.marca, clientes.nombre
FROM coches, clientes, encargos
WHERE coches.id = encargos.coche_id AND clientes.id = encargos.cliente_id;