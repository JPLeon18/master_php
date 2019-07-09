SELECT * FROM usuarios WHERE email = 'cardona@juan,com';

SELECT nombre, apellido FROM usuarios WHERE YEAR (fecha_registro) = 2019;

SELECT email FROM usuarios WHERE apellido LIKE '%a' AND password = '123';

SELECT * FROM  usuarios WHERE (YEAR (fecha_registro) % 2 = 0);

SELECT UPPER (nombre), apellido, email FROM  usuarios WHERE (LENGTH (nombre) > 6) AND (YEAR (fecha_registro) < 2020);