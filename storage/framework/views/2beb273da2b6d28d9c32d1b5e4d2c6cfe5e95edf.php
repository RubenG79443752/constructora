<?php $__env->startSection('template_title'); ?>
    Lugar de trabajo
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <?php echo e(__('Lugartrabajo')); ?>

                            </span>

                             <div class="float-right">
                                <a href="<?php echo e(route('lugartrabajos.create')); ?>" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  <?php echo e(__('Crear nuevo lugar de trabajo')); ?>

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

										<th>Descripcion</th>
                                        <th>Latitud</th>
										<th>Longitud</th>
										<th>Radio</th>
										<th>Estado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $lugartrabajos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lugartrabajo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e(++$i); ?></td>

											<td><?php echo e($lugartrabajo->descripcion); ?></td>
                                            <td><?php echo e($lugartrabajo->latitud); ?></td>
											<td><?php echo e($lugartrabajo->logitud); ?></td>
											<td><?php echo e($lugartrabajo->radio); ?></td>
											<td><?php echo e($lugartrabajo->estado); ?></td>

                                            <td>
                                                <form action="<?php echo e(route('lugartrabajos.destroy',$lugartrabajo->id)); ?>" method="POST">
                                                    <a class="btn btn-sm btn-success" href="<?php echo e(route('lugartrabajos.edit',$lugartrabajo->id)); ?>"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                <?php echo $lugartrabajos->links(); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\constructora\resources\views/lugartrabajo/index.blade.php ENDPATH**/ ?>