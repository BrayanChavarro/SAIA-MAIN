<?php

require_once "models/model_dto/SupplierDto.php";    
require_once "models/model_dao/SupplierDao.php";
require_once "models/model_dto/BuyDto.php";
require_once "models/model_dao/BuyDao.php";


    class Purchases{

        private $supplierDao;
        private $buyDao;

        public function __construct(){
            $this->supplierDao = new SupplierDao;
            $this->buyDao = new BuyDao;
        }
        
        public function index(){
            require_once "views/roles/admin/header.php";
            require_once "views/roles/admin/admin_main.view.php";
            require_once "views/roles/admin/footer.php";
        }        
        // Crear Proveedor
        public function createSupplier(){
            // Muestra el formulario
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                require_once "views/roles/admin/header.php";            
                require_once "views/modules/3_purchases/supplier_create.view.php";
                require_once "views/roles/admin/footer.php";
        }
        // Captura los datos
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $supplierDto = new SupplierDto(
                $_POST['nit'], 
                $_POST['nombre'],
                $_POST['direccion'],
                $_POST['email'],
                $_POST['telefono']
            );
            $this->supplierDao->createSupplier($rolDto);
            header("Location: ?c=Users&a=readRol");
        }
    }
    // Consultar Proveedores
    public function readSupplier(){
            // Programar
            require_once "views/roles/admin/header.php";            
            require_once "views/modules/3_purchases/supplier_read.view.php";
            require_once "views/roles/admin/footer.php";
        }
        // Actualizar Proveedor
        public function updateSupplier(){
            // Programar
            require_once "views/roles/admin/header.php";            
            require_once "views/modules/3_purchases/supplier_update.view.php";
            require_once "views/roles/admin/footer.php";
        }
        // Eliminar Proveedor
        public function deleteSupplier(){
            // Programar            
        }
        // Crear Compra
        public function createBuy(){
            // Programar
            require_once "views/roles/admin/header.php";            
            require_once "views/modules/3_purchases/buy_create.view.php";
            require_once "views/roles/admin/footer.php";
        }
        // Consultar Compras
        public function readBuy(){
            // Programar
            require_once "views/roles/admin/header.php";            
            require_once "views/modules/3_purchases/buy_read.view.php";
            require_once "views/roles/admin/footer.php";
        }
        // Actualizar Compra
        public function updateBuy(){
            // Programar
            require_once "views/roles/admin/header.php";            
            require_once "views/modules/3_purchases/buy_update.view.php";
            require_once "views/roles/admin/footer.php";
        }
        // Eliminar Compra
        public function deleteBuy(){
            // Programar            
        }
    }
?>