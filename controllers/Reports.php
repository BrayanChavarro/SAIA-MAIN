<?php
    class Reports{
        public function __construct(){}
        public function index(){
            require_once "views/roles/admin/header.php";
            require_once "views/roles/admin/admin_main.view.php";
            require_once "views/roles/admin/footer.php";
        }        
        
        // Consultar stock
        public function reportGraphics(){
            // Programar
            require_once "views/roles/admin/header.php";            
            require_once "views/modules/6_reports/report_graph.view.php";
            // require_once "views/roles/admin/footer.php";
        }
       
        // Consultar Historia
        public function reportPrinted(){
            // Programar
            require_once "views/roles/admin/header.php";            
            require_once "views/modules/6_reports/report_print.view.php";
            require_once "views/roles/admin/footer.php";
        }
    }
?>