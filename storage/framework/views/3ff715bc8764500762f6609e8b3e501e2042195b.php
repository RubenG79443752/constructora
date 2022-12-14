

<?php $__env->startSection('template_title'); ?>
    Crear Planilla
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <?php if ($__env->exists('partials.errors')) echo $__env->make('partials.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear Planilla</span>
                    </div>
                    <div class="card-body">

                        <div class="row row-cols-1 row-cols-md-3 g-4">
                            <div class="col">
                              <div class="card h-100">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                      <img src="<?php echo e(asset('planilla.png')); ?>" class="card-img-top" alt="Registrar empleado a planilla" style="width:100px;">
                                    </div>
                                  <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Registro a planilla</h5>
                                        <p class="card-text">Contemplando bono antiguedad, AFP, RC-IVA, Otros despuentos, etc.</p>
                                        <a href="<?php echo e(route('planillas.index')); ?>" class="btn btn-info"><i class="bi bi-arrow-up-left-square-fill"></i> Ingresar</a>
                                      </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col">
                              <div class="card h-100">
                                <div class="row g-0">
                                  <div class="col-md-4">
                                    <img src="<?php echo e(asset('lista.png')); ?>" class="card-img-top" alt="Generar planilla de sueldos" style="width:100px;">
                                  </div>
                                  <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Generar planilla de sueldos y salarios</h5>
                                        <p class="card-text">Generar planilla, documento que muestra retenciones y beneficios del trabajador </p>
                                        <a href="<?php echo e(url('generar_planilla')); ?>" class="btn btn-info"><i class="bi bi-arrow-up-left-square-fill"></i> Ingresar</a>
                                      </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col">
                              <div class="card h-100">
                                  <div class="row g-0">
                                    <div class="col-md-4">
                                      <img src="<?php echo e(asset('boletas.png')); ?>" class="card-img-top" alt="Generar boletas de pago" style="width:100px;">
                                    </div>
                                    <div class="col-md-8">
                                      <div class="card-body">
                                        <h5 class="card-title">Generar boletas de pago</h5>
                                        <p class="card-text">Generar boletas de pago, documento que avala el pago de las remuneraciones de cada trabajador</p>
                                      </div>
                                      <a href="<?php echo e(url('boletas')); ?>" class="btn btn-info"><i class="bi bi-arrow-up-left-square-fill"></i> Ingresar</a>
                                    </div>
                                  </div>
                              </div>
                          </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\constructora coin error\resources\views/planilla/menu.blade.php ENDPATH**/ ?>