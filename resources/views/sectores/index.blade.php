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
                                <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModalSector">Nuevo sector</button>
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

                                    @foreach($sectores as $sector)

                                        <tr>
                                            <td>{{ $sector->id }}</td>
                                            <td>{{ $sector->name }}</td>
                                            <td>{{ $sector->description }}</td>
                                            <td>
                                                <button class="btn btn-xs bg-lime waves-effect" type="button">
                                                    <li class="material-icons btn-editsector" data-toggle="modal" data-target="#myModalEditSector" value="{{ $sector->id }}">edit</li>
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
    <div id="myModalSector" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Registrar nuevo sector</h4>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('sectores.store') }}">
                        {{ csrf_field() }}

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                            <label for="namesector">Nombre</label>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" name="namesector" class="form-control" placeholder="Ingresa el nombre">
                                </div>
                            </div>

                            <label for="descriptionsector">Descripcion</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="descriptionsector" class="form-control" placeholder="Ingresa la descripcion">
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 errorSector">
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" id="addSector">Guardar</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>

        </div>
    </div>

    <div id="myModalEditSector" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Actualizar sector</h4>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('sectores.update') }}">
                        <input type="hidden" id="idSector" name="idSector"/>
                        {{ csrf_field() }}

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                            <label for="namesector">Nombre</label>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" name="namesector" id="namesector" class="form-control" placeholder="Ingresa el nombre">
                                </div>
                            </div>

                            <label for="descriptionsector">Cvesae</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="descriptionsector" id="descriptionsector" class="form-control" placeholder="Ingresa la descripcion">
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 errorUpdateSector">
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" id="updateSector">Actualizar informacion</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>

        </div>
    </div>

@stop