<?php

require_once "models/model_dto/clientDto.php";
require_once "models/model_dao/clientDao.php";

class Sales
{
    private $clientDao;

    public function __construct()
    {
        $this->clientDao = new ClientDao();
        /* $this->saleDao = new SaleDao(); */
        // Se recomienda también crear una instancia para $this->saleDao si se va a utilizar en el futuro.
    }

    public function index()
    {
        header("Location: ?c=Dashboard");
    }

    // Crear Cliente
    public function createClient(){
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        require_once "views/roles/admin/header.php";
        require_once "views/modules/4_sales/client_create.view.php";
        require_once "views/roles/admin/footer.php";
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){

        $clientDto = new ClientDto(
            $_POST['documento'], 
            $_POST['nombres'],
            $_POST['apellidos'],
            $_POST['email'],
            $_POST['direccion'],
            $_POST['telefono']
        );    

        // print_r ($clientDto);
                $this->clientDao->createClientDao($clientDto);
                header("Location: ?c=Sales&a=readClient");
        }
    }
        
    // Consultar Clientes
    public function readClient(){
        $clients = $this->clientDao->readClientDao();
        require_once "views/roles/admin/header.php";
        require_once "views/modules/4_sales/client_read.view.php";
        require_once "views/roles/admin/footer.php";
    }

    // Actualizar Clientes
    public function updateClient()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $clients = $this->clientDao->getById($_GET['documento']);
            require_once "views/roles/admin/header.php";
            require_once "views/modules/4_sales/client_update.view.php";
            require_once "views/roles/admin/footer.php";
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $clientDto = new ClientDto(
                $_POST['documento'], 
                $_POST['apellidos'],
                $_POST['nombres'],
                $_POST['email'],
                $_POST['direccion'],
                $_POST['telefono']
            );
            $this->clientDao->updateclientDao($clientDto);
            header("Location: ?c=Sales&a=readClient");
        }
    }

    // Eliminar Cliente
    public function deleteClient()
    {
        $this->clientDao->deleteClientDao($_GET['documento']);
        header('Location: ?c=Sales&a=readClient');
    }
}
