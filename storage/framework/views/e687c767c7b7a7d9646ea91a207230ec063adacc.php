<?php $__env->startSection('template_title'); ?>
    Generar Nomina de Asistencia
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <?php if ($__env->exists('partials.errors')) echo $__env->make('partials.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Generar resumen de asistencia</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="<?php echo e(route('nomina')); ?>"  role="form" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <?php echo e(Form::label('mes')); ?>

                                    <select class="form-select form-select-sm" name="mes" id="mes">
                                        <?php echo $option_mes; ?>

                                    </select>
                                </div>
                            </div>
                             <div class="col-md-2">
                                <div class="form-group">
                                    <?php echo e(Form::label('Periodo')); ?>

                                    <select class="form-select form-select-sm" name="anio" id="anio">
                                        <?php echo $option_anio; ?>

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <?php echo Form::label('Personal'); ?>

                                    <?php echo Form::select('personal_id',$personal,(isset($personal_id))? $personal_id:null, ['class' => 'form-select form-select-sm','placeholder' => '--Todo--']); ?>

                                </div>
                            </div>
                            <div class="box-footer mt-2">
                                <button type="submit" class="btn btn-info" onclick="this.disabled=true;this.value='Enviando...';this.form.submit();"> Generar resumen de asistencia</button>
                                <a href="<?php echo e(route('menu_asistencia')); ?>" class="btn btn-danger"> <i class="bi bi-house-fill"></i> Menu de opciones</a>

                            </div>

                        </form>

                    </div>
                    <div class="card-footer text-muted">
                        <?php echo $tabla; ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\constructora\resources\views/asistencia/nomina.blade.php ENDPATH**/ ?>