<?php
    class Dashboard{
        public function __construct(){}
        public function index(){
            require_once "views/roles/admin/header.php";
            require_once "views/roles/admin/admin_main.view.php";
            // require_once "views/roles/admin/footer.php";
        }
    }
?>