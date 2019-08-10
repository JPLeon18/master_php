SELECT clientes.nombre, encargos.cantidad, coches.modelo
FROM encargos
INNER JOIN clientes ON clientes.id = encargos.cliente_id
INNER JOIN coches ON coches.id = encargos.coche_id
WHERE coches.modelo = 'mazda 3 2018';