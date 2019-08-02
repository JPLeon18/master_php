
CREATE VIEW vendedores_A AS
SELECT * FROM vendedores
WHERE grupo_id IN (SELECT id FROM grupos WHERE nombre = 'automotor');