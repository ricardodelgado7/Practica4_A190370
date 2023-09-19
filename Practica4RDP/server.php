<?php
    require_once "lib/nusoap.php";

    function getCoches($datos){
        if($datos == "Coches"){
            return join (",", array (
                "TSURU G2 2015",
                "VOLKSWAGEN JETTA 2021",
                "CHEVROLET AVEO 2016",
                "FORD MUSTANG 2023"));
        }
        else{
            return "No hay Coches";
        }
    }
    $server = new soap_server(); // CREAR INSTANCI DE SOAP
    $server->register("getCoches"); // Indica el metodo o funcion a devolver
    if (!isset ($HTTP_RAW_POST_DATA) ) $HTTP_RAW_POST_DATA = file_get_contents( 'php://input' );
        $server->service($HTTP_RAW_POST_DATA);
?>