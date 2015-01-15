<?PHP
require ("pruebaXajaxs.common.php");
//Aqui se llama el 2do archivo que crearemos es donde se crearan las instancias de xajaxs
?>
<html style="margin: 10px;">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1" >
        <script src="prueba.js"></script>

        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

        <link rel=stylesheet href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

        <title>Ejemplo Xajaxs</title>

        <?php $xajax->printJavascript(); ?>
        <!--Esta parte es necesaria antes del </head> 
        para que xajax cree los scrips necesarios-->
    </head>
    <body>

        <div class="panel-info" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-info">
                <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-info">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Ejemplo Xajaxs
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body"> 
					<p id='texto'>Por favor seleccione un valor </p>
                        <p>  <select id="prueba" >
                                <!--Aqui se liga la funcion xajaxs que creamos a un evento de un elemento html-->
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select> 
                        </p> 
						<button id='limpiar' type="button" class="btn btn-success">Limpiar</button>
                    </div>
                </div>
            </div>
        </div>

        <div role="alert" id="respuesta"></div>
        <!--Este será el elemento donde xajaxs desplegara el resultado de las funciones
        puede ser cualquier otro elemento html pero para este ejemplo es simplemente un <div> -->
    </body>
</html>