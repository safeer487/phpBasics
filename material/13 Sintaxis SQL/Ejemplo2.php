<?php

/* Simple */
SELECT columnas FROM tablas WHERE filtro;
SELECT * FROM vecinos;
SELECT * FROM vecinos WHERE perro = '1';

/* Contar número de resultados */
SELECT count(*) FROM vecinos;

/* Máximo resultado */
SELECT Max(edad) FROM vecinos;

/* Mínimo resultado */
SELECT Min(edad) FROM vecinos;

/* Consulta relacional con un resultado */
SELECT nombre FROM vecinos WHERE id_propietarios = (SELECT id FROM inquilinos WHERE presidente = TRUE);

/* Consulta relacional con varios resultados */
SELECT nombre FROM vecinos WHERE id_propietarios LIKE (SELECT id FROM inquilinos WHERE propietario = TRUE);

/* Limit */ 
... LIMIT 0, 10;
//Ejemplo
SELECT * FROM vecinos LIMIT 0, 2;

/* Order by */
... ORDER BY nombre ASC;
... ORDER BY nombre DESC;
//Ejemplo
SELECT * FROM vecinos ORDER BY nombre DESC;

/* Timespan o fechas */
SELECT * FROM vecinos WHERE compra = '2013-09-23';

?>