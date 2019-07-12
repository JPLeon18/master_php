
SELECT COUNT(titulo) AS 'numero de entradas por categoria', categoria_id FROM entradas GROUP BY categoria_id;


 --- Having---
SELECT COUNT(titulo) AS 'numero de entradas por categoria', categoria_id FROM entradas GROUP BY categoria_id HAVING COUNT(titulo) >= 2;

