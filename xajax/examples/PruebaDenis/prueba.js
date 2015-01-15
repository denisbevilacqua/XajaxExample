window.onload = function() {
    
    document.getElementById("prueba").onclick=function(){
	$( "#respuesta" ).show( "slow", function() {
		$( "#texto" ).text('Puede cambiar el valor elegido a uno distinto de ' + document.getElementById('prueba').value+'.');
  });
        $('#respuesta').addClass('alert alert-success');
        xajax_muestravalor(document.getElementById('prueba').value);return false;

    };
	
	document.getElementById("limpiar").onclick=function(){
		
		$( "#respuesta" ).hide( "slow", function() {
		
		$( "#texto" ).text('Por favor seleccione un valor nuevamente');
  });
        //xajax_muestravalor(document.getElementById('prueba').value);return false;

    };
	
    
};