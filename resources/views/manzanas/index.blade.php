@extends('layout')

@section('content')

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
                                <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModalManzana">Nueva manzana</button>
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

                                    @foreach($manzanas as $manzana)

                                        <tr>
                                            <td>{{ $manzana->id }}</td>
                                            <td>{{ $manzana->name }}</td>
                                            <td>{{ $manzana->description }}</td>
                                            <td>
                                                <button class="btn btn-xs bg-lime waves-effect" type="button">
                                                    <li class="material-icons btn-editmanzana" data-toggle="modal" data-target="#myModalEditManzana" value="{{ $manzana->id }}">edit</li>
                                                </button>
                                            </td>
                                        </tr>

                                    @endforeach

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
    <div id="myModalManzana" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Registrar nuevo manzana</h4>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('manzanas.store') }}">
                        {{ csrf_field() }}

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                            <label for="namemanzana">Nombre</label>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" name="namemanzana" class="form-control" placeholder="Ingresa el nombre">
                                </div>
                            </div>

                            <label for="descriptionmanzana">Descripcion</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="descriptionmanzana" class="form-control" placeholder="Ingresa la descripcion">
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 errorManzana">
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" id="addManzana">Guardar</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>

        </div>
    </div>

    <div id="myModalEditManzana" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Actualizar manzana</h4>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('manzanas.update') }}">
                        <input type="hidden" id="idManzana" name="idManzana"/>
                        {{ csrf_field() }}

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                            <label for="namemanzana">Nombre</label>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" name="namemanzana" id="namemanzana" class="form-control" placeholder="Ingresa el nombre">
                                </div>
                            </div>

                            <label for="descriptionmanzana">Descripcion</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="descriptionmanzana" id="descriptionmanzana" class="form-control" placeholder="Ingresa la descripcion">
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 errorUpdateManzana">
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" id="updateManzana">Actualizar informacion</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>

        </div>
    </div>

@stop