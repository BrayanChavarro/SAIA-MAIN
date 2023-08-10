<?php 
	class SupplieDao{
		
		protected $pdo;
		public function __construct(){
			try {
				$this->pdo = DataBase::connection();				
			} catch (Exception $e) {
				die($e->getMessage());
			}
		}		

		# Registrar o Crear Insumo
		public function createSupplieDao($supplieDto){
			try {
				// Crear la Consulta
				$sql = 'CALL pa_registrar_insumo (
							:codigo,
							:nombre,
							:marca,							
							:referencia,
							:tipo,
							:numero_factura,
							:id_estado_producto,
							:id_categoria,
                            :documento_usuario
						)';
				// Preparar la BBDD para la consulta
				$dbh = $this->pdo->prepare($sql);
				// Vincular los datos del objeto a la consulta de Inserción			
				$dbh->bindValue('codigo',$supplieDto->getCodigo());
				$dbh->bindValue('nombre',$supplieDto->getNombre());
				$dbh->bindValue('marca',$supplieDto->getMarca());
				$dbh->bindValue('referencia',$supplieDto->getReferencia());
				$dbh->bindValue('tipo',$supplieDto->getTipo());
				$dbh->bindValue('numero_factura',$supplieDto->getFacturaCompra());
				$dbh->bindValue('id_estado_producto',$supplieDto->getEstadoProducto());
				$dbh->bindValue('id_categoria',$supplieDto->getIdCategoria());
				$dbh->bindValue('documento_usuario',$supplieDto->getQuienRegistra());
				// Ejecutar la consulta
				$dbh->execute();
			} catch (Exception $e) {
				die($e->getMessage());	
			}
		}
		
		# Consultar Usuarios
		public function readSupplieDao(){
			try {
				// Crear un Arreglo Vacío
				$supplieList = [];
				// Asignar una consulta al atributo $sql
				$sql = 'SELECT * FROM VW_PRODUCTOS;';
				// Creamos las variable $dbh y le asignamos la conexión y la consulta $sql
				$dbh = $this->pdo->query($sql);
				foreach ($dbh->fetchAll() as $supplie) {
					$supplieList[] = new SupplieDto(
						$supplie['codigo'],
						$supplie['nombre'],
						$supplie['marca'],
						$supplie['referencia'],
						$supplie['tipo'],
						$supplie['numero_factura'],
						$supplie['id_estado_producto'],
						$supplie['id_categoria'],
						$supplie['documento_usuario']
						
					);
				}
				return $supplieList;
			} catch (Exception $e) {
				die($e->getMessage());
			}
		}

		
		# Obtener Codigo de producto
		public function getById($codigo){
			try {
				# Consulta
				$sql = "SELECT * FROM productos WHERE codigo=:codigo";
				# Preparar la BBDD
				$dbh = $this->pdo->prepare($sql);
				# Vincular los datos
				$dbh->bindValue('codigo', $codigo);
				# Ejecutar la consulta
				$dbh->execute();
				# Crear un objeto del registro la BBDD
				$SupplieDb = $dbh->fetch();
				# Crear el objeto del modelo
				$Supplie = new SupplieDto(
					$SupplieDb['codigo'],
					$SupplieDb['nombre'],
					$SupplieDb['marca'],
					$SupplieDb['referencia'],
					$SupplieDb['tipo'],
					$SupplieDb['numero_factura'],
					$SupplieDb['id_estado_producto'],
					$SupplieDb['id_categoria'],
					$SupplieDb['documento_usuario'],					
				);
				return $Supplie;
			} catch (Exception $e) {
				die($e->getMessage());
			}
		}


		# Actualizar un Producto
        public function updateSupplieDao($supplieDto){
            try {
				// Crear la Consulta
				$sql = 'UPDATE productos SET
							codigo = :codigo,
							nombre = :nombre,
							marca = :marca,
							referencia = :referencia,
							tipo = :tipo,
							numero_factura = :numero_factura,
							id_estado_producto = :id_estado_producto,
							id_categoria = :id_categoria,
							documento_usuario = :documento_usuario

						WHERE codigo = :codigo';

				// Preparar la BBDD para la consulta
				$dbh = $this->pdo->prepare($sql);

				// Vincular los datos del objeto a la consulta de Inserción
				$dbh->bindValue('codigo',$supplieDto->getCodigo());
				$dbh->bindValue('nombre',$supplieDto->getNombre());
				$dbh->bindValue('marca',$supplieDto->getMarca());
				$dbh->bindValue('referencia',$supplieDto->getReferencia());
				$dbh->bindValue('tipo',$supplieDto->getTipo());
				$dbh->bindValue('numero_factura',$supplieDto->getFacturaCompra());
				$dbh->bindValue('id_estado_producto',$supplieDto->getEstadoProducto());
				$dbh->bindValue('id_categoria',$supplieDto->getIdCategoria());
				$dbh->bindValue('documento_usuario',$supplieDto->getQuienRegistra());
				// Ejecutar la consulta
				$dbh->execute();
                
			} catch (Exception $e) {
				die($e->getMessage());	
			}
        }

		# Eliminar un Producto
		public function deleteSupplieDao($codigo){
			try {
				$sql = 'DELETE FROM productos WHERE codigo = :codigo';
				$dbh = $this->pdo->prepare($sql);
				$dbh->bindValue('codigo', $codigo);
				$dbh->execute();
			} catch (Exception $e) {
				die($e->getMessage());
			}
		}
	}
?>