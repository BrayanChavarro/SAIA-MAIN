<?php
    class Inventories{
        public function __construct(){}
        public function index(){
            require_once "views/roles/admin/header.php";
            require_once "views/roles/admin/admin_main.view.php";
            require_once "views/roles/admin/footer.php";
        }        
        
        // Consultar stock
        public function readStock(){
            // Programar
            require_once "views/roles/admin/header.php";            
            require_once "views/modules/5_Inventory/stock_read.view.php";
            require_once "views/roles/admin/footer.php";
        }
       
        // Consultar Historia
        public function readHistory(){
            // Programar
            require_once "views/roles/admin/header.php";            
            require_once "views/modules/5_Inventory/history_read.view.php";
            require_once "views/roles/admin/footer.php";
        }
    }
?>