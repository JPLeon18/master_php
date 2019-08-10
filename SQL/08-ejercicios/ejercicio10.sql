SELECT * FROM vendedores
WHERE grupo_id IN (SELECT id FROM grupos WHERE nombre = 'automotor') ORDER BY sueldo DESC ;

SELECT * FROM vendedores
WHERE grupo_id = 3 ORDER BY sueldo DESC ;