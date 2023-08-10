<?php

    class ClientDto{
        
        /* ATRIBUTOS */        
        private $documento;
        private $nombreClient;
        private $apellidosClient;
        private $correoClient;
        private $direccion;
        private $telefono;
        
        /* SOBRECARGA DE CONSTRUCTORES */
        
        // Constructor de Constructores
		public function __construct()
        {
            $a = func_get_args();
			$i = func_num_args();
			if (method_exists($this, $f='__construct'.$i)) {
				call_user_func_array(array($this, $f), $a);
			};
        }
        // Constructor: Vacío
        public function __construct0(){}

        // Constructor: con todos los elementos de la tabla
        public function __construct6($documento,$nombreClient,$apellidosClient,$correoClient,$direccion,$telefono){
			$this->documento = $documento;
            $this->nombreClient = $nombreClient;
			$this->apellidosClient = $apellidosClient;
			$this->correoClient = $correoClient;			
            $this->direccion = $direccion;
            $this->telefono = $telefono;
		}

        /* MÉTODOS DE ACCESO: SETTER Y GETTERS*/
        
        // documento
        public function getDocumento(){
            return $this->documento;
        }
        public function setDocumento($documento){
            $this->documento = $documento;
        }

        // apellidos 
        public function setApellidosClient($apellidosClient){
            $this->apellidosClient = $apellidosClient;
        }
        public function getApellidosClient(){
            return $this->apellidosClient;
        }
        // Nombre 
        public function setNombreClient($nombreClient){
            $this->nombreClient = $nombreClient;
        }
        public function getNombresClient(){
            return $this->nombreClient;
        }



        // correo
        public function setCorreoClient($correoClient){
            $this->correoClient = $correoClient;
        }
        public function getCorreoClient(){
            return $this->correoClient;
        }

        // direccion
        public function setDireccion($direccion){
            $this->direccion = $direccion;
        }
        public function getDireccion(){
            return $this->direccion;
        }

        // telefono
        public function setTelefono($telefono){
            $this->telefono = $telefono;
        }
        public function getTelefono(){
            return $this->telefono;
        }
    }

?>