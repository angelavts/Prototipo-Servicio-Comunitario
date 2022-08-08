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
                                <h5 class="my-3">Mirella Herrera</h5>
                                <p class="text-muted mb-1">Coordinadora de Servicio Comunitario</p>
                                <p class="text-muted mb-4">Facultad de Ciencias y Tecnología</p>
                            </div>
                            </div>
                            <div class="card mb-4">
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
                                    <input type="text" class="form-control" placeholder="Johnatan Jesus">
                                </div>
                                </div>
                                <hr>
                                <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Apellidos</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Smith Suarez">
                                </div>
                                </div>
                                <hr>
                                <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Email</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                                </div>
                                <hr>
                                <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Teléfono</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" placeholder="Número">
                                </div>
                                </div>
                                <hr>
                                <div class="row justify-content-center mt-5">
                                <a href="profile-st.php" class="btn btn-primary btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-cogs"></i>
                                    </span>
                                    <span class="text">Guardar cambios</span>
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