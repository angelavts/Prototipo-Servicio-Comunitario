<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Estudiantes inscritos</h1>

        <div class="row justify-content-end">

            <a href="select-students-cr.php" class="btn btn-primary btn-icon-split>
                <span class="icon text-white-50">
                    <i class="fas fa-upload"></i>
                </span>
                <span class="text">Añadir estudiantes</span>
            </a>
        </div> 
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
                        <th>Cedula</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Tareas</th>
                        <th>Horas</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Cedula</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Tareas</th>
                        <th>Horas</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php for ($i = 1; $i < 20 ; $i++): ?> 
                    <?php $n = rand(1,100);  ?> 
                        
                    <tr>
                        <td>5.555.555</td>
                        <td><a href="student-info-cr.php">Nombres Estudiante</a></td>
                        <td>Apellidos Estudiante</td>
                        <td><?php echo rand(1,20) ?></td>
                        <td> 
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $n ?></div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-primary" role="progressbar"
                                            style=<?php echo '"width: '.$n.'%"' ?> aria-valuenow=<?php echo '"'.$n.'"'?> aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
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