

<?php $__env->startSection('template_title'); ?>
    Generar Boletas
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <?php if ($__env->exists('partials.errors')) echo $__env->make('partials.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Generar boletas</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="<?php echo e(route('generar_boletas')); ?>"  role="form" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <?php echo e(Form::label('mes')); ?>

                                    <select class="form-select form-select-sm" name="mes" id="mes">
                                        <option value="Enero">Enero</option>
                                        <option value="Febrero">Febrero</option>
                                        <option value="Marzo">Marzo</option>
                                        <option value="Abril">Abril</option>
                                        <option value="Mayo">Mayo</option>
                                        <option value="Junio">Junio</option>
                                        <option value="Julio">Julio</option>
                                        <option value="Agosto">Agosto</option>
                                        <option value="Septiembre">Septiembre</option>
                                        <option value="Octurbre">Octurbre</option>
                                        <option value="Noviembre">Noviembre</option>
                                        <option value="Diciembre">Diciembre</option>
                                    </select>
                                </div>
                            </div>
                             <div class="col-md-2">
                                <div class="form-group">
                                    <?php echo e(Form::label('Periodo')); ?>

                                    <select class="form-select form-select-sm" name="anio" id="anio">
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                        <option value="2025">2025</option>
                                        <option value="2026">2026</option>
                                        <option value="2027">2027</option>
                                        <option value="2028">2028</option>
                                        <option value="2029">2029</option>
                                        <option value="2030">2030</option>
                                    </select>
                                </div>
                            </div>
                            <div class="box-footer mt-2">
                                <button type="submit" class="btn btn-warning" onclick="this.disabled=true;this.value='Enviando...';this.form.submit();"> Generar Boletas</button>
                                <a href="<?php echo e(route('menu_sueldos')); ?>" class="btn btn-success"> <i class="bi bi-house-fill"></i> Menu de opciones</a>

                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\constructora\constructora\resources\views/planilla/generar_boletas.blade.php ENDPATH**/ ?>