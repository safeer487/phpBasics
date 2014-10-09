<?php

/* Insertar */
INSERT INTO usuarios VALUES ('', 'Lisa');
INSERT INTO usuarios (nombre, id) VALUES 
('Flanders', NULL);

/* Consulta */
SELECT * FROM usuarios;
SELECT nombre FROM usuarios;
SELECT id, nombre FROM usuarios;

/* Actualizar */
UPDATE usuarios SET nombre = 'Burns' WHERE id = '1';

/* Borrar */
DELETE FROM usuarios WHERE id = '1';

/* Formato de fechas */
'2013-09-23'
//Ejemplo
INSERT INTO libreria (id, fecha) VALUES (NULL, '1886-02-11');

/* Formato de boolean */
+------+-------+
| TRUE | FALSE |
+------+-------+
|    1 |     0 |
+------+-------+
//Ejemplo
INSERT INTO libreria(id, nombre, digital) VALUES (NULL, 'Don quijote', TRUE);
INSERT INTO libreria(id, nombre, digital) VALUES (NULL, '20 poemas de amor y una cancion desesperada', 0);

/* Crear tabla */
CREATE TABLE libreria (
         	id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
         	titulo VARCHAR(100),
         	autor VARCHAR(30),
         	fecha DATE,
         	porcentajeVentas FLOAT,
         	digital BOOLEAN,
         	capituloEjemplo TEXT
       		);

Tipos de valores: INTEGER (números enteros), VARCHAR(cadena de texto), 
TEXT(Textos largos), DATE (fechas), FLOAT(decimales), 
BOOLEAN(true o false)

/* Borrar tabla */
DROP TABLE libreria;

?>