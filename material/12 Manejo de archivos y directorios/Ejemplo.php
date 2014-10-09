<?php

/* Gestionar directorios */

opendir	--> Abre un directorio situado en $path y le asigna un 
identificador $dir  --> $dir = opendir($path)
readdir	--> Lee un elemento del directorio $dir abierto previamente
 con opendir y desplaza el puntero al elemento 
 siguiente  --> readdir($dir)
rmdir --> Elimina el directorio $dir --> rmdir($dir)
mkdir --> Crea un directorio situado en $path con los derechos de 
acceso $derechos (entero) --> mkdir($path, $derechos)
rewinddir --> Vuelve el puntero de lectura del directorio $dir al
 primer elemento --> rewinddir($dir)
closedir --> Cierra el directorio $dir abierto previamente con 
opendir --> closedir($dir)

//Ejemplo
/* Listas directorio para verificar donde estamos */
$ruta = "./";
//$ruta = "C:\\temp\\"; 
//Abrir directorio 
$leerdirectorio = opendir($ruta); 

//hacemos un bucle para mostrar el contenido 
while (false !== ($info = readdir($leerdirectorio))) {
	//mostramos el contenido 
	print("$info
	"); 
} 
//cerrar directorio 
closedir($ruta);

/* Crear directorio */
mkdir($ruta."nuevoDirectorio", 0777);

/* Borrar directorio */
rmdir($ruta."nuevoDirectorio");

/* Crear archivo */
$fp = fopen("miarchivo.txt","w+");

/* Escribimos sobre él */
fwrite($fp, "Nombre: Paco");
fclose($fp);

/* Leemos el archivo */
while(!feof($fp)) {
	echo fgets($fp). "<br />";
}
fclose($fp);

//Copiar archivo
copy($archivo, $nuevo_archivo);

//Mover
rename("/tmp/archivo_tmp.txt", "/home/user/login/docs/mi_archivo.txt");

//Eliminar
unlink("/tmp/archivo_tmp.txt");

?>
