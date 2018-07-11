<?php $__env->startSection('content'); ?>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    JQUERY DATATABLES
                    <small>Taken from <a href="https://datatables.net/" target="_blank">datatables.net</a></small>
                </h2>
            </div>

            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                EXPORTABLE TABLE
                            </h2>
                            <div class="header-dropdown m-r--5 js-modal-buttons">
                                <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModalCompania">Nueva compañia</button>
                            </div>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nombre</th>
                                        <th>Calle</th>
                                        <th>Telefono1</th>
                                        <th>Telefono2</th>
                                        <th>Email</th>
                                        <th>Acciones</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nombre</th>
                                        <th>Calle</th>
                                        <th>Telefono1</th>
                                        <th>Telefono2</th>
                                        <th>Email</th>
                                        <th>Acciones</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>

                                    <?php $__currentLoopData = $companias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $compania): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <tr>
                                            <td><?php echo e($compania->id); ?></td>
                                            <td><?php echo e($compania->name); ?></td>
                                            <td><?php echo e($compania->street); ?></td>
                                            <td><?php echo e($compania->phone1); ?></td>
                                            <td><?php echo e($compania->phone2); ?></td>
                                            <td><?php echo e($compania->email); ?></td>
                                            <td>
                                                <button class="btn btn-xs bg-lime waves-effect" type="button">
                                                    <li class="material-icons btn-editdireccion" data-toggle="modal" data-target="#myModalEditCompania" value="<?php echo e($compania->id); ?>">edit</li>
                                                </button>
                                            </td>
                                        </tr>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
        </div>
    </section>

    <!-- Modal -->
    <div id="myModalCompania" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Registrar nueva compania</h4>
                </div>
                <div class="modal-body">
                    <form method="POST" action="<?php echo e(route('companias.store')); ?>">
                        <?php echo e(csrf_field()); ?>


                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                            <label for="namecompany">Nombre</label>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" name="namecompany" class="form-control" placeholder="Ingresa el nombre">
                                </div>
                            </div>

                            <label for="callecompany">Calle</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="callecompany" class="form-control" placeholder="Ingresa la calle">
                                </div>
                            </div>

                            <label for="telefono1compania">Telefono 1</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="telefono1compania" class="form-control" placeholder="Ingresa el telefono 1">
                                </div>
                            </div>

                            <label for="telefono2compania">Telefono 2</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="telefono2compania" class="form-control" placeholder="Ingresa el telefono 2">
                                </div>
                            </div>

                            <label for="emailcompania">Email</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="emailcompania" class="form-control" placeholder="Ingresa el email">
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 errorCompania">
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" id="addCompania">Guardar</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>

        </div>
    </div>

    <!-- Modal Edit-->
    <div id="myModalEditCompania" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Actualizar compania</h4>
                </div>
                <div class="modal-body">
                    <form method="POST" action="<?php echo e(route('companias.update')); ?>">
                        <input type="hidden" id="idCompania" name="idCompania"/>
                        <?php echo e(csrf_field()); ?>


                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                            <label for="namecompany">Nombre</label>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" name="namecompany" id="namecompany" class="form-control" placeholder="Ingresa el codigo">
                                </div>
                            </div>

                            <label for="callecompany">Cvesae</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="callecompany" id="callecompany" class="form-control" placeholder="Ingresa la clavesae">
                                </div>
                            </div>

                            <label for="telefono1compania">Calle</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="telefono1compania" id="telefono1compania" class="form-control" placeholder="Ingresa la calle">
                                </div>
                            </div>

                            <label for="telefono2compania">Horario</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="telefono2compania" id="telefono2compania" class="form-control" placeholder="Ingresa el horario">
                                </div>
                            </div>

                            <label for="emailcompania">Tipo</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="emailcompania" id="emailcompania" class="form-control" placeholder="Ingresa el tipo">
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 errorUpdateCompany">
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" id="updateCompany">Actualizar informacion</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>

        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>