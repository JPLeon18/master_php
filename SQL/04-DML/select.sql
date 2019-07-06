-- SELECT PARA SACAR TODOS LOS REGISTROS DE UNA TABLA CON CAMPOS ESPECIFICOS--
SELECT email,password,nombre FROM usuarios;


-- CON WHERE --
SELECT email,password,nombre FROM usuarios WHERE nombre = 'elver gomez';

-- OPERADORES ARIMETRICOS --
SELECT  email, (3+5) AS 'Operacion Resultado' FROM usuarios;

-- OPERADORES CON CAMPOS--
SELECT  id, email, (id+5) AS 'Operacion Resultado' FROM usuarios;


SELECT  CEIL (4.89) AS 'Operacion Resultado' FROM usuarios;  -- REDONDEAR---
SELECT  FLOOR (4.89) AS 'Operacion Resultado' FROM usuarios;  --- QUITAR DECIMALES ---
SELECT  ROUND (4.8932, 2) AS 'Operacion Resultado' FROM usuarios;


--- ORDER --
SELECT  id, email, (3+5) AS 'Operacion Resultado' FROM usuarios ORDER BY id ASC;
SELECT  id, email, (3+5) AS 'Operacion Resultado' FROM usuarios ORDER BY id DESC ;

-- MAYUSCULAS --
SELECT UPPER (nombre) as 'USUARIOS' FROM usuarios;

-- CONTCATENAR --
SELECT CONCAT(nombre, ' - ', apellido) as 'Nombre y Email' FROM usuarios;

-- UNA FUNCION DENTRO DE OTRA --
SELECT UPPER (CONCAT(nombre, ' - ', apellido)) as 'Nombre y Email' FROM usuarios;

SELECT LENGTH (nombre) AS 'caracteres' FROM usuarios;

SELECT email, DATEDIFF(fecha_registro, CURDATE()) FROM usuarios;

-- FECHA CON FORMATO --
SELECT email, DATE_FORMAT(fecha_registro, '%d-%m-%y') FROM usuarios;