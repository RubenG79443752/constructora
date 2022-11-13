

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
                                <?php echo e(__('Permiso')); ?>

                            </span>

                             <div class="float-right">
                                <a href="<?php echo e(route('permisos.create')); ?>" class="btn btn-warning float-right"  data-placement="left">
                                    <i class="bi bi-person-badge-fill"></i> <?php echo e(__('Crear Permisos')); ?>

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
                                        <th>Justificativo</th>
										<th>Tipo Permiso</th>
										<th>Descripcion</th>
										<th>Desde Fecha</th>
										<th>Hasta Fecha</th>
										<th>Horas</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $permisos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permiso): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e(++$i); ?></td>

											<td><?php echo e($permiso->personal->nombre.' '.$permiso->personal->primer_apellido.' '.$permiso->personal->segundo_apellido); ?></td>
                                            <td><a href="<?php echo e(asset('storage/'.$permiso->justificativo)); ?>" class="btn btn-warning btn-sm" target="_blank">ver PDF</a></td>
											<td><?php echo e($permiso->tipo_permiso); ?></td>
											<td><?php echo e($permiso->descripcion); ?></td>
											<td><?php echo e($permiso->desde_fecha); ?></td>
											<td><?php echo e($permiso->hasta_fecha); ?></td>
											<td><?php echo e($permiso->horas); ?></td>

                                            <td>
                                                <form action="<?php echo e(route('permisos.destroy',$permiso->id)); ?>" method="POST">
                                                    <a class="btn btn-sm btn-success" href="<?php echo e(route('permisos.edit',$permiso->id)); ?>"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                <?php echo $permisos->links(); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\constructora\resources\views/permiso/index.blade.php ENDPATH**/ ?>