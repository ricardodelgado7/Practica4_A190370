<?php
require_once "lib/nusoap.php";
$cliente = new nusoap_client("http://localhost/Practica4RDP/server.php");
$error = $cliente->getError();
if($error){
    echo "<h2> error Constructor</h2><pre>" . $error . "</pre>";
}
$result = $cliente->call("getCoches", array ("datos" => "Coches"));
if($cliente->fault) {//checamos una falla al momento de llamar al metodo
    echo"<h2> Fault</h2><pre>";
    print_r($result);
    echo "</pre>";
}
else{
    $error = $cliente->getError();
    if($error){
        echo "<h2>Error</h2><pre>" .$error . "</pre>";
    }
    else{
        echo"<h2> COCHES</h2><pre> ";
        echo $result;
        echo "</pre>";
    }
}
?>
