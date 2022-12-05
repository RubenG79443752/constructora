<?php $__env->startSection('template_title'); ?>
    Permisos
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <h3 class="text-danger">Usuario: <?php echo e($accesos[0]->user->name); ?></h3>

                            </span>
                            <div class="float-right">
                                <a href="<?php echo e(route('users.index')); ?>" class="btn btn-info btn-sm float-right"  data-placement="left">
                                    <i class="bi bi-arrow-return-left"></i> <?php echo e(__('Retornar')); ?>

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
										<th>Opcion</th>
                                        <th>Estado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $accesos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $acceso): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e(++$i); ?></td>
											<td><?php echo e($acceso->opcion); ?></td>
                                            <td><?php echo ($acceso->estado == "Habilitado")? '<span class="badge bg-primary">Habilitado</span>':'<span class="badge bg-danger">Deshabilitado</span>'; ?></td>
                                            <td>
                                                <a class="btn btn-sm btn-success" href="<?php echo e(route('accesos.edit',$acceso->id)); ?>"><i class="bi bi-pencil-square"></i> Editar permiso</a>
                                                <form action="<?php echo e(route('accesos.destroy',$acceso->id)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('DELETE'); ?>
<button type="submit" class="btn btn-warning btn-sm"><i class="bi bi-star-half"></i> Estado</button>
<?php echo e(Form::hidden('id', $acceso->user_id, ['class' => 'form-control'])); ?>

</form>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <?php echo $accesos->links(); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\constructora\resources\views/acceso/index.blade.php ENDPATH**/ ?>