<?php

    
    $options = [
        "location" => "http://soap-service.server/index.php",
        "uri" => "http://soap-service.server/index.php",
        "trace" => true
    ];

    //Sin WSDL
    //$client = new SoapClient($wsdl = null, $options);
    
    //echo file_get_contents("http://soap-service.server/wsdl.xml");
    
    //Con WSDL
    $client = new SoapClient("http://soap-service.server/wsdl.xml", $options);
    
    //print($client->saludarCliente());
    print($client->saludarUsuario());
    
?>    