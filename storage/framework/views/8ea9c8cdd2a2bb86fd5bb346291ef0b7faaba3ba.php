

<?php $__env->startSection('template_title'); ?>
    Personal
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <?php echo e(__('Personal')); ?>

                            </span>

                             <div class="float-right">
                                <a href="<?php echo e(route('personals.create')); ?>" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  <?php echo e(__('Crear nuevo personal')); ?>

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

										<th>Doc Identidad</th>
										<th>Nombre</th>
										<th>Primer Apellido</th>
										<th>Segundo Apellido</th>
										<th>Fecha Nacimiento</th>
										<th>Sexo</th>
                                        <th>Domicilio</th>
										<th>Pais de nacionalidad</th>
										<th>Cargo</th>
                                        <th>Estado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $personals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $personal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e(++$i); ?></td>

											<td><?php echo e($personal->doc_identidad); ?></td>
											<td><?php echo e($personal->nombre); ?></td>
											<td><?php echo e($personal->primer_apellido); ?></td>
											<td><?php echo e($personal->segundo_apellido); ?></td>
											<td><?php echo e($personal->fecha_nacimiento); ?></td>
                                            <td><?php echo e($personal->sexo); ?></td>
                                            <td><?php echo e($personal->domicilio); ?></td>
											<td><?php echo e($personal->pai->pais); ?></td>
											<td><?php echo e($personal->cargo->cargo); ?></td>
                                            <td><?php echo e($personal->estado); ?></td>

                                            <td align="right">
                                                <form action="<?php echo e(route('personals.destroy',$personal->id)); ?>" method="POST">
                                                    <a class="btn btn-sm btn-success" title="Editar datos" href="<?php echo e(route('personals.edit',$personal->id)); ?>"><i class="bi bi-eraser-fill"></i></a>
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="submit" class="btn btn-danger btn-sm" title="Eliminar datos de personal"><i class="bi bi-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <?php echo $personals->links(); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\constructora DEF BO\resources\views/personal/index.blade.php ENDPATH**/ ?>