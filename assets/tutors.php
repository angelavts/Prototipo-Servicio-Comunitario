<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tutores</h1>

        

        <a href="enroll-tutors.php" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-upload"></i>
            </span>
            <span class="text">Añadir tutores</span>
        </a>

        
        
    </div>
</div>
<!-- /.container-fluid -->

<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Cédula</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Carrera</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Cédula</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Carrera</th>
                            <th></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php for ($i = 1; $i < 20 ; $i++): ?> 
                        <tr>
                            <td>5.555.555</td>
                            <td>Nombres Tutor</td>
                            <td>Apellidos Tutor</td>
                            <td>Carrera Tutor</td>
                            <td></td>
                        </tr>
                        <?php endfor; ?>  
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
