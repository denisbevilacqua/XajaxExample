<?php
function muestravalor($Val)
{       
        //Aqui podemos traer algo del servidor y mostrarla mediante xajax sin actualizar la página
	$respuesta = "El valor seleccionado es ".$Val.".";
        $respuesta .= "</br> Gracias por usar nuestro servicio y por elegir la opción ". $Val .".";
	$objResponse = new xajaxResponse();
	$objResponse->assign("respuesta", "innerHTML", $respuesta);
	return $objResponse;
}
//Se define la funcion muestravalor 
//que en éste caso solo devuelve un texto con el valor del argumento $Val

require("pruebaXajaxs.common.php");
$xajax->processRequest();
?>