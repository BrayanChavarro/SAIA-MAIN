        <!-- Migas de Pan -->
        <div class="migas row d-flex m-2 align-items-center bg-white border-bottom">
            <div class="col p-0">
                <div aria-label="breadcrumb">
                    <ol class="breadcrumb rounded-0 m-0 p-2 bg-white">
                        <li class="breadcrumb-item"><a href="?c=Dashboard">Inicio</a></li>
                        <li class="breadcrumb-item">Módulo Usuarios</li>
                        <li class="breadcrumb-item active" aria-current="page">Actualizar Usuario</li>
                    </ol>
                </div>
            </div>
        </div>
        
        <!-- Título -->
        <div class="titulo-contenido m-2 row">
            <div class="col p-2 border-bottom d-flex justify-content-center align-items-center">
                <div class="col-6 p-0 d-flex justify-content-start align-items-center">
                    <h5 class="m-0">Actualizar Usuario</h5>
                </div>
                <div class="col-6 d-flex justify-content-end align-items-center p-0">
                    <a href="?c=Users&a=readUser" class="btn btn-primary">Consultar Usuarios</a>
                </div>
            </div>
        </div>

        <!-- Contenido -->
        <div class="contenido row bg-light m-2 p-2">
            <div class="col p-0 bg-light">
                <form id="formRolCreate" name="formRolCreate" class=" form-inline card p-3 bg-info text-white d-lg-flex justify-content-center w-100 border rounded p-2 needs-validation" action="?c=Users&a=updateUser" method="post" novalidate>
                    <div class="form-row">
                    <div class="form-group col-md-6">
                            <label for="user_perfil">Perfil</label>
                            <select name="id_rol" id="id_rol" class="form-control class-perfil" title="Ingrese Un Perfil Válido" value="<?php echo $users->getIdRol(); ?>" required>                                
                               <?php
                               
                            //    Conexión a BD
                               $usuario = 'root';
                               $password = '';
                               $db = new PDO('mysql:host=localhost;dbname=saia', $usuario, $password);

                            //    Consulta
                                $query = $db->prepare("SELECT * FROM roles");
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
                            <label for="">Documento</label>
                            <input name="documento" id="documento" type="text" class="form-control" placeholder="Código Usuario" minlength="5" maxlength="15" title="Ingrese un código válido" value="<?php echo $users->getDocumento(); ?>" required >
                        </div>

                        <div class="form-group col-md-6">
                            <label for="user_nombres">Nombres</label>
                            <input name="nombres" type="text" class="form-control" id="nombres" placeholder="Nombres" pattern="[ a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙñÑ]{2,50}"
							title="Ingrese Nombre(s) Válido(s)" value="<?php echo $users->getNombresUser(); ?>" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="user_apellidos">Apellidos</label>
                            <input name="apellidos" type="text" class="form-control" id="apellidos" placeholder="Apellidos" pattern="[ a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙñÑ]{2,50}"
							title="Ingrese Apellidos(s) Válido(s)" value="<?php echo $users->getApellidosUser(); ?>" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="user_correo">Correo</label>
                            <input name="email" type="email" class="form-control" id="email" placeholder="usuario@correo.com" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,5}"
							title="Ingrese un correo válido" value="<?php echo $users->getCorreoUser(); ?>" required>
                        </div>
                        <div id="contrasena_us_group" class="form-group col-md-6">
                            <label for="user_contrasena">Contraseña</label>
                            <input type="password" name="pass" class="form-control" id="pass" placeholder="Entre 5 y 8 caracteres"
                            pattern="[A-Za-z0-9]{5,8}" title="Entre 5 y 8 caracteres" value="<?php echo $users->getPass(); ?>">
                        </div>
                        <div id="phone_group" class="form-group col-md-6">
                            <label for="user_phone">Telefono</label>
                            <input type="text" name="telefono" class="form-control" id="telefono" placeholder="3134564545" title="Ingrese un telefono valido" value="<?php echo $users->getTelefono(); ?>">
                        </div>
                        <div id="foto_group" class="form-group col-md-6">
                            <label for="user_foto">Foto</label>
                            <input type="file" name="foto" class="form-control p-1" id="foto" value="<?php echo $users->getFoto(); ?>">
                        </div>
                    </div>                    
                    <br>
                        <input type="submit" class="btn btn-secondary mb-2" value="Enviar">
                        <button type="button" id="submit-rol-create-cancel" class="btn btn-secondary" data-dismiss="modal" id="cerrar">Cerrar</button>
                </form>
            </div>
        </div>