
SELECT clientes.nombre, SUM(encargos.cantidad * coches.precio) AS 'Encargos Acumulados'
FROM clientes
INNER JOIN encargos ON encargos.cliente_id = clientes.id
INNER JOIN coches ON coches.id = encargos.coche_id
GROUP BY clientes.id;
