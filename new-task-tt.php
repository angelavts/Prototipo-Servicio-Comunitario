<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'assets/head.php'; ?>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <?php include 'assets/left-menu-tt.php'; ?>
        <!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
    
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <?php include 'assets/topbar-tt.php'; ?>
                <!-- End of Topbar -->
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Crear una nueva tarea para el proyecto Nombre proyecto activo</h6>
                        </div>
                        <div class="card-body">
                            <form class="mt-3">
                                <div class="form-group">
                                    <label for="inputAddress">Estudiante responsable:</label>
                                    <p> Nombre de estudiante - C.I. del estudiante</p>
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress">Nombre</label>
                                    <input type="text" class="form-control" id="inputAddress" placeholder="Nombre de la tarea">
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress2">Descripción</label>
                                    <input type="text" class="form-control" id="inputAddress2" placeholder="Descripción de la tarea">
                                </div>
                                <a href="student-info-cr.php" class="btn btn-primary btn-icon-split">
                                    <span class="text">Crear tarea</span>
                                </a>
                            </form>
                    
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