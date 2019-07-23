SELECT * FROM encargos WHERE cliente_id IN (SELECT id FROM clientes WHERE nombre = 'juan pablo leon');

SELECT encargos.cantidad, coches.modelo, clientes.nombre
FROM encargos
INNER JOIN coches ON coches.id = encargos.coche_id
INNER JOIN clientes ON clientes.id = encargos.cliente_id
WHERE clientes.nombre = 'juan pablo leon';