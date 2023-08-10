<!-- Migas de Pan -->
<div class="migas row m-2 d-flex align-items-center bg-white border-bottom">
            <div class="col p-0">
                <div aria-label="breadcrumb">
                    <ol class="breadcrumb rounded-0 m-0 p-2 bg-white">
                        <li class="breadcrumb-item"><a href="?c=Dashboard">Inicio</a></li>
                        <li class="breadcrumb-item">Módulo Compras</li>
                        <li class="breadcrumb-item active" aria-current="page">Ingresar Compra</li>
                    </ol>
                </div>
            </div>
        </div>
        
        <!-- Título -->
        <div class="titulo-contenido m-2 row">
            <div class="col p-2 border-bottom d-flex justify-content-center align-items-center">
                <div class="col-5 p-0 d-flex justify-content-start align-items-center">
                    <h5 class="m-0">Ingresar Compra</h5>
                </div>
                <div class="col-6 d-flex justify-content-end align-items-center p-0">
                    <a href="?c=Purchases&a=readBuy" class="btn btn-primary">Consultar Compras</a>
                </div>
            </div>
        </div>

        <!-- Contenido -->
        <div class="contenido row bg-light m-2 p-2">
            <div class="col p-0 bg-light">
                <form id="formRolCreate" name="formRolCreate" class=" form-inline card p-3 bg-info text-white d-lg-flex justify-content-center w-100 border rounded p-2 needs-validation" action="?c=Users&a=createUser" method="post" novalidate>
                    <div class="form-row">
                    <div class="form-group col-md-6">
                            <label for="user_perfil">Proveedor</label>
                            <select name="nit_proveedor" id="nit_proveedor" class="form-control class-proveedor" title="Ingrese Un Proveedor Válido" required>                                
                               <?php
                               
                            //    Conexión a BD
                               $usuario = 'root';
                               $password = '';
                               $db = new PDO('mysql:host=localhost;dbname=saia', $usuario, $password);

                            //    Consulta
                                $query = $db->prepare("SELECT * FROM proveedores");
                                $query->execute();
                                $data = $query->fetchAll();
                            
                            // Foreach con select

                            foreach ($data as $valores):
                                echo '<option value="'.$valores["nit"].'">'.$valores["Nombre"].'</option>';
                            endforeach;
                               ?>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Codigo</label>
                            <input name="codigo" id="codigo" type="text" class="form-control" placeholder="Código Factura" minlength="5" maxlength="15" title="Ingrese un código válido" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="fecha_factura">Fecha</label>
                            <input name="fecha" type="date" class="form-control" id="fecha" placeholder="Fecha registro factura" pattern="[ a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙñÑ]{2,50}"
							title="Ingrese una fecha valida" required>
                        </div>
                        <div id="factura_group" class="form-group col-md-6">
                            <label for="factura">Factura</label>
                            <input type="file" name="foto" class="form-control p-1" id="foto" title="suba la factura">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="valor_factura">Valor</label>
                            <input name="valor" type="number" class="form-control" id="valor" placeholder="Valor Factura" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,5}"
							title="Ingrese un valor valido" required>
                    </div>
                    </div>                    
                    <br>
                        <input type="submit" class="btn btn-secondary mb-2" value="Enviar">
                        <button type="button" id="submit-rol-create-cancel" class="btn btn-secondary" data-dismiss="modal" id="cerrar">Cerrar</button>
                </form>
            </div>
        </div>