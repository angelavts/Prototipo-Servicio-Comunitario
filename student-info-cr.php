<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'assets/head.php'; ?>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <?php include 'assets/left-menu-cr.php'; ?>
        <!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
    
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <?php include 'assets/topbar-cr.php'; ?>
                <!-- End of Topbar -->
                <!-- Begin Page Content -->
                <div class="container-fluid"> 
                    
                <section>
                    <div class="container py-5">
                        <div class="row">
                        <div class="col-lg-4">
                            <div class="card mb-4">
                            <div class="card-body text-center">
                            <i class="fas fa-fw fa-user"></i>
                                <h5 class="my-3">JohnSmith</h5>
                                <p class="text-muted mb-1">Computación</p>
                                <p class="text-muted mb-4">Facultad de Ciencias y Tecnología</p>
                            </div>
                            </div>
                            <div class="card mb-4">
                            <div class="card-body text-center">
                                <h5 class="my-3">Proyecto:</h5>
                                <p class="text-muted mb-4">Creación de sistema de gestión</p>

                                <a href="" class="btn btn-primary btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-sign-out-alt"></i>
                                    </span>
                                    <span class="text">Sacar del proyecto</span>
                                </a>

                            </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="card mb-4">
                            <div class="card-body">
                                <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Cédula</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">123456789</p>
                                </div>
                                </div>
                                <hr>
                                <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Nombres</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">Johnatan Jesus</p>
                                </div>
                                </div>
                                <hr>
                                <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Apellidos</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">Smith Suarez</p>
                                </div>
                                </div>
                                <hr>
                                <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Email</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">example@example.com</p>
                                </div>
                                </div>
                                <hr>
                                <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Teléfono</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">(097) 234-5678</p>
                                </div>
                                </div>
                                <hr>
                                <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Estatus</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">Activo</p>
                                </div>
                                </div>
                                <hr>
                                <div class="row justify-content-center mt-5">
                                <a href="" class="btn btn-primary btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-cogs"></i>
                                    </span>
                                    <span class="text">Editar</span>
                                </a>
                                </div>

                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </section>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Lista de tareas</h6>
                        </div>
                        <div class="card-body">
                            <div class="row justify-content-end mb-3">
                                <!---<a href="#" class="btn btn-primary btn-icon-split mr-2">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-download"></i>
                                    </span>
                                    <span class="text">Generar diario de campo</span>
                                </a>
                                <a href="#" class="btn btn-primary btn-icon-split mr-2">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-download"></i>
                                    </span>
                                    <span class="text">Generar hoja de asistencia</span>
                                </a>-->
                                <a href="new-task-cr.php" class="btn btn-primary btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-list"></i>
                                    </span>
                                    <span class="text">Nueva tarea</span>
                                </a>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Descripción</th>
                                            <th>Creación</th>
                                            <th>Tutor</th>
                                            <th>Horas</th>
                                            <th>Estatus</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Descripción</th>
                                            <th>Creación</th>
                                            <th>Tutor</th>
                                            <th>Horas</th>
                                            <th>Estatus</th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>Realizar diagrama de entidad-relación</td>
                                            <td><p>Se debe utilizar la web lucidchart para diagramar las tablas</p></td>
                                            <td>7/8/2022</td>
                                            <td>Mirella Herrera</td>
                                            <td>63</td>
                                            <td><span class="badge badge-pill badge-secondary margin-auto">Pendiente</span></td>
                                            <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Cambiar estatus
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Pendiente</a>
                                                    <a class="dropdown-item" href="#">En progreso</a>
                                                    <a class="dropdown-item" href="#">Completada</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Inactiva</a>
                                                </div>
                                                </div>                                            
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Realizar BPMN de los procesos</td>
                                            <td><p>Se debe utilizar la web lucidchart para construir los BPMN de los procesos de gestion y carga de datos</p></td>
                                            <td>7/8/2022</td>
                                            <td>Mirella Herrera</td>
                                            <td>63</td>
                                            <td><span class="badge badge-pill badge-success margin-auto">Completada</span></td>
                                            <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Cambiar estatus
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Pendiente</a>
                                                    <a class="dropdown-item" href="#">En progreso</a>
                                                    <a class="dropdown-item" href="#">Completada</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Inactiva</a>
                                                </div>
                                                </div>                                            
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Realizar BPMN de los procesos</td>
                                            <td><p>Se debe utilizar la web lucidchart para construir los BPMN de los procesos de gestion y carga de datos</p></td>
                                            <td>5/8/2022</td>
                                            <td>Mirella Herrera</td>
                                            <td>63</td>
                                            <td><span class="badge badge-pill badge-warning margin-auto">En progreso</span></td>
                                            <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Cambiar estatus
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Pendiente</a>
                                                    <a class="dropdown-item" href="#">En progreso</a>
                                                    <a class="dropdown-item" href="#">Completada</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Inactiva</a>
                                                </div>
                                                </div>                                            
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Realizar diagrama de entidad-relación</td>
                                            <td><p>Se debe utilizar la web lucidchart para diagramar las tablas</p></td>
                                            <td>1/8/2022</td>
                                            <td>Mirella Herrera</td>
                                            <td>63</td>
                                            <td><span class="badge badge-pill badge-danger margin-auto">Inactiva</span></td>
                                            <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Cambiar estatus
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Pendiente</a>
                                                    <a class="dropdown-item" href="#">En progreso</a>
                                                    <a class="dropdown-item" href="#">Completada</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Inactiva</a>
                                                </div>
                                                </div>                                            
                                            </td>
                                        </tr>

                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
            <!-- Footer -->
            <?php include 'assets/footer.php'; ?>
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->  
    </div>
    <!-- End of Page Wrapper -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <?php include 'assets/logout-modal.php'; ?>
    <?php include 'assets/include-scripts.php'; ?>




    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>
</html>