<!-- Migas de Pan -->
<div class="migas row m-2 d-flex align-items-center bg-white border-bottom">
            <div class="col p-0">
                <div aria-label="breadcrumb">
                    <ol class="breadcrumb rounded-0 m-0 p-2 bg-white">
                        <li class="breadcrumb-item"><a href="?c=Dashboard">Inicio</a></li>
                        <li class="breadcrumb-item">Módulo Ventas</li>
                        <li class="breadcrumb-item active" aria-current="page">Crear Cliente</li>
                    </ol>
                </div>
            </div>
        </div>
        
        <!-- Título -->
        <div class="titulo-contenido m-2 row">
            <div class="col p-2 border-bottom d-flex justify-content-center align-items-center">
                <div class="col-5 p-0 d-flex justify-content-start align-items-center">
                    <h5 class="m-0">Crear cliente</h5>
                </div>
                <div class="col-6 d-flex justify-content-end align-items-center p-0">
                    <a href="?c=Sales&a=readClient" class="btn btn-primary">Consultar Clientes</a>
                </div>
            </div>
        </div>

        <!-- Contenido -->
        <div class="contenido row bg-light m-2 p-2">
            <div class="col p-0 bg-light">
                <form id="formRolCreate" name="formRolCreate" class=" form-inline card p-3 bg-info text-white d-lg-flex justify-content-center w-100 border rounded p-2 needs-validation" action="?c=Sales&a=createClient" method="post" novalidate>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="">Documento</label>
                            <input name="documento" id="documento" type="text" class="form-control" placeholder="Documento nuevo cliente" minlength="5" maxlength="15" title="Ingrese un documento" require>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="client_nombres">Nombres</label>
                            <input name="nombres" type="text" class="form-control" id="nombres" placeholder="Nombres" pattern="[ a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙñÑ]{2,50}"
							title="Ingrese Nombre(s) Válido(s)" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="client_apellidos">Apellidos</label>
                            <input name="apellidos" type="text" class="form-control" id="apellidos" placeholder="Apellidos" pattern="[ a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙñÑ]{2,50}"
							title="Ingrese Apellidos(s) Válido(s)" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="client_correo">Correo</label>
                            <input name="email" type="email" class="form-control" id="email" placeholder="usuario@correo.com" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,5}"
							title="Ingrese un correo válido" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="client_direccion">Dirección</label>
                            <input name="direccion" type="text" class="form-control" id="direccion" placeholder="Dirección proveedor" pattern="[ a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙñÑ]{2,50}"
							title="Ingrese una dirección valida" required>
                        </div>
                        <div id="phone_group" class="form-group col-md-6">
                            <label for="client_phone">Telefono</label>
                            <input type="text" name="telefono" class="form-control" id="telefono" placeholder="3134564545" title="Ingrese un telefono valido">
                        </div>
                    </div>                    
                    <br>
                        <input type="submit" class="btn btn-secondary mb-2" value="Enviar">
                        <button type="button" id="submit-rol-create-cancel" class="btn btn-secondary" data-dismiss="modal" id="cerrar">Cerrar</button>
                </form>
            </div>
        </div>