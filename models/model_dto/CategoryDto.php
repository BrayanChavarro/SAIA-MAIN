<?php

    class CategoryDto{
        
        /* ATRIBUTOS */        
        private $codigoCategoria;
        private $nombreCategoria;
        
        /* SOBRECARGA DE CONSTRUCTORES */
        
        // Constructor de Constructores
		public function __construct(){
			$a = func_get_args();
			$i = func_num_args();
			if (method_exists($this, $f='__construct'.$i)) {
				call_user_func_array(array($this, $f), $a);
			}
		}
        // Constructor
        public function __construct2($codigoCategoria,$nombreCategoria){
			$this->codigoCategoria = $codigoCategoria;
			$this->nombreCategoria = $nombreCategoria;
		}

        /* MÉTODOS DE ACCESO: SETTER Y GETTERS*/
        
        // Código Rol
        public function setCodigoCategoria($codigoCategoria){
            $this->CodigoCategoria = $codigoCategoria;
        }
        public function getCodigoCategoria(){
            return $this->codigoCategoria;
        }

        // Nombre Rol
        public function setNombreCategoria($nombreCategoria){
            $this->nombreCategoria = $nombreCategoria;
        }
        public function getNombreCategoria(){
            return $this->nombreCategoria;
        }


    }

?>