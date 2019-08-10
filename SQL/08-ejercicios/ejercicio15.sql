SELECT coches.modelo, clientes.nombre, SUM(encargos.cantidad) AS 'cantidad de carros comprados'
FROM encargos
INNER JOIN coches ON coches.id = encargos.coche_id
INNER JOIN clientes ON clientes.id = encargos.cliente_id
GROUP BY clientes.id, coches.id;