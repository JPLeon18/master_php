SELECT clientes.nombre, COUNT(encargos.id)
FROM encargos
INNER JOIN clientes ON clientes.id = encargos.cliente_id
GROUP BY clientes.nombre
HAVING COUNT(encargos.id) >= 2
ORDER BY COUNT(encargos.id) DESC;