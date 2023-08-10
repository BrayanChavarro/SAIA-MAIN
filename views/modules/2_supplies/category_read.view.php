        <!-- Migas de Pan -->
        <div class="migas row d-flex m-2 align-items-center bg-white border-bottom">
            <div class="col p-0">
                <div aria-label="breadcrumb">
                    <ol class="breadcrumb rounded-0 m-0 p-2 bg-white">
                        <li class="breadcrumb-item"><a href="?c=Dashboard">Inicio</a></li>
                        <li class="breadcrumb-item">Módulo Insumos de taller</li>
                        <li class="breadcrumb-item active" aria-current="page">Consultar Categorias</li>
                    </ol>
                </div>
            </div>
        </div>

        <!-- Título -->
        <div class="titulo-contenido m-2 row">
            <div class="col p-2 border-bottom d-flex justify-content-center align-items-center">
                <div class="col-5 p-0 d-flex justify-content-start align-items-center">
                    <h5 class="m-0">Consultar Categorias</h5>
                </div>
                <div class="col-6 d-flex justify-content-end align-items-center p-0">
                    <a href="?c=Supplies&a=createCategory" class="btn btn-primary">Crear Categorias</a>
                </div>
            </div>
        </div>

        <!-- Contenido -->
        <div class="contenido row bg-light m-2 p-2">
            <div class="cont-tabla col p-0 bg-light">
                <table id="data-tables" class="display nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Nombre</th>                            
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($categorias as $category): ?>
                            <tr>
                                <td><?php echo $category->getCodigoCategoria(); ?></td>
                                <td><?php echo $category->getNombreCategoria(); ?></td>
                                <td class="tabla-acciones">
                                    <a class="tabla-edit" href="?c=Supplies&a=updateCategory&idCategoria=<?php echo $category->getCodigoCategoria(); ?>"><i class="fas fa-edit"></i></a>
                                    <a class="tabla-delete" href="?c=Supplies&a=deleteCategory&idCategoria=<?php echo $category->getCodigoCategoria(); ?>" ><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Código</th>
                            <th>Nombre</th>                            
                            <th>Acciones</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>