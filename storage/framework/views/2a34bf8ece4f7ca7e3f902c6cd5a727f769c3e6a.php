

<?php $__env->startSection('template_title'); ?>
    Formularios 110
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <?php echo e(__('Formularios 110')); ?>

                            </span>

                             <div class="float-right">
                                <a href="<?php echo e(route('form110s.create')); ?>" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  <?php echo e(__('Subir formulario 110')); ?>

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

										<th>Personal</th>
										<th>Descripcion</th>
										<th>Mes</th>
										<th>Periodo</th>
										<th>Monto a Favor</th>
										<th>Formulario 110</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $form110s; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $form110): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e(++$i); ?></td>

											<td><?php echo e($form110->personal->nombre.' '.$form110->personal->primer_apellido.' '.$form110->personal->segundo_apellido); ?></td>
											<td><?php echo e($form110->descripcion); ?></td>
											<td><?php echo e($form110->mes); ?></td>
											<td><?php echo e($form110->periodo); ?></td>
											<td><?php echo e($form110->monto_favor); ?></td>
											<td><a href="<?php echo e(asset('storage/'.$form110->form110)); ?>" class="btn btn-warning btn-sm" target="_blank">ver PDF</a></td>

                                            <td>
                                                <form action="<?php echo e(route('form110s.destroy',$form110->id)); ?>" method="POST">
                                                    <a class="btn btn-sm btn-success" href="<?php echo e(route('form110s.edit',$form110->id)); ?>"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <?php echo $form110s->links(); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Nueva carpeta (2)\constructora\resources\views/form110/index.blade.php ENDPATH**/ ?>