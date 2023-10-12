<?php
    require_once "lib/nusoap.php";
    $cliente = new nusoap_client("https://localhost/ServiciosWeb/PRACTICA4_A191250/servidor.php");

    $error = $cliente->getError();
    if($error)
    {
        echo "<h2>Constructor error</h2><pre>" . $error . "</pre>";
    }

    $result = $cliente->call("getPaises", array("datos" => "Paises"));
    if($cliente->fault)
    {
        echo "<h2>Fault</h2><pre>";
        print_r($result);
        echo "</pre>";
    }
    else
    {
        $error = $cliente->getError();

        if($error)
        {
            echo "<h2>Error>/h2><pre>" . $error . "</pre>";
        }
        else
        {
            echo "<h2>PAISES</h2><pre>";
            echo $result; 
            echo "</pre>";
        }
    }
?>