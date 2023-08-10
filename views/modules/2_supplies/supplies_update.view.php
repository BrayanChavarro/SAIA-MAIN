<!-- Migas de Pan -->
<div class="migas row m-2 d-flex align-items-center bg-white border-bottom">
            <div class="col p-0">
                <div aria-label="breadcrumb">
                    <ol class="breadcrumb rounded-0 m-0 p-2 bg-white">
                        <li class="breadcrumb-item"><a href="?c=Dashboard">Inicio</a></li>
                        <li class="breadcrumb-item">Módulo Insumos de taller</li>
                        <li class="breadcrumb-item active" aria-current="page">Actualizar Insumo</li>
                    </ol>
                </div>
            </div>
        </div>
        
        <!-- Título -->
        <div class="titulo-contenido m-2 row">
            <div class="col p-2 border-bottom d-flex justify-content-center align-items-center">
                <div class="col-5 p-0 d-flex justify-content-start align-items-center">
                    <h5 class="m-0">Actualizar Insumo</h5>
                </div>
                <div class="col-6 d-flex justify-content-end align-items-center p-0">
                    <a href="?c=Supplies&a=readSupplie" class="btn btn-primary">Consultar Insumos</a>
                </div>
            </div>
        </div>

        <!-- Contenido -->
        <div class="contenido row bg-light m-2 p-2">
            <div class="col p-0 bg-light">
                <form id="formRolCreate" name="formRolCreate" class=" form-inline card p-3 bg-info text-white d-lg-flex justify-content-center w-100 border rounded p-2 needs-validation" action="?c=Supplies&a=updateSupplie" method="post" novalidate>
                    <div class="form-row">
                    <div class="form-group col-md-6">
                            <label for="categoria">Categoria</label>
                            <select name="id_categoria" id="id_categoria" class="form-control class-perfil" title="" required>                                
                               <?php
                               
                            //    Conexión a BD
                               $usuario = 'root';
                               $password = '';
                               $db = new PDO('mysql:host=localhost;dbname=saia', $usuario, $password);

                            //    Consulta
                                $query = $db->prepare("SELECT * FROM categorias");
                                $query->execute();
                                $data = $query->fetchAll();
                            
                            // Foreach con select

                            foreach ($data as $valores):
                                echo '<option value="'.$valores["id"].'">'.$valores["Nombre"].'</option>';
                            endforeach;
                               ?>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Codigo</label>
                            <input name="codigo" id="codigo" type="text" class="form-control" placeholder="Código Insumo" minlength="5" maxlength="15" title="Ingrese un código válido" value="<?php echo $supplies->getCodigo(); ?>" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="insumos_nombres">Nombre</label>
                            <input name="nombre" type="text" class="form-control" id="nombre" placeholder="Nombre insumo" pattern="[ a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙñÑ]{2,50}"
							title="Ingrese Nombre(s) Válido(s)" value="<?php echo $supplies->getNombre(); ?>" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="insumos_Marca">Marca</label>
                            <input name="marca" type="text" class="form-control" id="marca" placeholder="Marca insumo" pattern="[ a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙñÑ]{2,50}"
							title="Ingrese una marca valida" value="<?php echo $supplies->getMarca(); ?>" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="insumo_referencia">Referencia</label>
                            <input name="referencia" type="text" class="form-control" id="referencia" placeholder="Referencia insumo" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,5}"
							title="Ingrese una referencia valida" value="<?php echo $supplies->getReferencia(); ?>" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="insumo_tipo">Tipo</label>
                            <input name="tipo" type="text" class="form-control" id="tipo" placeholder="Tipo insumo" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,5}"
							title="Ingrese un tipo valido" value="<?php echo $supplies->getTipo(); ?>" required>
                        </div>
                        <div id="factura-group" class="form-group col-md-6">
                            <label for="factura-compra">Numero factura</label>
                            <select name="factura_compra" id="factura_compra" class="form-control class-perfil" title="" value="<?php echo $supplies->getFacturaCompra(); ?>" required>                                
                               <?php
                               
                            //    Conexión a BD
                               $usuario = 'root';
                               $password = '';
                               $db = new PDO('mysql:host=localhost;dbname=saia', $usuario, $password);

                            //    Consulta
                                $query = $db->prepare("SELECT * FROM facturas_de_compra");
                                $query->execute();
                                $data = $query->fetchAll();
                            
                            // Foreach con select

                            foreach ($data as $valores):
                                echo '<option value="'.$valores["codigo_factura"].'">'.$valores["codigo_factura"].'</option>';
                            endforeach;
                               ?>
                            </select>
                        </div>
                        <div id="estado_group" class="form-group col-md-6">
                            <label for="estado_insumo">Estado</label>
                            <select name="estado_producto" id="estado_producto" class="form-control class-perfil" title="Ingrese Un Perfil Válido" value="<?php echo $supplies->getEstadoProducto(); ?>" required>                                
                               <?php
                               
                            //    Conexión a BD
                               $usuario = 'root';
                               $password = '';
                               $db = new PDO('mysql:host=localhost;dbname=saia', $usuario, $password);

                            //    Consulta
                                $query = $db->prepare("SELECT * FROM estados_del_producto");
                                $query->execute();
                                $data = $query->fetchAll();
                            
                            // Foreach con select

                            foreach ($data as $valores):
                                echo '<option value="'.$valores["id"].'">'.$valores["Nombre"].'</option>';
                            endforeach;
                               ?>
                            </select>
                        </div>
                        <div id="foto_group" class="form-group col-md-6">
                            <label for="documento_usuario">Quien registra</label>
                            <select name="quien_registra" id="quien_registra" class="form-control class-perfil" title="Ingrese Un Perfil Válido" value="<?php echo $supplies->getQuienRegistra(); ?>" required>                                
                               <?php
                               
                            //    Conexión a BD
                               $usuario = 'root';
                               $password = '';
                               $db = new PDO('mysql:host=localhost;dbname=saia', $usuario, $password);

                            //    Consulta
                                $query = $db->prepare("SELECT * FROM usuarios");
                                $query->execute();
                                $data = $query->fetchAll();
                            
                            // Foreach con select

                            foreach ($data as $valores):
                                echo '<option value="'.$valores["documento"].'">'.$valores["nombres"]." ".$valores["apellidos"].'</option>';
                            endforeach;
                               ?>
                            </select>
                        </div>
                    </div>                    
                    <br>
                        <input type="submit" class="btn btn-secondary mb-2" value="Enviar">
                        <button type="button" id="submit-rol-create-cancel" class="btn btn-secondary" data-dismiss="modal" id="cerrar">Cerrar</button>
                </form>
            </div>
        </div>