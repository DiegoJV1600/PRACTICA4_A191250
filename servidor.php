<?php
    require_once "lib/nusoap.php";
    function getPaises($datos)
    {
        if($datos == "Paises")
        {
            return join(",", array(
                "México",
                "España",
                "Alemania",
                "Egipto",
                "Grecia",
                "Noruega",
                "Francia",
                "EUA"
            ));
        }
        else
        {
            return "No hay paises";
        }
    }

    $server = new soap_server();
    $server->register("getPaises");
    if(!isset($HTTP_RAW_POST_DATA)) $HTTP_RAW_POST_DATA = file_get_contents('php://input');
    $server->service($HTTP_RAW_POST_DATA);
?>