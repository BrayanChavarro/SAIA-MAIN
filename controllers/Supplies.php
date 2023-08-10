<?php

    require_once "models/model_dto/CategoryDto.php";    
    require_once "models/model_dao/CategoryDao.php";
    require_once "models/model_dto/SupplieDto.php";    
    require_once "models/model_dao/SupplieDao.php";


    class Supplies{

        Private $categoryDao;
        Private $supplieDao;

        public function __construct(){
            $this->categoryDao = new categoryDao;
            $this->supplieDao = new SupplieDao;
            // $this->suppliesDao = new SuppliesDao;
        }
        // Cargar pagina inicial
        public function index(){
            header("Location: ?c=Dashboard");
        }        
        // Crear Categoría
        public function createCategory(){
           // Muestra el Formulario
           if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            require_once "views/roles/admin/header.php";
            require_once "views/modules/2_supplies/category_create.view.php";            
            require_once "views/roles/admin/footer.php";
        }
        // Captura los Datos
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $CategoryDto = new CategoryDto(
                $_POST['categoria_codigo'], 
                $_POST['categoria_nombre']
            );
            $this->categoryDao->createCategory($CategoryDto);
            header("Location: ?c=Supplies&a=readCategory");
        }
    }   
        // Consultar Categorías
        public function readCategory(){
            $categorias = $this->categoryDao->readCategoryDao();
            require_once "views/roles/admin/header.php";            
            require_once "views/modules/2_supplies/category_read.view.php";
            require_once "views/roles/admin/footer.php";
        }
        // Actualizar Categoría
        public function updateCategory(){
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $categorias = $this->categoryDao->getById($_GET['idCategoria']);
            require_once "views/roles/admin/header.php";            
            require_once "views/modules/2_supplies/category_update.view.php";
            require_once "views/roles/admin/footer.php";
        }

        // Método Post
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $categoryDto = new CategoryDto(
                $_POST['categoria_codigo'],
                $_POST['categoria_nombre']
            );
            $this->categoryDao->updateCategoryDao($categoryDto);
            header("Location: ?c=Supplies&a=readCategory");
        }

    }

         // Eliminar Categoria
         public function deleteCategory(){
			$this->categoryDao->deleteCategoryDao($_GET['idCategoria']);
			header('Location: ?c=Supplies&a=readCategory');			
		}
        // Crear Producto
        public function createSupplie(){
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            require_once "views/roles/admin/header.php";
            require_once "views/modules/2_supplies/supplies_create.view.php";
            require_once "views/roles/admin/footer.php";

            }

            // Captura los Datos
            if ($_SERVER['REQUEST_METHOD'] == 'POST'){

                $supplieDto = new SupplieDto(
                    $_POST['codigo'], 
                    $_POST['nombre'],
                    $_POST['marca'],
                    $_POST['referencia'],
                    $_POST['tipo'],
                    $_POST['factura_compra'],
                    $_POST['estado_producto'],
                    $_POST['id_categoria'],
                    $_POST['quien_registra']
                );                
                        $this->supplieDao->createSupplieDao($supplieDto);
                        header("Location: ?c=Supplies&a=readSupplie");
                    }
        }
        // Consultar Productos
        public function readSupplie(){
            $supplies = $this->supplieDao->readSupplieDao();
            require_once "views/roles/admin/header.php";
            require_once "views/modules/2_supplies/supplies_read.view.php";
            require_once "views/roles/admin/footer.php";
        }
        // Actualizar Producto
        public function updateSupplie(){
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $supplies = $this->supplieDao->getById($_GET['codigo']);            
            require_once "views/roles/admin/header.php";
            require_once "views/modules/2_supplies/supplies_update.view.php";
            require_once "views/roles/admin/footer.php";
        }
            // Método Post
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $supplieDto = new SupplieDto(
					$_POST['codigo'],
					$_POST['nombre'],
					$_POST['marca'],
					$_POST['referencia'],
					$_POST['tipo'],
					$_POST['factura_compra'],
					$_POST['estado_producto'],
					$_POST['id_categoria'],
					$_POST['quien_registra']
                );
                $this->supplieDao->updateSupplieDao($supplieDto);
                header("Location: ?c=Supplies&a=readSupplie");
        }
    }        
        // Eliminar Producto
        public function deleteSupplie(){
			$this->supplieDao->deleteSupplieDao($_GET['codigo']);
			header('Location: ?c=Supplies&a=readSupplie');          
        }
    }
?>