<?php 
	class CategoryDao{
		private $pdo;
		public function __construct(){
			try {
				$this->pdo = DataBase::connection();				
			} catch (Exception $e) {
				die($e->getMessage());
			}
		}		

		# Registrar o Crear Categoria.
		public function createCategory($categoryDto){
			try {
				// Crear la Consulta
				$sql = 'INSERT INTO categorias VALUES (
							:idCategoria,
							:nombreCategoria
						)';
				// Preparar la BBDD para la consulta
				$dbh = $this->pdo->prepare($sql);
				// Vincular los datos del objeto a la consulta de Inserción
				$dbh->bindValue('idCategoria',$categoryDto->getCodigoCategoria());			
				$dbh->bindValue('nombreCategoria',$categoryDto->getNombreCategoria());
				// Ejecutar la consulta
				$dbh->execute();
			} catch (Exception $e) {
				die($e->getMessage());	
			}
		}

		# Consultar Categorias
		public function readCategoryDao(){
			try {
				// Crear un Arreglo Vacío
				$categoryList = [];
				// Asignar una consulta al atributo $sql
				$sql = 'SELECT * FROM categorias';
				// Creamos las variable $dbh y le asignamos la conexión y la consulta $sql
				$dbh = $this->pdo->query($sql);
				foreach ($dbh->fetchAll() as $category) {
					$categoryList[] = new CategoryDto(
						$category['id'],
						$category['Nombre']						
					);
				}
				return $categoryList; 
			} catch (Exception $e) {
				die($e->getMessage());
			}
		}

		# Obtener IdCategoria
		public function getById($idCategoria){
			try {
				# Consulta
				$sql = "SELECT * FROM categorias WHERE id=:idCategoria";
				# Preparar la BBDD
				$dbh = $this->pdo->prepare($sql);
				# Vincular los datos
				$dbh->bindValue('idCategoria', $idCategoria);
				# Ejecutar la consulta
				$dbh->execute();
				# Crear un objeto del registro la BBDD
				$CategoriaDb = $dbh->fetch();
				# Crear el objeto del modelo
				$categoria = new CategoryDto(
					$CategoriaDb['id'],
					$CategoriaDb['Nombre'],					
				);
				return $categoria;
			} catch (Exception $e) {
				die($e->getMessage());
			}
		}

		# Actualizar una categoria
        public function updateCategoryDao($CategoryDto){
            try {
				// Crear la Consulta
				$sql = 'UPDATE categorias SET
							id = :idCategoria,
							Nombre = :nombreCategoria
						WHERE id = :idCategoria';

				// Preparar la BBDD para la consulta
				$dbh = $this->pdo->prepare($sql);

				// Vincular los datos del objeto a la consulta de Inserción
				$dbh->bindValue('idCategoria', $CategoryDto->getCodigoCategoria());			
				$dbh->bindValue('nombreCategoria', $CategoryDto->getNombreCategoria());

				// Ejecutar la consulta
				$dbh->execute();
                
			} catch (Exception $e) {
				die($e->getMessage());	
			}
        }

		# Eliminar una categoria
		public function deleteCategoryDao($idCategoria){
			try {
				$sql = 'DELETE FROM categorias WHERE id = :idCategoria';
				$dbh = $this->pdo->prepare($sql);
				$dbh->bindValue('idCategoria', $idCategoria);
				$dbh->execute();
			} catch (Exception $e) {
				die($e->getMessage());
			}
		}
		
	}
?>