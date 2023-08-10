<?php 
	class ClientDao{
		
		protected $pdo;
		public function __construct(){
			try {
				$this->pdo = DataBase::connection();				
			} catch (Exception $e) {
				die($e->getMessage());
			}
		}		

		# Registrar o Crear client
		public function createClientDao($clientDto){
			try {
                // Crear la Consulta
				$sql = 'CALL pa_registrar_clientes (
                    :documento,
                    :nombres,
                    :apellidos,
                    :email,
                    :direccion,
                    :telefono
                )';
				// Preparar la BBDD para la consulta
				$dbh = $this->pdo->prepare($sql);
				// Vincular los datos del objeto a la consulta de Inserción			
				$dbh->bindValue('documento',$clientDto->getDocumento());
                $dbh->bindValue('nombres', $clientDto->getNombresClient());
                $dbh->bindValue('apellidos', $clientDto->getApellidosClient());
                $dbh->bindValue('email', $clientDto->getCorreoClient());
                $dbh->bindValue('direccion', $clientDto->getDireccion());
                $dbh->bindValue('telefono', $clientDto->getTelefono());
			
	            // Ejecutar la consulta
				$dbh->execute();

			} catch (Exception $e) {
				die($e->getMessage());	
			}
		}
		# Consultar clientes
		public function readClientDao(){
			try {
				// Crear un Array para almacenar los clientes
				$clientList = [];
		
				// Asignar una consulta al atributo $sql
				$sql = 'SELECT * FROM vw_clientes;';
		
				// Creamos las variable $dbh y le asignamos la conexión y la consulta $sql
				$dbh = $this->pdo->query($sql);
				foreach ($dbh->fetchAll() as $client) {
					// Depuración: Imprimir los datos de la fila
					/* print_r($client);
				 */
					// Crear un nuevo objeto ClientDto para cada registro y agregarlo al array $clientList
					$clientList[] = new ClientDto(
						$client['documento'],
						$client['apellidos'],
						$client['nombres'],
						$client['email'],
						$client['direccion'],
						$client['telefono']
					);
					
				}
				return $clientList;
			} catch (Exception $e) {
				die($e->getMessage());
			}
		}

		
		# Obtener Documento
		public function getById($documento){
			try {
				# Consulta
				$sql = "SELECT * FROM clientes WHERE documento=:documento";
				# Preparar la BBDD
				$dbh = $this->pdo->prepare($sql);
				# Vincular los datossS
				$dbh->bindValue('documento', $documento);
				# Ejecutar la consulta
				$dbh->execute();
				# Crear un objeto del registro la BBDD
				$clientDb = $dbh->fetch();
				# Crear el objeto del modelo
				$client = new clientDto(
					$clientDb['documento'],
					$clientDb['apellidos'],
					$clientDb['nombres'],
					$clientDb['email'],
					$clientDb['direccion'],
					$clientDb['telefono'],				
				);
				return $client;
			} catch (Exception $e) {
				die($e->getMessage());
			}
		}


		# Actualizar un client
        public function updateClientDao($clientDto){
            try {
				// Crear la Consulta
				$sql = 'UPDATE clientes SET
                documento = :documento,
                apellidos = :apellidos,
                nombres = :nombres,
                email = :email,
                direccion = :direccion,
                telefono = :telefono

                WHERE documento = :documento';

				// Preparar la BBDD para la consulta
				$dbh = $this->pdo->prepare($sql);

				// Vincular los datos del objeto a la consulta de Inserción
				$dbh->bindValue('documento', $clientDto->getDocumento());			
				$dbh->bindValue('apellidos', $clientDto->getApellidosClient());
				$dbh->bindValue('nombres', $clientDto->getNombresClient());			
				$dbh->bindValue('email', $clientDto->getCorreoClient());
				$dbh->bindValue('direccion', $clientDto->getDireccion());			
				$dbh->bindValue('telefono', $clientDto->getTelefono());
				// Ejecutar la consulta
				$dbh->execute();
                
			} catch (Exception $e) {
				die($e->getMessage());	
			}
        }

		# Eliminar un client
		public function deleteClientDao($documento){
			try {
				$sql = 'DELETE FROM clientes WHERE documento = :documento';
				$dbh = $this->pdo->prepare($sql);
				$dbh->bindValue('documento', $documento);
				$dbh->execute();
			} catch (Exception $e) {
				die($e->getMessage());
			}
		}
	}
?>