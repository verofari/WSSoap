<?php 

    require_once __DIR__.'/vendor/autoload.php';
    require_once __DIR__.'/server/ProxyServer.php';
    
    $class = "ProxyServer";
    $serviceURI = "http://soap-service.server/index.php";

    //Nos bajamos la librería con composer: > composer require php2wsdl/php2wsdl
    $wsdlGenerator = new PHP2WSDL\PHPClass2WSDL($class, $serviceURI);
    $wsdlGenerator->generateWSDL(true);
    
    file_put_contents(__DIR__.'/wsdl.xml', $wsdlGenerator->dump());
    
?>

