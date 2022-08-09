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
                        <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="card mb-4">
                            <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">¿Qué desea buscar?</p>
                                </div>
                                <div class="col-sm-9">
                                <select id="inputState" class="form-control">
                                        <option>Estudiante</option>
                                        <option>Tutor</option>
                                    </select>
                                </div>
                                </div>
                                <hr>
                                <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Cédula</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" placeholder="">
                                </div>
                                </div>
                                <hr>
                                <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Nombres</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                                </div>

                                <hr>
                                <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Apellidos</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                                </div>
                                <hr>
                                <div class="row justify-content-center mt-5">
                                <a href="profile-st.php" class="btn btn-primary btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-cogs"></i>
                                    </span>
                                    <span class="text">Buscar</span>
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
</body>
</html>