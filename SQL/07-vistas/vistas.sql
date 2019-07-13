
CREATE VIEW entradas_agrupadas AS
SELECT entradas.titulo AS 'Titulo', usuarios.nombre AS 'Autor', categorias.nombre AS 'Categorias'
FROM entradas
INNER JOIN usuarios ON entradas.usuario_id = usuarios.id
INNER JOIN categorias ON entradas.categoria_id = categorias.id;