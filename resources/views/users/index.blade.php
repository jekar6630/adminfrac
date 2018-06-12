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
                            </h2><br>
                            @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Error!</strong>
                                @foreach($errors as $error)
                                    {{ $error }}
                                @endforeach
                            </div>
                            @endif
                            <div class="header-dropdown m-r--5 js-modal-buttons">
                                <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModalUsuario">Nuevo Usuario</button>
                            </div>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nombre</th>
                                        <th>Email</th>
                                        <th>Telefono1</th>
                                        <th>Compania</th>
                                        <th>Funcion</th>
                                        <th>Foto</th>
                                        <th>Acciones</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nombre</th>
                                        <th>Email</th>
                                        <th>Telefono1</th>
                                        <th>Compania</th>
                                        <th>Funcion</th>
                                        <th>Foto</th>
                                        <th>Acciones</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>

                                    @foreach($usuarios as $user)

                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->phone1 }}</td>
                                            <td>{{ $user->company->name }}</td>
                                            <td>{{ $user->function->name}}</td>
                                            <td>
                                                <a class="thumbnail btn-edit-user-photo">
                                                    @if( $user->urlfoto == '-')
                                                        -
                                                    @else
                                                        <img src="fotos/{{ $user->urlfoto }}" class="img-responsive">
                                                    @endif
                                                </a>
                                            </td>
                                            <td>
                                                <button class="btn btn-xs bg-lime waves-effect" type="button">
                                                    <li class="material-icons btn-edit-user" data-toggle="modal" data-target="#myModalEditUser" value="{{ $user->id }}">edit</li>
                                                </button>
                                                @if( $user->urlfoto == '-')
                                                    <button class="btn btn-xs btn-info bg-lime waves-effect" type="button">
                                                        <li class="material-icons btn-edit-user" data-toggle="modal" data-target="#myModalEditPhoto" value="{{ $user->id }}">search</li>
                                                    </button>
                                                @else
                                                    <button class="btn btn-xs btn-warning bg-lime waves-effect" type="button">
                                                        <li class="material-icons btn-edit-user" data-toggle="modal" data-target="#myModalEditPhoto" value="{{ $user->id }}">update</li>
                                                    </button>
                                                @endif
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
    <div id="myModalUsuario" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Registrar nueva usuario</h4>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('usuarios.store') }}">
                        {{ csrf_field() }}

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">

                            <label for="fullname">Nombre Completo</label>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" name="fullname" class="form-control" placeholder="Ingresa el nombre completo">
                                </div>
                            </div>

                            <label for="email1">Email</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="email1" class="form-control" placeholder="Ingresa el email1">
                                </div>
                            </div>

                            <label for="email2">Email2</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="email2" class="form-control" placeholder="Ingresa el email2">
                                </div>
                            </div>

                            <label for="phone1">Telefono1</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="phone1" class="form-control" placeholder="Ingresa el telefono 1">
                                </div>
                            </div>

                            <label for="phone2">Telefono2</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="phone2" class="form-control" placeholder="Ingresa el telefono 2">
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">

                            <label for="phone3">Telefono3</label>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" name="phone3" class="form-control" placeholder="Ingresa el telefono 3">
                                </div>
                            </div>

                            <label for="officephone">Telefono de oficina</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="officephone" class="form-control" placeholder="Ingresa el telefono de oficina">
                                </div>
                            </div>

                            <label for="movil1">Movil 1</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="movil1" class="form-control" placeholder="Ingresa el movil1">
                                </div>
                            </div>

                            <label for="movil2">Movil 2</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="movil2" class="form-control" placeholder="Ingresa el movil2">
                                </div>
                            </div>

                            <label for="company">Compania</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <select class="form-control show-tick" name="company" id="company">
                                        <option value="">-- Please select --</option>
                                        @foreach($companias as $compania)
                                            <option value="{{ $compania->id }}">{{ $compania->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <label for="funcion">Funcion</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <select class="form-control show-tick" name="funcion" id="funcion">
                                        <option value="">-- Please select --</option>
                                        @foreach($funciones as $funcion)
                                            <option value="{{ $funcion->id }}">{{ $funcion->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 errorUser">
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" id="addUser">Guardar</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>

        </div>
    </div>

    <!-- Modal Edit-->
    <div id="myModalEditUser" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Actualizar usuario</h4>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('usuarios.update') }}">
                        <input type="hidden" id="idUsuario" name="idUsuario"/>
                        {{ csrf_field() }}

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">

                            <label for="fullname">Nombre Completo</label>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" name="fullname" id="fullname" class="form-control" placeholder="Ingresa el nombre completo">
                                </div>
                            </div>

                            <label for="email1">Email</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="email1" id="email1" class="form-control" placeholder="Ingresa el email1">
                                </div>
                            </div>

                            <label for="email2">Email2</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="email2" id="email2" class="form-control" placeholder="Ingresa el email2">
                                </div>
                            </div>

                            <label for="phone1">Telefono1</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="phone1" id="phone1" class="form-control" placeholder="Ingresa el telefono 1">
                                </div>
                            </div>

                            <label for="phone2">Telefono2</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="phone2" id="phone2" class="form-control" placeholder="Ingresa el telefono 2">
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">

                            <label for="phone3">Telefono3</label>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" name="phone3" id="phone3" class="form-control" placeholder="Ingresa el telefono 3">
                                </div>
                            </div>

                            <label for="officephone">Telefono de oficina</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="officephone" id="officephone" class="form-control" placeholder="Ingresa el telefono de oficina">
                                </div>
                            </div>

                            <label for="movil1">Movil 1</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="movil1" id="movil1" class="form-control" placeholder="Ingresa el movil1">
                                </div>
                            </div>

                            <label for="movil2">Movil 2</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="movil2" id="movil2" class="form-control" placeholder="Ingresa el movil2">
                                </div>
                            </div>

                            <label for="companyu">Compania</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <select class="form-control show-tick" name="companyu" id="companyu">
                                        <option value="">-- Please select --</option>
                                        @foreach($companias as $compania)
                                            <option value="{{ $compania->id }}">{{ $compania->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <label for="funcionu">Funcion</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <select class="form-control show-tick" name="funcionu" id="funcionu">
                                        <option value="">-- Please select --</option>
                                        @foreach($funciones as $funcion)
                                            <option value="{{ $funcion->id }}">{{ $funcion->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                        </div>


                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 errorUpdateUser">
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" id="updateUser">Actualizar informacion</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>

        </div>
    </div>

    <!-- Modal Edit-->
    <div id="myModalEditPhoto" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" id="titlephoto"></h4>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('usuarios.updatephoto') }}" enctype="multipart/form-data" name="formphoto" id="formphoto">
                        <input type="hidden" id="idUsuarioPhoto" name="idUsuarioPhoto"/>

                        {{ csrf_field() }}

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                            <label for="phone2">Seleccionar archivo</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="file" name="photo"/>
                                </div>
                            </div>

                        </div>


                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 errorUpdatePhoto">
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info" id="enviarFoto">Subir foto</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>

        </div>
    </div>

@stop