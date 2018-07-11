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
                                <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModalLote">Nuevo lote</button>
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

                                    @foreach($lotes as $lote)

                                        <tr>
                                            <td>{{ $lote->id }}</td>
                                            <td>{{ $lote->name }}</td>
                                            <td>{{ $lote->description }}</td>
                                            <td>
                                                <button class="btn btn-xs bg-lime waves-effect" type="button">
                                                    <li class="material-icons btn-editlote" data-toggle="modal" data-target="#myModalEditLote" value="{{ $lote->id }}">edit</li>
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
    <div id="myModalLote" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Registrar nuevo lote</h4>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('lotes.store') }}">
                        {{ csrf_field() }}

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                            <label for="namelote">Nombre</label>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" name="namelote" class="form-control" placeholder="Ingresa el nombre">
                                </div>
                            </div>

                            <label for="descriptionlote">Descripcion</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="descriptionlote" class="form-control" placeholder="Ingresa la descripcion">
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 errorLote">
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" id="addLote">Guardar</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>

        </div>
    </div>

    <div id="myModalEditLote" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Actualizar lote</h4>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('lotes.update') }}">
                        <input type="hidden" id="idLote" name="idLote"/>
                        {{ csrf_field() }}

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                            <label for="namelote">Nombre</label>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" name="namelote" id="namelote" class="form-control" placeholder="Ingresa el nombre">
                                </div>
                            </div>

                            <label for="descriptionlote">Cvesae</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="descriptionlote" id="descriptionlote" class="form-control" placeholder="Ingresa la descripcion">
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 errorUpdateLote">
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" id="updateLote">Actualizar informacion</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>

        </div>
    </div>

@stop