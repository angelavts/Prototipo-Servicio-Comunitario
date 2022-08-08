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
                    <div class="container-fluid">
                            <!-- Page Heading -->
                            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                <h1 class="h3 mb-0 text-gray-800">Documentos</h1>
                            </div>
                            <div class="row justify-content-end mb-4">

                                <a href="enroll-student-cr.php" class="btn btn-primary btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-upload"></i>
                                    </span>
                                    <span class="text">Subir documento</span>
                                </a>
                            </div> 
                        </div>
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Tipo de documento</th>
                                                <th>Creación</th>
                                                <th>Observación</th>
                                                <th></th>

                                                
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Tipo de documento</th>
                                                <th>Creación</th>
                                                <th>Observación</th>
                                                <th></th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php for ($i = 1; $i < 20 ; $i++): ?> 
                                            <?php $n = rand(1,100);  ?> 
                                                
                                            <tr>
                                                <td><a href="https://drive.google.com/file/d/1atFnBWSUCDLrzlijL9wODkTRVUExaXPX/view" target="_blank">Nombre de documento</a></td>
                                                <td>Acta de aprobación</td>
                                                <td>8/8/2022</td>
                                                <td>Aqui se registran 20 horas</td>
                                                <td>
                                                    <div class="row">
                                                        <a class="nav-link" href="">
                                                        <i class="fas fa-fw fa-trash"></i></a>
                                                        <a class="nav-link" href="">
                                                        <i class="fas fa-fw fa-download"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php endfor; ?> 
                                        
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