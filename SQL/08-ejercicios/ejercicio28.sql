
SELECT clientes.nombre, COUNT(encargos.id)
FROM clientes
LEFT JOIN encargos ON encargos.cliente_id = clientes.id
GROUP BY clientes.id;

