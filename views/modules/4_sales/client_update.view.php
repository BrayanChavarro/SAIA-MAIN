        <!-- Migas de Pan -->
        <div class="migas row d-flex m-2 align-items-center bg-white border-bottom">
            <div class="col p-0">
                <div aria-label="breadcrumb">
                    <ol class="breadcrumb rounded-0 m-0 p-2 bg-white">
                        <li class="breadcrumb-item"><a href="?c=Dashboard">Inicio</a></li>
                        <li class="breadcrumb-item">Módulo Clientes</li>
                        <li class="breadcrumb-item active" aria-current="page">Actualizar Cliente</li>
                    </ol>
                </div>
            </div>
        </div>

        <!-- Título -->
        <div class="titulo-contenido m-2 row">
            <div class="col p-2 border-bottom d-flex justify-content-center align-items-center">
                <div class="col-6 p-0 d-flex justify-content-start align-items-center">
                    <h5 class="m-0">Actualizar Cliente</h5>
                </div>
                <div class="col-6 d-flex justify-content-end align-items-center p-0">
                    <a href="?c=Sales&a=readClient" class="btn btn-primary">Consultar Clientes</a>
                </div>
            </div>
        </div>

        <!-- Contenido -->
        <div class="contenido row bg-light m-2 p-2">
            <div class="col p-0 bg-light">
                <form id="formRolCreate" name="formRolCreate" class=" form-inline card p-3 bg-info text-white d-lg-flex justify-content-center w-100 border rounded p-2 needs-validation" action="?c=Sales&a=updateClient" method="post" novalidate>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="client_documento">Documento Cliente</label>
                            <input name="documento" id="documento" class="form-control class-documento" title="Ingrese un Documento Válido" value="<?php echo $clients->getDocumento(); ?>" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="client_nombres">Nombres</label>
                            <input name="nombres" type="text" class="form-control" id="nombres" placeholder="Nombres" pattern="[ a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙñÑ]{2,50}" title="Ingrese Nombre(s) Válido(s)" value="<?php echo $clients->getNombresClient(); ?>" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="client_apellidos">Apellidos</label>
                            <input name="apellidos" type="text" class="form-control" id="apellidos" placeholder="Apellidos" pattern="[ a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙñÑ]{2,50}" title="Ingrese Apellidos(s) Válido(s)" value="<?php echo $clients->getApellidosClient(); ?>" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="client_correo">Correo</label>
                            <input name="email" type="email" class="form-control" id="email" placeholder="cliente@correo.com" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,5}" title="Ingrese un correo válido" value="<?php echo $clients->getCorreoClient(); ?>" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="client_direccion">Dirección</label>
                            <input name="direccion" type="text" class="form-control" id="direccion" placeholder="Dirección proveedor" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,5}" title="Ingrese una dirección valida" value="<?php echo $clients->getDireccion(); ?>" required>
                        </div>

                        <div id="phone_group" class="form-group col-md-6">
                            <label for="client_phone">Telefono</label>
                            <input type="text" name="telefono" class="form-control" id="telefono" placeholder="3134564545" title="Ingrese un telefono valido" value="<?php echo $clients->getTelefono(); ?>">
                        </div>
                    </div>
                    <br>
                    <input type="submit" class="btn btn-secondary mb-2" value="Enviar">
                    <button type="button" id="submit-rol-create-cancel" class="btn btn-secondary" data-dismiss="modal" id="cerrar">Cerrar</button>
                </form>
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const form = document.getElementById('formRolCreate');
                        const submitButton = form.querySelector('input[type="submit"]');

                        // Agrega el evento de clic al botón de envío
                        submitButton.addEventListener('click', function(event) {
                            event.preventDefault();

                            // Mostrar la alerta de confirmación de eliminación
                            Swal.fire({
                                title: '¿Estás seguro?',
                                text: 'Esta acción eliminará el cliente. ¿Deseas continuar?',
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Sí, eliminar',
                                cancelButtonText: 'Cancelar'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    // Si el usuario confirma, enviar el formulario
                                    form.submit();
                                }
                            });
                        });
                    });
                </script>
            </div>
        </div>