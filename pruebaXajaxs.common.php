<?php
require_once ("xajax/xajax_core/xajax.inc.php");
//se hace el llamado al archivo principal de la libreria

$xajax = new xajax("pruebaXajaxs.funciones.php");
//Se crea una instancia de xajaxs pasando como argumento
//el 3er archivo donde se definirán las funciones

$xajax->configure('javascript URI','xajax');
//Se indica la carpeta donde se copiaron los archivos de la libreria

$xajax->register(XAJAX_FUNCTION,"muestravalor");
//se registra la funcion en este caso se llamará "muestravalor"
//se pueden definir tantas funciones como eventos se quieran
//controlar en nuestro codigo html
?>