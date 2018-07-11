<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Welcome To | Bootstrap Based Admin Template - Material Design</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="admintemplate/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="admintemplate/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="admintemplate/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="admintemplate/plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="admintemplate/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="admintemplate/css/themes/all-themes.css" rel="stylesheet" />

    <link href="admintemplate/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
</head>

<body class="theme-red">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="preloader">
            <div class="spinner-layer pl-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
        <p>Please wait...</p>
    </div>
</div>
<!-- #END# Page Loader -->
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->
<!-- Search Bar -->
<div class="search-bar">
    <div class="search-icon">
        <i class="material-icons">search</i>
    </div>
    <input type="text" placeholder="START TYPING...">
    <div class="close-search">
        <i class="material-icons">close</i>
    </div>
</div>
<!-- #END# Search Bar -->
<!-- Top Bar -->
<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="index.html">Encinos Admin</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <!-- Call Search -->
                <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                <!-- #END# Call Search -->
                <!-- Notifications -->
                <li class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                        <i class="material-icons">notifications</i>
                        <span class="label-count">7</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">NOTIFICATIONS</li>
                        <li class="body">
                            <ul class="menu">
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle bg-light-green">
                                            <i class="material-icons">person_add</i>
                                        </div>
                                        <div class="menu-info">
                                            <h4>12 new members joined</h4>
                                            <p>
                                                <i class="material-icons">access_time</i> 14 mins ago
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle bg-cyan">
                                            <i class="material-icons">add_shopping_cart</i>
                                        </div>
                                        <div class="menu-info">
                                            <h4>4 sales made</h4>
                                            <p>
                                                <i class="material-icons">access_time</i> 22 mins ago
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle bg-red">
                                            <i class="material-icons">delete_forever</i>
                                        </div>
                                        <div class="menu-info">
                                            <h4><b>Nancy Doe</b> deleted account</h4>
                                            <p>
                                                <i class="material-icons">access_time</i> 3 hours ago
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle bg-orange">
                                            <i class="material-icons">mode_edit</i>
                                        </div>
                                        <div class="menu-info">
                                            <h4><b>Nancy</b> changed name</h4>
                                            <p>
                                                <i class="material-icons">access_time</i> 2 hours ago
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle bg-blue-grey">
                                            <i class="material-icons">comment</i>
                                        </div>
                                        <div class="menu-info">
                                            <h4><b>John</b> commented your post</h4>
                                            <p>
                                                <i class="material-icons">access_time</i> 4 hours ago
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle bg-light-green">
                                            <i class="material-icons">cached</i>
                                        </div>
                                        <div class="menu-info">
                                            <h4><b>John</b> updated status</h4>
                                            <p>
                                                <i class="material-icons">access_time</i> 3 hours ago
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle bg-purple">
                                            <i class="material-icons">settings</i>
                                        </div>
                                        <div class="menu-info">
                                            <h4>Settings updated</h4>
                                            <p>
                                                <i class="material-icons">access_time</i> Yesterday
                                            </p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer">
                            <a href="javascript:void(0);">View All Notifications</a>
                        </li>
                    </ul>
                </li>
                <!-- #END# Notifications -->
                <!-- Tasks -->
                <li class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                        <i class="material-icons">flag</i>
                        <span class="label-count">9</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">TASKS</li>
                        <li class="body">
                            <ul class="menu tasks">
                                <li>
                                    <a href="javascript:void(0);">
                                        <h4>
                                            Footer display issue
                                            <small>32%</small>
                                        </h4>
                                        <div class="progress">
                                            <div class="progress-bar bg-pink" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 32%">
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <h4>
                                            Make new buttons
                                            <small>45%</small>
                                        </h4>
                                        <div class="progress">
                                            <div class="progress-bar bg-cyan" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <h4>
                                            Create new dashboard
                                            <small>54%</small>
                                        </h4>
                                        <div class="progress">
                                            <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 54%">
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <h4>
                                            Solve transition issue
                                            <small>65%</small>
                                        </h4>
                                        <div class="progress">
                                            <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <h4>
                                            Answer GitHub questions
                                            <small>92%</small>
                                        </h4>
                                        <div class="progress">
                                            <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 92%">
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer">
                            <a href="javascript:void(0);">View All Tasks</a>
                        </li>
                    </ul>
                </li>
                <!-- #END# Tasks -->
                <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
            </ul>
        </div>
    </div>
