
SELECT * FROM vendedores WHERE fecha_alta = (SELECT MIN(fecha_alta) FROM vendedores);


SELECT coches.modelo, coches.marca, SUM(encargos.cantidad) AS 'Cantidad de los mas vendidos'
FROM coches
INNER JOIN encargos ON encargos.coche_id = coches.id
GROUP BY coches.id
ORDER BY SUM(encargos.cantidad) DESC;
