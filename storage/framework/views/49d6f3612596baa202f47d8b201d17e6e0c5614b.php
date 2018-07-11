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
                                <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModalFuncion">Nueva funcion</button>
                            </div>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nombre</th>
                                        <th>Descripcion</th>
                                        <th>Acciones</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nombre</th>
                                        <th>Descripcion</th>
                                        <th>Acciones</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>

                                    <?php $__currentLoopData = $funciones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $funcion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <tr>
                                            <td><?php echo e($funcion->id); ?></td>
                                            <td><?php echo e($funcion->name); ?></td>
                                            <td><?php echo e($funcion->description); ?></td>
                                            <td>
                                                <button class="btn btn-xs bg-lime waves-effect" type="button">
                                                    <li class="material-icons btn-editfuncion" data-toggle="modal" data-target="#myModalEditFuncion" value="<?php echo e($funcion->id); ?>">edit</li>
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
    <div id="myModalFuncion" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Registrar nueva funcion</h4>
                </div>
                <div class="modal-body">
                    <form method="POST" action="<?php echo e(route('funciones.store')); ?>">
                        <?php echo e(csrf_field()); ?>


                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                            <label for="namefuncion">Nombre</label>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" name="namefuncion" class="form-control" placeholder="Ingresa el nombre">
                                </div>
                            </div>

                            <label for="descriptionfuncion">Descripcion</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="descriptionfuncion" class="form-control" placeholder="Ingresa la descripcion">
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 errorFuncion">
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" id="addFuncion">Guardar</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>

        </div>
    </div>

    <div id="myModalEditFuncion" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Actualizar funcion</h4>
                </div>
                <div class="modal-body">
                    <form method="POST" action="<?php echo e(route('funciones.update')); ?>">
                        <input type="hidden" id="idFuncion" name="idFuncion"/>
                        <?php echo e(csrf_field()); ?>


                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                            <label for="namefunction">Nombre</label>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" name="namefunction" id="namefunction" class="form-control" placeholder="Ingresa el nombre">
                                </div>
                            </div>

                            <label for="descriptionfunction">Cvesae</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="descriptionfunction" id="descriptionfunction" class="form-control" placeholder="Ingresa la descripcion">
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 errorUpdateFuncion">
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" id="updateFuncion">Actualizar informacion</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>

        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>