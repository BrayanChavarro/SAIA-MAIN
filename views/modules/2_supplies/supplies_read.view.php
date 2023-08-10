        <!-- Migas de Pan -->
        <div class="migas row m-2 d-flex align-items-center bg-white border-bottom">
            <div class="col p-0">
                <div aria-label="breadcrumb">
                    <ol class="breadcrumb rounded-0 m-0 p-2 bg-white">
                        <li class="breadcrumb-item"><a href="?c=Dashboard">Inicio</a></li>
                        <li class="breadcrumb-item">Módulo Insumos de taller</li>
                        <li class="breadcrumb-item active" aria-current="page">Consultar Insumos</li>
                    </ol>
                </div>
            </div>
        </div>

        <!-- Título -->
        <div class="titulo-contenido row m-2">
            <div class="col p-2 border-bottom d-flex justify-content-center align-items-center">
                <div class="col-6 p-0 d-flex justify-content-start align-items-center">
                    <h5 class="m-0">Consultar Insumos</h5>
                </div>
                <div class="col-6 d-flex justify-content-end align-items-center p-0">
                    <a href="?c=Supplies&a=createSupplie" class="btn btn-primary">Ingresar Insumo</a>
                </div>
            </div>
        </div>

        <!-- Contenido -->
        <div class="contenido row bg-light m-2 p-2">
            <div class="cont-tabla col p-0 bg-light">
                <table id="data-tables" class="display nowrap" style="width:100%">
                    <thead>
                        <tr>                            
                            <th>Categoria</th>
                            <th>Codigo</th>
                            <th>Nombre</th>
                            <th>Marca</th>
                            <th>Referencia</th>
                            <th>Tipo</th>
                            <th>Num Factura</th>
                            <th>Estado</th>
                            <th>Quien registra</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($supplies as $supplie): ?>
                        <tr>
                            <td><?php echo $supplie->getIdCategoria(); ?></td>
                            <td><?php echo $supplie->getCodigo(); ?></td>
                            <td><?php echo $supplie->getNombre(); ?></td>
                            <td><?php echo $supplie->getMarca(); ?></td>
                            <td><?php echo $supplie->getReferencia(); ?></td>
                            <td><?php echo $supplie->getTipo(); ?></td>
                            <td><?php echo $supplie->getFacturaCompra(); ?></td>
                            <td><?php echo $supplie->getEstadoProducto(); ?></td>
                            <td><?php echo $supplie->getQuienRegistra(); ?></td>
                            <td class="tabla-acciones">
                                    <a class="tabla-edit" href="?c=Supplies&a=updateSupplie&codigo=<?php echo $supplie->getCodigo(); ?>"><i class="fas fa-edit"></i></a>
                                    <a class="tabla-delete" href="?c=Supplies&a=deleteSupplie&codigo=<?php echo $supplie->getCodigo(); ?>" onclick="deleteSupplie()"><i class="fas fa-trash-alt"></i></a>
                            </td> 
                        </tr>               
                    <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Categoria</th>
                            <th>Codigo</th>
                            <th>Nombre</th>
                            <th>Marca</th>
                            <th>Referencia</th>
                            <th>Tipo</th>
                            <th>Num Factura</th>
                            <th>Estado</th>
                            <th>Quien registra</th>
                            <th>Acciones</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>