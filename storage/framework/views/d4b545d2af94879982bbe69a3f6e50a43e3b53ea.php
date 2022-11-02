<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo e(asset('logo-constructora.jpg')); ?>">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Constructora')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment-with-locales.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light" style="background-color: #e3f2fd;">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    <?php echo e(config('app.name', 'constructora')); ?>

                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <img src="<?php echo e(asset('logo-constructora.jpg')); ?>" alt="constructora" width="40">
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="btn-group" role="group" aria-label="Grupo de botones">
                    <?php if(auth()->guard()->guest()): ?>
                        <a class="btn btn-primary active" href="<?php echo e(url('/')); ?>"><?php echo e(__('Inicio')); ?></a>
                    <?php else: ?>
                        <a class="btn btn-primary active" href="<?php echo e(url('/')); ?>"><?php echo e(__('Inicio')); ?></a>

                        <?php if(Auth::user()->rol==="Administrador"): ?>
                        <div class="btn-group" role="group">
                            <button id="btnGroupDrop" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Configuraciones
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="btnGroupDrop">
                                <li><a class="dropdown-item" href="<?php echo e(route('variables.index')); ?>"><i class="bi bi-badge-vr-fill"></i> <?php echo e(__('Configuracion (Salario mínimo nacional) ')); ?></a></li>
                                <li><a class="dropdown-item" href="<?php echo e(route('pais.index')); ?>"><i class="bi bi-flag"></i> <?php echo e(__('Pais de nacionalidad')); ?></a></li>

                                <li><a class="dropdown-item" href="<?php echo e(route('cargos.index')); ?>"><i class="bi bi-diagram-3-fill"></i> <?php echo e(__('Cargos')); ?></a></li>
                                <li><a class="dropdown-item" href="<?php echo e(route('empresas.index')); ?>"><i class="bi bi-building"></i> <?php echo e(__('Datos de empresa')); ?></a></li>
                            </ul>
                        </div>
                        <div class="btn-group" role="group">
                            <button id="btnGroupDrop" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Administrador
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="btnGroupDrop">
                                <li><a class="dropdown-item" href="<?php echo e(route('users.index')); ?>"><i class="bi bi-person-bounding-box"></i> <?php echo e(__('Modulo usuarios')); ?></a></li>
                                <li><hr></li>
                                <li><a class="dropdown-item" href="<?php echo e(route('personals.index')); ?>"><i class="bi bi-card-list"></i> <?php echo e(__('Modulo de registro de personal')); ?></a></li>
                                <li><a class="dropdown-item" href="<?php echo e(route('contratacions.index')); ?>"><i class="bi bi-person-rolodex"></i> <?php echo e(__('Modulo contrataciones')); ?></a></li>
                                <li><hr></li>
                                <li><a class="dropdown-item" href="<?php echo e(route('horarios.index')); ?>"><i class="bi bi-clock-history"></i> <?php echo e(__('Horarios')); ?></a></li>
                                <li><a class="dropdown-item" href="<?php echo e(route('lugartrabajos.index')); ?>"><i class="bi bi-geo-alt-fill"></i> <?php echo e(__('Registrar ubicacion de trabajo')); ?></a></li>
                                <li><hr></li>

                                <li><a class="dropdown-item" href="<?php echo e(route('permisos.index')); ?>"><i class="bi bi-exclamation-diamond-fill"></i> <?php echo e(__('Permisos')); ?></a></li>
                                <li><a class="dropdown-item" href="<?php echo e(route('menu_asistencia')); ?>"><i class="bi bi-clipboard-data"></i> <?php echo e(__('Modulo de control de asistencia')); ?></a></li>
                                <li><hr></li>
                                <li><a class="dropdown-item" href="<?php echo e(route('menu_sueldos')); ?>"><i class="bi bi-file-spreadsheet-fill"></i> <?php echo e(__('Modulo de sueldos y salarios')); ?></a></li>
                            </ul>
                        </div>
                        <div class="btn-group" role="group">
                            <button id="btnGroupDrop" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Trabajador
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="btnGroupDrop">
                                <li><a class="dropdown-item" href="<?php echo e(route('asistencias.create')); ?>"><i class="bi bi-fingerprint"></i> <?php echo e(__('Asistencia (GPS)')); ?></a></li>
                                <li><a class="dropdown-item" href="<?php echo e(route('index_asistenciaAdmin')); ?>"><i class="bi bi-display"></i> <?php echo e(__('Asistencia manual')); ?></a></li>
                                <li><a class="dropdown-item" href="<?php echo e(route('form110s.index')); ?>"><i class="bi bi-file-earmark-arrow-up"></i> <?php echo e(__('Modulo registro facturas Form. 110')); ?></a></li>
                            </ul>
                        </div>
                        <a class="btn btn-primary" href="<?php echo e(url('lista_asistenciaOff')); ?>"><i class="bi bi-fingerprint"></i> <?php echo e(__('Asistencia Offline')); ?></a>
                        <?php else: ?>
                        <div class="btn-group" role="group">
                            <button id="btnGroupDrop" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Trabajador
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="btnGroupDrop">
                                <li><a class="dropdown-item" href="<?php echo e(route('asistencias.create')); ?>"><i class="bi bi-fingerprint"></i> <?php echo e(__('Modulo web control de asistencia')); ?></a></li>
                                <li><a class="dropdown-item" href="<?php echo e(route('form110s.index')); ?>"><i class="bi bi-file-earmark-arrow-up"></i> <?php echo e(__('Modulo registro facturas Form. 110')); ?></a></li>
                            </ul>
                        </div>
                        <?php endif; ?>
                    <?php endif; ?>
                    </div>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <?php if(Route::has('login')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Ingresar')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="btn btn-light dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?>: En linea
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(url('password_user')); ?>"><i class="bi bi-file-lock2"></i> <?php echo e(__('Cambiar Password')); ?></a>
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="bi bi-box-arrow-right"></i>
                                        <?php echo e(__('Cerrar session')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-1">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\constructora\resources\views/layouts/app.blade.php ENDPATH**/ ?>