</nav>

@include('partials.topbar')

@yield('content')

<!-- Jquery Core Js -->
<script src="admintemplate/plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap Core Js -->
<script src="admintemplate/plugins/bootstrap/js/bootstrap.js"></script>

<script src="admintemplate/plugins/jquery-datatable/jquery.dataTables.js"></script>
<script src="admintemplate/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
<script src="admintemplate/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
<script src="admintemplate/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
<script src="admintemplate/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
<script src="admintemplate/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
<script src="admintemplate/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
<script src="admintemplate/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
<script src="admintemplate/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

<!-- Waves Effect Plugin Js -->
<script src="admintemplate/plugins/node-waves/waves.js"></script>

<!-- Custom Js -->
<script src="admintemplate/js/admin.js"></script>

<script>

    $(function () {

        edit();
        editcompany();
        editfunction();
        editlote();
        editmanzana();
        editsector();
        editusuario();

        $('.js-exportable').DataTable({
            dom: 'Bfrtip',
            responsive: true,
            buttons: [
                //'copy', 'csv', 'excel', 'pdf', 'print'
                'print'
            ]
        });

        function edit(){
            $('.btn-edit').click(function(e){
                e.preventDefault();
                var id = $(this).val();

                $.ajax({
                    type:'get',
                    url: 'direcciones/show',
                    data:{id:id},
                    success: function(data) {
                        $("#idDireccion").val(id);
                        $("#code").val(data.direccion.code);
                        $("#cvesae").val(data.direccion.cvesae);
                        $("#calle").val(data.direccion.street);
                        $("#horario").val(data.direccion.schedule);
                        $("#tipou").val(data.direccion.tipo);
                        $("#loteu").val(data.direccion.lote);
                        $("#manzanau").val(data.direccion.manzana);
                        $("#sectoru").val(data.direccion.sector);
                        $("#propietario").val(data.direccion.propietario);

                    }
                });
            });
        }

        function editcompany(){
            $('.btn-editdireccion').click(function(e){
                e.preventDefault();
                var id = $(this).val();

                $.ajax({
                    type:'get',
                    url: 'companias/show',
                    data:{id:id},
                    success: function(data) {
                        $("#idCompania").val(id);
                        $("#namecompany").val(data.compania.name);
                        $("#callecompany").val(data.compania.street);
                        $("#telefono1compania").val(data.compania.phone1);
                        $("#telefono2compania").val(data.compania.phone2);
                        $("#emailcompania").val(data.compania.email);
                    }
                });
            });
        }

        function editfunction(){
            $('.btn-editfuncion').click(function(e){
                e.preventDefault();
                var id = $(this).val();

                $.ajax({
                    type:'get',
                    url: 'funciones/show',
                    data:{id:id},
                    success: function(data) {
                        $("#idFuncion").val(id);
                        $("#namefunction").val(data.funcion.name);
                        $("#descriptionfunction").val(data.funcion.description);
                    }
                });
            });
        }

        function editlote(){
            $('.btn-editlote').click(function(e){
                e.preventDefault();
                var id = $(this).val();

                $.ajax({
                    type:'get',
                    url: 'lotes/show',
                    data:{id:id},
                    success: function(data) {
                        $("#idLote").val(id);
                        $("#namelote").val(data.lote.name);
                        $("#descriptionlote").val(data.lote.description);
                    }
                });
            });
        }

        function editmanzana(){
            $('.btn-editmanzana').click(function(e){
                e.preventDefault();
                var id = $(this).val();

                $.ajax({
                    type:'get',
                    url: 'manzanas/show',
                    data:{id:id},
                    success: function(data) {
                        $("#idManzana").val(id);
                        $("#namemanzana").val(data.manzana.name);
                        $("#descriptionmanzana").val(data.manzana.description);
                    }
                });
            });
        }

        function editsector(){
            $('.btn-editsector').click(function(e){
                e.preventDefault();
                var id = $(this).val();

                $.ajax({
                    type:'get',
                    url: 'sectores/show',
                    data:{id:id},
                    success: function(data) {
                        $("#idSector").val(id);
                        $("#namesector").val(data.sector.name);
                        $("#descriptionsector").val(data.sector.description);
                    }
                });
            });
        }

        function editusuario(){
            $('.btn-edit-user').click(function(e){
                e.preventDefault();
                var id = $(this).val();

                $.ajax({
                    type:'get',
                    url: 'usuarios/show',
                    data:{id:id},
                    success: function(data) {
                        $("#idUsuario").val(id);
                        $("#idUsuarioPhoto").val(id);
                        $("#fullname").val(data.usuario.name);
                        $("#email1").val(data.usuario.email);
                        $("#email2").val(data.usuario.email2);
                        $("#phone1").val(data.usuario.phone1);
                        $("#phone2").val(data.usuario.phone2);
                        $("#phone3").val(data.usuario.phone3);
                        $("#officephone").val(data.usuario.officephone);
                        $("#movil1").val(data.usuario.phone1);
                        $("#movil2").val(data.usuario.phone2);

                        if(data.usuario.urlfoto == '-'){
                            $("#titlephoto").html('Subir nueva foto');
                        }else{
                            $("#titlephoto").html('Actualizar foto foto');
                        }
                    }
                });
            });
        }

        $('#addDir').click(function(e){
            e.preventDefault();
            $('.errorDir').text('');
            $.ajax({
                type: 'post',
                url: 'direcciones/store',
                data: {
                    '_token': $('input[name=_token]').val(),
                    'code': $('input[name=code]').val(),
                    'cvesae': $('input[name=cvesae]').val(),
                    'calle': $('input[name=calle]').val(),
                    'email': $('input[name=email]').val(),
                    'tipo': $('#tipo').val(),
                    'horario': $('input[name=horario]').val(),
                    'lote': $('#lote').val(),
                    'sector': $('#sector').val(),
                    'manzana': $('#manzana').val()
                },
                success: function(data) {

                    if(data.errors){
                        jQuery.each(data.errors, function(key, value){
                            $('.errorDir').append(value+'<br>');
                        });
                    }else{
                        alert(data.success);
                        location.reload(true);
                    }

                }
            });
        });

        $('#updateDir').click(function(e){
            e.preventDefault();
            $('.errorUpdateDir').text('');
            $.ajax({
                type: 'post',
                url: 'direcciones/update',
                data: {
                    '_token': $('input[name=_token]').val(),
                    'idDireccion': $('#idDireccion').val(),
                    'code': $('#code').val(),
                    'cvesae': $('#cvesae').val(),
                    'calle': $('#calle').val(),
                    'email': $('#email').val(),
                    'tipo': $('#tipou').val(),
                    'horario': $('#horario').val(),
                    'lote': $('#loteu').val(),
                    'sector': $('#sectoru').val(),
                    'manzana': $('#manzanau').val()
                },
                success: function(data) {
                    if(data.errors){
                        jQuery.each(data.errors, function(key, value){
                            $('.errorUpdateDir').append(value+'<br>');
                        });
                    }else{
                        alert(data.success);
                        location.reload(true);
                    }
                }
            });
        });

        $('#addCompania').click(function(e){
            e.preventDefault();
            $('.errorCompania').text('');
            $.ajax({
                type: 'post',
                url: 'companias/store',
                data: {
                    '_token': $('input[name=_token]').val(),
                    'namecompany': $('input[name=namecompany]').val(),
                    'callecompany': $('input[name=callecompany]').val(),
                    'telefono1compania': $('input[name=telefono1compania]').val(),
                    'telefono2compania': $('input[name=telefono2compania]').val(),
                    'emailcompania': $('input[name=emailcompania]').val()
                },
                success: function(data) {

                    if(data.errors){
                        jQuery.each(data.errors, function(key, value){
                            $('.errorCompania').append(value+'<br>');
                        });
                    }else{
                        alert(data.success);
                        location.reload(true);
                    }

                }
            });
        });

        $('#updateCompany').click(function(e){
            e.preventDefault();
            $('.errorUpdateCompany').text('');
            $.ajax({
                type: 'post',
                url: 'companias/update',
                data: {
                    '_token': $('input[name=_token]').val(),
                    'idCompania': $('#idCompania').val(),
                    'namecompany': $('#namecompany').val(),
                    'callecompany': $('#callecompany').val(),
                    'telefono1compania': $('#telefono1compania').val(),
                    'telefono2compania': $('#telefono2compania').val(),
                    'emailcompania': $('#emailcompania').val()
                },
                success: function(data) {
                    if(data.errors){
                        jQuery.each(data.errors, function(key, value){
                            $('.errorUpdatCompany').append(value+'<br>');
                        });
                    }else{
                        alert(data.success);
                        location.reload(true);
                    }
                }
            });
        });

        $('#addFuncion').click(function(e){
            e.preventDefault();
            $('.errorFuncion').text('');
            $.ajax({
                type: 'post',
                url: 'funciones/store',
                data: {
                    '_token': $('input[name=_token]').val(),
                    'namefuncion': $('input[name=namefuncion]').val(),
                    'descriptionfuncion': $('input[name=descriptionfuncion]').val()
                },
                success: function(data) {

                    if(data.errors){
                        jQuery.each(data.errors, function(key, value){
                            $('.errorFuncion').append(value+'<br>');
                        });
                    }else{
                        alert(data.success);
                        location.reload(true);
                    }

                }
            });
        });

        $('#updateFuncion').click(function(e){
            e.preventDefault();
            $('.errorUpdateFuncion').text('');
            $.ajax({
                type: 'post',
                url: 'funciones/update',
                data: {
                    '_token': $('input[name=_token]').val(),
                    'idFuncion': $('#idFuncion').val(),
                    'namefunction': $('#namefunction').val(),
                    'descriptionfunction': $('#descriptionfunction').val()
                },
                success: function(data) {
                    if(data.errors){
                        jQuery.each(data.errors, function(key, value){
                            $('.errorUpdateFuncion').append(value+'<br>');
                        });
                    }else{
                        alert(data.success);
                        location.reload(true);
                    }
                }
            });
        });

        $('#addLote').click(function(e){
            e.preventDefault();
            $('.errorLote').text('');
            $.ajax({
                type: 'post',
                url: 'lotes/store',
                data: {
                    '_token': $('input[name=_token]').val(),
                    'namelote': $('input[name=namelote]').val(),
                    'descriptionlote': $('input[name=descriptionlote]').val()
                },
                success: function(data) {

                    if(data.errors){
                        jQuery.each(data.errors, function(key, value){
                            $('.errorLote').append(value+'<br>');
                        });
                    }else{
                        alert(data.success);
                        location.reload(true);
                    }

                }
            });
        });

        $('#updateLote').click(function(e){
            e.preventDefault();
            $('.errorUpdateLote').text('');
            $.ajax({
                type: 'post',
                url: 'lotes/update',
                data: {
                    '_token': $('input[name=_token]').val(),
                    'idLote': $('#idLote').val(),
                    'namelote': $('#namelote').val(),
                    'descriptionlote': $('#descriptionlote').val()
                },
                success: function(data) {
                    if(data.errors){
                        jQuery.each(data.errors, function(key, value){
                            $('.errorUpdateLote').append(value+'<br>');
                        });
                    }else{
                        alert(data.success);
                        location.reload(true);
                    }
                }
            });
        });

        $('#addManzana').click(function(e){
            e.preventDefault();
            $('.errorManzana').text('');
            $.ajax({
                type: 'post',
                url: 'manzanas/store',
                data: {
                    '_token': $('input[name=_token]').val(),
                    'namemanzana': $('input[name=namemanzana]').val(),
                    'descriptionmanzana': $('input[name=descriptionmanzana]').val()
                },
                success: function(data) {

                    if(data.errors){
                        jQuery.each(data.errors, function(key, value){
                            $('.errorManzana').append(value+'<br>');
                        });
                    }else{
                        alert(data.success);
                        location.reload(true);
                    }

                }
            });
        });

        $('#updateManzana').click(function(e){
            e.preventDefault();
            $('.errorUpdateManzana').text('');
            $.ajax({
                type: 'post',
                url: 'manzanas/update',
                data: {
                    '_token': $('input[name=_token]').val(),
                    'idManzana': $('#idManzana').val(),
                    'namemanzana': $('#namemanzana').val(),
                    'descriptionmanzana': $('#descriptionmanzana').val()
                },
                success: function(data) {
                    if(data.errors){
                        jQuery.each(data.errors, function(key, value){
                            $('.errorUpdateManzana').append(value+'<br>');
                        });
                    }else{
                        alert(data.success);
                        location.reload(true);
                    }
                }
            });
        });

        $('#addSector').click(function(e){
            e.preventDefault();
            $('.errorSector').text('');
            $.ajax({
                type: 'post',
                url: 'sectores/store',
                data: {
                    '_token': $('input[name=_token]').val(),
                    'namesector': $('input[name=namesector]').val(),
                    'descriptionsector': $('input[name=descriptionsector]').val()
                },
                success: function(data) {

                    if(data.errors){
                        jQuery.each(data.errors, function(key, value){
                            $('.errorSector').append(value+'<br>');
                        });
                    }else{
                        alert(data.success);
                        location.reload(true);
                    }

                }
            });
        });

        $('#updateSector').click(function(e){
            e.preventDefault();
            $('.errorUpdateSector').text('');
            $.ajax({
                type: 'post',
                url: 'sectores/update',
                data: {
                    '_token': $('input[name=_token]').val(),
                    'idSector': $('#idSector').val(),
                    'namesector': $('#namesector').val(),
                    'descriptionsector': $('#descriptionsector').val()
                },
                success: function(data) {
                    if(data.errors){
                        jQuery.each(data.errors, function(key, value){
                            $('.errorUpdateSector').append(value+'<br>');
                        });
                    }else{
                        alert(data.success);
                        location.reload(true);
                    }
                }
            });
        });

        $('#addUser').click(function(e){
            e.preventDefault();
            $('.errorUser').text('');
            $.ajax({
                type: 'post',
                url: 'usuarios/store',
                data: {
                    '_token': $('input[name=_token]').val(),
                    'fullname': $('input[name=fullname]').val(),
                    'email1': $('input[name=email1]').val(),
                    'email2': $('input[name=email2]').val(),
                    'phone1': $('input[name=phone1]').val(),
                    'phone2': $('input[name=phone2]').val(),
                    'phone3': $('input[name=phone3]').val(),
                    'officephone': $('input[name=officephone]').val(),
                    'movil1': $('input[name=movil1]').val(),
                    'movil2': $('input[name=movil2]').val(),
                    'company': $('#company').val(),
                    'funcion': $('#funcion').val()
                },
                success: function(data) {

                    if(data.errors){
                        jQuery.each(data.errors, function(key, value){
                            $('.errorUser').append(value+'<br>');
                        });
                    }else{
                        alert(data.success);
                        location.reload(true);
                    }

                }
            });
        });

        $('#updateUser').click(function(e){
            e.preventDefault();
            $('.errorUpdateUser').text('');
            $.ajax({
                type: 'post',
                url: 'usuarios/update',
                data: {
                    '_token': $('input[name=_token]').val(),
                    'idUsuario': $('#idUsuario').val(),
                    'fullname': $('#fullname').val(),
                    'email1': $('#email1').val(),
                    'email2': $('#email2').val(),
                    'phone1': $('#phone1').val(),
                    'phone2': $('#phone2').val(),
                    'phone3': $('#phone3').val(),
                    'officephone': $('#officephone').val(),
                    'movil1': $('#movil1').val(),
                    'movil2': $('#movil2').val(),
                    'companyu': $('#companyu').val(),
                    'funcionu': $('#funcionu').val()
                },
                success: function(data) {
                    if(data.errors){
                        jQuery.each(data.errors, function(key, value){
                            $('.errorUpdateUser').append(value+'<br>');
                        });
                    }else{
                        alert(data.success);
                        location.reload(true);
                    }
                }
            });
        });

        $('#updateUserPhoto').click(function(e){
            e.preventDefault();
            $('.errorUpdatePhoto').text('');
            $.ajax({
                type: 'post',
                url: 'usuarios/updatephoto',
                data: {
                    '_token': $('input[name=_token]').val(),
                    'idUsuario': $('#idUsuario').val(),
                    'fullname': $('#fullname').val(),
                    'email1': $('#email1').val(),
                    'email2': $('#email2').val(),
                    'phone1': $('#phone1').val(),
                    'phone2': $('#phone2').val(),
                    'phone3': $('#phone3').val(),
                    'officephone': $('#officephone').val(),
                    'movil1': $('#movil1').val(),
                    'movil2': $('#movil2').val(),
                    'companyu': $('#companyu').val(),
                    'funcionu': $('#funcionu').val()
                },
                success: function(data) {
                    if(data.errors){
                        jQuery.each(data.errors, function(key, value){
                            $('.errorUpdateUser').append(value+'<br>');
                        });
                    }else{
                        alert(data.success);
                        location.reload(true);
                    }
                }
            });
        });

        $('#enviarFoto').click(function(e){
            $("#formphoto").submit();
        });
    });

</script>

</body>

</html>