
SELECT * FROM clientes WHERE id IN
(SELECT cliente_id FROM encargos WHERE cantidad >= 3);