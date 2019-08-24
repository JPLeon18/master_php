
SELECT nomEmp, (salEmp + comisionE + 500000) AS 'Salario-Comision-Bonificacion' FROM empleados WHERE codDepto IN (SELECT codDepto FROM departamentos WHERE nombreDpto = 'VENTAS') ORDER BY nomEmp ASC ;


SELECT nomEmp FROM empleados WHERE comisionE > salEmp;


SELECT * FROM empleados WHERE comisionE <= (salEmp * 0.30);
