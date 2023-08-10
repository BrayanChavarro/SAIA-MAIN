<?php    

    require_once "models/model_dto/RolDto.php";    
    require_once "models/model_dao/RolDao.php";
    require_once "models/model_dto/UserDto.php";
    require_once "models/model_dao/UserDao.php";
    

    class Users{
        
        private $rolDao;
        private $userDao;

        public function __construct(){
            $this->rolDao = new RolDao;
            $this->userDao = new UserDao;
        }
        // Cargar página inicial (puede ser el módulo)
        public function index(){
            header("Location: ?c=Dashboard");
        }
        // Crear Rol
        public function createRol(){                        
            // Muestra el Formulario
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                require_once "views/roles/admin/header.php";
                require_once "views/modules/1_users/rol_create.view.php";            
                require_once "views/roles/admin/footer.php";
            }
            // Captura los Datos
            if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                $rolDto = new RolDto(
                    $_POST['rol_codigo'], 
                    $_POST['rol_nombre']
                );
                $this->rolDao->createRol($rolDto);
                header("Location: ?c=Users&a=readRol");
            }
        }        
        // Consultar Roles
        public function readRol(){
            $roles = $this->rolDao->readRolDao();
            require_once "views/roles/admin/header.php";            
            require_once "views/modules/1_users/rol_read.view.php";            
            require_once "views/roles/admin/footer.php";
        }
        // Actualizar Rol
        public function updateRol(){
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                $rol = $this->rolDao->getById($_GET['idRol']);
                require_once "views/roles/admin/header.php";                
                require_once "views/modules/1_users/rol_update.view.php";
                require_once "views/roles/admin/footer.php";
            }
            // Método Post
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $rolDto = new RolDto(
                    $_POST['rol_codigo'],
                    $_POST['rol_nombre']
                );
                $this->rolDao->updateRolDao($rolDto);
                header("Location: ?c=Users&a=readRol");
            }
        }
        // Eliminar Rol
        public function deleteRol(){
			$this->rolDao->deleteRolDao($_GET['idRol']);
			header('Location: ?c=Users&a=readRol');			
		}
        
        // Crear Usuario
        public function createUser(){
            // Muestra el Formulario
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                require_once "views/roles/admin/header.php";
                require_once "views/modules/1_users/user_create.view.php";            
                require_once "views/roles/admin/footer.php";
            }
            // Captura los Datos
            if ($_SERVER['REQUEST_METHOD'] == 'POST'){

                $userDto = new UserDto(
                    $_POST['documento'], 
                    $_POST['apellidos'],
                    $_POST['nombres'],
                    $_POST['email'],
                    $_POST['pass'],
                    $_POST['telefono'],
                    $_POST['foto'],
                    $_POST['id_rol']
                );                

                // print_r ($userDto);
                        $this->userDao->createUserDao($userDto);
                        header("Location: ?c=Users&a=readUser");
                    }
                }

        // Consultar Usuarios
        public function readUser(){
            $users = $this->userDao->readUserDao();            
            require_once "views/roles/admin/header.php";            
            require_once "views/modules/1_users/user_read.view.php";            
            require_once "views/roles/admin/footer.php";
        }
        
        // Actualizar Usuario
        public function updateUser(){
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                $users = $this->userDao->getById($_GET['documento']);
                require_once "views/roles/admin/header.php";                
                require_once "views/modules/1_users/user_update.view.php";
                require_once "views/roles/admin/footer.php";
            }
            // Método Post
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $userDto = new UserDto(
                    $_POST['documento'], 
                    $_POST['apellidos'],
                    $_POST['nombres'],
                    $_POST['email'],
                    $_POST['pass'],
                    $_POST['telefono'],
                    $_POST['foto'],
                    $_POST['id_rol']
                );
                $this->userDao->updateUserDao($userDto);
                header("Location: ?c=Users&a=readUser");
            }
        }
        // Eliminar Usuario
        public function deleteUser(){
			$this->userDao->deleteUserDao($_GET['documento']);
			header('Location: ?c=Users&a=readUser');			
		}
    
        
    }
?>