<!-- Migas de Pan -->
<div class="migas row m-2 d-flex align-items-center bg-white border-bottom">
            <div class="col p-0">
                <div aria-label="breadcrumb">
                    <ol class="breadcrumb rounded-0 m-0 p-2 bg-white">
                        <li class="breadcrumb-item"><a href="?c=Dashboard">Inicio</a></li>
                        <li class="breadcrumb-item">Módulo Ventas</li>
                        <li class="breadcrumb-item active" aria-current="page">Ingresar Venta</li>
                    </ol>
                </div>
            </div>
        </div>
        
        <!-- Título -->
        <div class="titulo-contenido m-2 row">
            <div class="col p-2 border-bottom d-flex justify-content-center align-items-center">
                <div class="col-5 p-0 d-flex justify-content-start align-items-center">
                    <h5 class="m-0">Ingresar Venta</h5>
                </div>
                <div class="col-6 d-flex justify-content-end align-items-center p-0">
                    <a href="?c=Sales&a=readSale" class="btn btn-primary">Consultar Ventas</a>
                </div>
            </div>
            
        </div>
        <!-- Contenido -->
        <div class="contenido row bg-light m-2 p-2">
            <div class="col p-0 bg-light">
                <form id="formRolCreate" name="formRolCreate" class=" form-inline card p-3 bg-info text-white d-lg-flex justify-content-center w-100 border rounded p-2 needs-validation" action="?c=Users&a=createUser" method="post" novalidate>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="">Numero_pedido</label>
                            <input name="Numero_pedido" id="Numero_pedido" type="text" class="form-control" placeholder="Código Insumo" minlength="5" maxlength="15" title="Ingrese un código válido" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="fecha_pedido">Fecha</label>
                            <input name="fecha_pedido" type="date" class="form-control" id="fecha_pedido" pattern="[ a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙñÑ]{2,50}"
							title="Ingrese la fecha del pedido" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="total_si">Total sin iva</label>
                            <input name="total_si" type="text" class="form-control" id="total_si" placeholder="Total sin iva" pattern="[ a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙñÑ]{2,50}"
							title="Total sin iva" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="iva">Iva</label>
                            <input name="iva" type="text" class="form-control" id="iva" placeholder="Referencia insumo" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,5}"
							title="Ingrese una referencia valida" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="total_ci">Total</label>
                            <input name="total_ci" type="text" class="form-control" id="total_ci" placeholder="Tipo insumo" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,5}"
							title="Total con iva" required>
                        </div>
                        <div id="factura-group" class="form-group col-md-6">
                            <label for="cliente">Cliente</label>
                            <input type="text" name="cliente" class="form-control" id="cliente" placeholder="Numero de factura" title="Ingrese un numero de factura valido">
                        </div>
                        <div id="foto_group" class="form-group col-md-6">
                            <label for="productos">lista productos</label>
                            <input type="text" name="productos" placeholder="tipo select" class="form-control p-1" id="productos">
                        </div>
                    </div>                    
                    <br>
                        <input type="submit" class="btn btn-secondary mb-2" value="Enviar">
                        <button type="button" id="submit-rol-create-cancel" class="btn btn-secondary" data-dismiss="modal" id="cerrar">Cerrar</button>
                </form>
            </div>
        </div>