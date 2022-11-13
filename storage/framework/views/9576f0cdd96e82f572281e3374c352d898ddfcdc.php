

<?php $__env->startSection('template_title'); ?>
    Asistencia
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <?php if ($__env->exists('partials.errors')) echo $__env->make('partials.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Asistencia</span>
                    </div>
                    <div class="card-body">
                        <?php if($message = Session::get('success')): ?>
                            <div class="alert alert-success">
                                <p><?php echo e($message); ?></p>
                            </div>
                        <?php endif; ?>
                        <?php if($message = Session::get('danger')): ?>
                            <div class="alert alert-danger">
                                <p><?php echo e($message); ?></p>
                            </div>
                        <?php endif; ?>
                            <div class="box box-info padding-1">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-4">

                                        </div>
                                        <div class="col-md-4">
                                            <div class="card bg-danger text-white mb-3">
                                            <div class="card-header">ASISTENCIA</div>
                                            <div class="card-body text-center">
                                                <h5 class="card-title">Fecha y hora actual</h5>
                                                <p class="card-text fs-1" id="resultado"></p>
                                            </div>
                                            </div>
                                            <div class="box-footer mt-2 text-center">
                                                <a class="btn btn-primary" href="#" data-bs-toggle="modal" data-bs-target="#entradaModal" title="Marcar entrada"><i class="bi bi-alarm-fill"></i> Marcar Entrada</a>
                                                <a class="btn btn-success" href="#" data-bs-toggle="modal" data-bs-target="#salidaModal" title="Marcar salida"><i class="bi bi-door-open-fill"></i> Marcar Salida</a>

                                            </div>
                                        </div>
                                        <div class="col-md-4">

                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- form entrada -->
    <div class="modal fade" id="entradaModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="entradaModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="entradaModalLabel">Marcar asistencia - Entrada</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <form method="POST" action="<?php echo e(route('asistenciaAdmin')); ?>"  role="form" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>

                            <h1 class="text-danger">&#9312; Entrada</h1>
                            <div class="form-group">
                                <?php echo Form::label('Personal'); ?>

                                <?php echo Form::select('personal_id[]',$personal,(isset($asistencia->personal_id))? $asistencia->personal_id:null, ['multiple', 'size'=>'4','class' => 'form-select form-select','id'=>'personal_id',($accion=='insertar')? '':'disabled']); ?>

                            </div>
                            <div class="form-group">
                                <?php echo e(Form::label('lugar_de_trabajo')); ?>

                                <?php echo Form::select('lugartrabajo_id',$lugartrabajo,($asistencia->lugartrabajo_id)? $asistencia->lugartrabajo_id:null, ['class' => 'form-select','id'=>'lugartrabajo_id',($accion=='insertar')? '':'disabled']); ?>

                            </div>
                            <div class="form-group">
                                <?php echo e(Form::label('fecha_asitencia')); ?>

                                <?php echo e(Form::date('fecha_asitencia', ($asistencia->fecha_asitencia)? $asistencia->fecha_asitencia:date('Y-m-d'), [($accion=='insertar')? 'readonly':'disabled','class' => 'form-control' . ($errors->has('fecha_asitencia') ? ' is-invalid' : ''), 'placeholder' => '...'])); ?>

                                <?php echo $errors->first('fecha_asitencia', '<div class="invalid-feedback">:message</div>'); ?>

                            </div>
                            <div class="form-group">
                                <?php echo e(Form::label('hora_entrada')); ?>

                                <?php echo e(Form::time('hora_entrada', $asistencia->hora_entrada, ['id'=>'hora_entrada','class' => 'form-control' . ($errors->has('hora_entrada') ? ' is-invalid' : ''), 'placeholder' => 'Hora Entrada'])); ?>

                                <?php echo $errors->first('hora_entrada', '<div class="invalid-feedback">:message</div>'); ?>

                            </div>
                            <div class="form-group">
                                <?php echo e(Form::label('lat_entrada')); ?>

                                <?php echo e(Form::text('lat_entrada', $asistencia->lat_salida, ['id'=>'lat_entrada','class' => 'form-control' . ($errors->has('lat_entrada') ? ' is-invalid' : ''), 'placeholder' => 'Lat Salida'])); ?>

                                <?php echo $errors->first('lat_entrada', '<div class="invalid-feedback">:message</div>'); ?>

                            </div>
                            <div class="form-group">
                                <?php echo e(Form::label('long_entrada')); ?>

                                <?php echo e(Form::text('long_entrada', $asistencia->long_salida, ['id'=>'long_entrada','class' => 'form-control' . ($errors->has('long_entrada') ? ' is-invalid' : ''), 'placeholder' => 'Long Salida'])); ?>

                                <?php echo $errors->first('long_entrada', '<div class="invalid-feedback">:message</div>'); ?>

                            </div>
                          
                            <div class="form-group">
                                <?php echo e(Form::hidden('estado_entrada', ($asistencia->estado_entrada)? $asistencia->estado_entrada:'Sin_marcar', [($accion=='insertar')? 'readonly':'disabled','class' => 'form-control bg-danger text-white' . ($errors->has('estado_entrada') ? ' is-invalid' : ''), 'placeholder' => '...'])); ?>

                                <?php echo $errors->first('estado_entrada', '<div class="invalid-feedback">:message</div>'); ?>

                            </div>
                            <div class="col-md-12 mt-3">
                                <button type="submit" class="btn btn-primary" onclick="this.disabled=true;this.value='Enviando...';this.form.submit();"> Marcar entrada</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <!-- form salida -->
    <div class="modal fade" id="salidaModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="salidaModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="salidaModalLabel">Marcar salida del personal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <form method="POST" action="<?php echo e(route('edit_asistenciaAdmin')); ?>"  role="form" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <h1 class="text-danger">&#9313; Salida</h1>
                            <div class="form-group">
                                <?php echo Form::label('Personal'); ?>

                                <?php echo Form::select('personal_id_salida[]',$personal_salida,null, [ 'size'=>'8','multiple','class' => 'form-select form-select']); ?>

                            </div>
                            <div class="form-group">
                                <?php echo e(Form::label('hora_salida')); ?>

                                <?php echo e(Form::time('hora_salida', $asistencia->hora_salida, ['id'=>'hora_salida','class' => 'form-control' . ($errors->has('hora_salida') ? ' is-invalid' : ''), 'placeholder' => 'Hora Salida'])); ?>

                                <?php echo $errors->first('hora_salida', '<div class="invalid-feedback">:message</div>'); ?>

                            </div>
                            <div class="form-group">
                                <?php echo e(Form::label('lat_salida')); ?>

                                <?php echo e(Form::text('lat_salida', $asistencia->lat_salida, ['id'=>'lat_salida','class' => 'form-control' . ($errors->has('lat_salida') ? ' is-invalid' : ''), 'placeholder' => 'Lat Salida'])); ?>

                                <?php echo $errors->first('lat_salida', '<div class="invalid-feedback">:message</div>'); ?>

                            </div>
                            <div class="form-group">
                                <?php echo e(Form::label('long_salida')); ?>

                                <?php echo e(Form::text('long_salida', $asistencia->long_salida, ['id'=>'long_salida','class' => 'form-control' . ($errors->has('long_salida') ? ' is-invalid' : ''), 'placeholder' => 'Long Salida'])); ?>

                                <?php echo $errors->first('long_salida', '<div class="invalid-feedback">:message</div>'); ?>

                            </div>
                            <div class="col-md-12 mt-3">
                                <button type="submit" class="btn btn-success" onclick="this.disabled=true;this.value='Enviando...';this.form.submit();"> Marcar salida</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <script>
        (function(){
            timedUpdate();
        })();

        function timedUpdate () {
            moment.locale('es');
            let hora = moment().format('MMMM Do YYYY, HH:mm:ss');
            let hora_corta = moment().format('HH:mm');
            document.getElementById("resultado").innerText = hora;
            setTimeout(timedUpdate, 1000);
        }
        </script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\constructora\resources\views/asistencia/asistencia_admin.blade.php ENDPATH**/ ?>