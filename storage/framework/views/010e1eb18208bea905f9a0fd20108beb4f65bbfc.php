

<?php $__env->startSection('template_title'); ?>
    Planillas
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <?php echo e(__('Planillas')); ?>

                            </span>

                             <div class="float-right">
                                <a href="<?php echo e(route('planillas.create')); ?>" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  <?php echo e(__('Crear registro a planilla')); ?>

                                </a>
                                <a href="<?php echo e(url('menu_sueldos')); ?>" class="btn btn-success btn-sm float-right"  data-placement="left">
                                    <i class="bi bi-house-fill"></i> <?php echo e(__('Menu de opciones')); ?>

                                  </a>
                              </div>
                        </div>
                    </div>
                    <?php if($message = Session::get('success')): ?>
                        <div class="alert alert-success">
                            <p><?php echo e($message); ?></p>
                        </div>
                    <?php endif; ?>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

                                        <th>Empleado</th>
										<th>Mes</th>
										<th>Anio</th>
										<th>Horas Pagadas</th>
										<th>Dias Pagados</th>
										<th>Haber Basico</th>
										<th>Bono Antiguedad</th>
										<th>Trabajo Extra</th>
										<th>Total Ganado</th>
										<th>Afps</th>
										<th>Rc Iva</th>
										<th>Otros Descuentos</th>
										<th>Total Descuentos</th>
										<th>Liquido Pagable</th>
										<th>Estado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $planillas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $planilla): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e(++$i); ?></td>

                                            <td><?php echo e($planilla->personal->nombre.' '.$planilla->personal->primer_apellido.' '.$planilla->personal->segundo_apellido); ?></td>
											<td><?php echo e($planilla->mes); ?></td>
											<td><?php echo e($planilla->anio); ?></td>
											<td><?php echo e($planilla->horas_pagadas); ?></td>
											<td><?php echo e($planilla->dias_pagados); ?></td>
											<td><?php echo e($planilla->haber_basico); ?></td>
											<td><?php echo e($planilla->bono_antiguedad); ?></td>
											<td><?php echo e($planilla->trabajo_extra_nocturno); ?></td>
											<td><?php echo e($planilla->total_ganado); ?></td>
											<td><?php echo e($planilla->afps); ?></td>
											<td><?php echo e($planilla->rc_iva); ?></td>
											<td><?php echo e($planilla->otros_descuentos); ?></td>
											<td><?php echo e($planilla->total_descuentos); ?></td>
											<td><?php echo e($planilla->liquido_pagable); ?></td>
											<td><?php echo e($planilla->estado); ?></td>

                                            <td>
                                                <form action="<?php echo e(route('planillas.destroy',$planilla->id)); ?>" method="POST">
                                                    <a class="btn btn-sm btn-warning" href="<?php echo e(route('planillas.edit',$planilla->id)); ?>" title="Actualizar registro"><i class="bi bi-pen-fill"></i></a>
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="submit" class="btn btn-danger btn-sm" title="Eliminar registro"><i class="bi bi-trash3-fill"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <?php echo $planillas->links(); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\constructora\resources\views/planilla/index.blade.php ENDPATH**/ ?>