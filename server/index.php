<?php

    require_once __DIR__.'/ProxyServer.php';
    
    $options = [
        "uri" => "http://soap-service.server/index.php"
    ];
    
    //Creamos servidor SOAP
    //El primer parámetros null sería el wsdl
    $server = new SoapServer(null, $options);
    $server->setClass('ProxyServer');
    
    //Escucha las peticiones
    $server->handle();
    
    echo "SERVER ESCUCHANDO";
    
    //Información
    //phpinfo();
    
    
?>