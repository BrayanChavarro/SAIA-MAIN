<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SAIA - Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="assets/img/logoSAIA.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- styles Datatables -->

    <link rel="shortcut icon" href="assets/img/css.png">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.4.0/css/select.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.8/css/rowReorder.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.css">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/normalize.css">

    <!-- Sweetalert2 -->
    <script src=" https://cdn.jsdelivr.net/npm/sweetalert2@11.7.21/dist/sweetalert2.all.min.js "></script>
    <link href=" https://cdn.jsdelivr.net/npm/sweetalert2@11.7.21/dist/sweetalert2.min.css " rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="?c=Dashboard" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><img class="" src="assets/img/logoSAIA.png" alt="" style=" width: 40px; height: 40px;">  SAIA</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="assets/img/admin-user.png" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Rodrigo Rodriguez</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="?c=Dashboard" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-users me-2"></i>usuarios</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="?c=Users&a=createRol" class="dropdown-item">Crear Rol</a>
                            <a href="?c=Users&a=readRol" class="dropdown-item">Consultar Roles</a>
                            <a href="?c=Users&a=createUser" class="dropdown-item">Crea Usuario</a>
                            <a href="?c=Users&a=readUser" class="dropdown-item">Consultar Usuarios</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-car me-2"></i>Insumos taller</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="?c=Supplies&a=createCategory" class="dropdown-item">Crear Categoria</a>
                            <a href="?c=Supplies&a=readCategory" class="dropdown-item">Consultar Categorias</a>
                            <a href="?c=Supplies&a=createSupplie" class="dropdown-item">Ingresar Insumos</a>
                            <a href="?c=Supplies&a=readSupplie" class="dropdown-item">Consultar Insumos</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-shopping-cart me-2"></i>Compras</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="?c=Purchases&a=createSupplier" class="dropdown-item">Crear Proveedor</a>
                            <a href="?c=Purchases&a=readSupplier" class="dropdown-item">Consultar Proveedores</a>
                            <a href="?c=Purchases&a=createBuy" class="dropdown-item">Ingresar Compra</a>
                            <a href="?c=Purchases&a=readBuy" class="dropdown-item">Consultar Compras</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-credit-card me-2"></i>Ventas</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="?c=Sales&a=createClient" class="dropdown-item">Crear Cliente</a>
                            <a href="?c=Sales&a=readClient" class="dropdown-item">Consultar Clientes</a>
                            <a href="?c=Sales&a=createSale" class="dropdown-item">Ingresar Venta</a>
                            <a href="?c=Sales&a=readSale" class="dropdown-item">Consultar Ventas</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-cubes me-2"></i>Inventarios</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="?c=Inventories&a=readStock" class="dropdown-item">Consultar stock</a>
                            <a href="?c=Inventories&a=readHistory" class="dropdown-item">Consultar Historial</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-chart-bar me-2"></i>Reportes</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="?c=Reports&a=reportGraphics" class="dropdown-item">Reporte graficos</a>
                            <a href="?c=Reports&a=reportPrinted" class="dropdown-item">Reportes impresos</a>
                        </div>
                    </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


       <!-- Content Start -->
       <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Buscar">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Mensajes</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="assets/img/admin-user.png" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Rodrigo envió un mensaje</h6>
                                        <small>Hace 15 minutos</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="assets/img/admin-user.png" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon recibió un mensaje</h6>
                                        <small>Hace 15 minutos</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="assets/img/admin-user.png" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Rodrigo recibió un mensaje</h6>
                                        <small>Hace 15 minutos</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">Ver todos los Mensajes</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notificaciones</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Perfil actualizado</h6>
                                <small>Hace 10 minutos</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Nuevo usuario agregado</h6>
                                <small>Hace 15 minutos</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Cambio de contraseña</h6>
                                <small>Hace 20 minutos</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">Ver todas las Notificaciones</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="assets/img/admin-user.png" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">Rodrigo Rodriguez</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">Mi perfil</a>
                            <a href="#" class="dropdown-item">Configurar</a>
                            <a href="?c=Logout" class="dropdown-item">Salir</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->