        <!-- Migas de Pan -->
        <div class="migas row d-flex align-items-center m-2 bg-white border-bottom">
            <div class="col p-0">
                <div aria-label="breadcrumb">
                    <ol class="breadcrumb rounded-0 m-0 p-2 bg-white">
                        <li class="breadcrumb-item"><a href="?c=Dashboard">Inicio</a></li>
                        <li class="breadcrumb-item">Módulo Usuarios</li>
                        <li class="breadcrumb-item active" aria-current="page">Crear Rol</li>
                    </ol>
                </div>
            </div>
        </div>
        
        <!-- Título -->
        <div class="titulo-contenido row m-2">
            <div class="col p-2 border-bottom d-flex justify-content-center align-items-center">
                <div class="col-5 p-0 d-flex justify-content-start align-items-center">
                    <h5 class="m-0">Crear Rol</h5>
                </div>
                <div class="col-6 d-flex justify-content-end align-items-center p-0">
                    <a href="?c=Users&a=readRol" class="btn btn-primary">Consultar Roles</a>
                </div>
            </div>
        </div>

        <!-- Contenido -->
        <div class="contenido row bg-light m-2 p-2">
            <div class="col p-0 bg-light">
                <form id="formRolCreate" name="formRolCreate" class="card p-3 bg-info text-white d-lg-flex justify-content-center w-100 border rounded p-2 needs-validation" action="?c=Users&a=createRol" method="post" novalidate>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="rol_codigo">Código Rol</label>
                            <input type="text" class="form-control" name="rol_codigo" id="rol_codigo" placeholder="Código" pattern="[ a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙñÑ]{2,50}"
							title="Ingrese Nombre(s) Válido(s)" required>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="rol_nombre">Nombre Rol</label>
                            <input type="text" class="form-control" name="rol_nombre" id="rol_nombre" placeholder="Nombre" pattern="[ a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙñÑ]{2,50}"
							title="Ingrese Nombre(s) Válido(s)" required>
                        </div>
                        <br>
                    </div>                    
                        <input type="submit" class="btn btn-secondary mb-2" value="Enviar">
                        <button type="button" id="submit-rol-create-cancel" class="btn btn-secondary" data-dismiss="modal" id="cerrar">Cerrar</button>
                </form>
            </div>
        </div>