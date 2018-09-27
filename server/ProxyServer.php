<?php 

    require_once __DIR__.'/Cliente.php';
    require_once __DIR__.'/Usuario.php';

    class ProxyServer
    {
        private $cliente;
        private $usuario;
        
        public function __construct(){
            $this->cliente = new Cliente();
            $this->usuario = new Usuario();
        }
        
        //API que ofrecer�a el WS
        //La anotaci�n @soap provoca que apareza el m�todo en el wsdl.
        /**
         * @soap
         * @return string
         */
        public function saludarCliente(){
            return $this->cliente->saludar();
        }
        
        /**
         * @soap
         * @return string
         */
        public function saludarUsuario(){
            return $this->usuario->saludar();
        }
        
    }

?>