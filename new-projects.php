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

                        <div class="col-lg-6">
                            <div class="card mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Inscribir un proyecto</h6>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Nombre</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                                </div>
                                <hr>
                                <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Descripción</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                                </div>
                                <hr>
                                <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Cedula coordinador</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                                </div>
                                <hr>
                                <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Nombres coordinador</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                                </div>
                                <hr>
                                <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Apellidos coordinador</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                                </div>
                                <hr>
                                <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Email coordinador</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" placeholder="">
                                </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Teléfono coordinador</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Facultad</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <select class="form-control">
                                            <option>Facyt</option>
                                            <option>Faces</option>
                                        </select>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Carrera</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <select class="form-control">
                                            <option>Computación</option>
                                            <option>Química</option>
                                            <option>Física</option>
                                            <option>Matemática</option>
                                            <option>Biología</option>
                                        </select>
                                    </div>
                                </div>
                                <hr>
                                <div class="row justify-content-center mt-5">
                                <a href="" class="btn btn-primary btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-cogs"></i>
                                    </span>
                                    <span class="text">Inscribir proyecto</span>
                                </a>
                                </div>

                            </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Inscribir proyectos a partir de un archivo</h6>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    
                                    <p class="p-2">Para esto deberá cargar un archivo excel que tenga el siguiente <a href="">Formato</a></p>
                                    
                                </div>
                                
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Cargar archivo excel</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFileLang" lang="es">
                                            <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
                                        </div>
                                    </div>
                                </div>
                                
                                <hr>
                                <div class="row justify-content-center mt-5">
                                <a href="" class="btn btn-primary btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-cogs"></i>
                                    </span>
                                    <span class="text">Inscribir proyectos</span>
                                </a>
                                </div>

                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </section>
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