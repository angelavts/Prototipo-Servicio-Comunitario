
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
            <a href="new-task-st.php" class="btn btn-primary btn-icon-split">
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