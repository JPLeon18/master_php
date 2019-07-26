SELECT grupos.nombre, vendedores.nombre, vendedores.sueldo
FROM grupos
INNER JOIN vendedores ON vendedores.grupo_id = grupos.id
GROUP BY vendedores.id
ORDER BY vendedores.sueldo DESC LIMIT 1;




SELECT * FROM grupos WHERE id IN
(SELECT grupo_id FROM vendedores WHERE sueldo =
(SELECT MAX(sueldo) FROM vendedores));