SELECT CONCAT(nombre, ' ', apellido) AS 'Vendedores', fecha_alta, DAYNAME(fecha_alta) AS 'Dia de registro'
FROM vendedores;