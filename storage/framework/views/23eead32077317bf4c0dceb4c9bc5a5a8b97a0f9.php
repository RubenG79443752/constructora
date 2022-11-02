<?php $__env->startSection('template_title'); ?>
    Contratacion
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <?php echo e(__('Contratacion')); ?>

                            </span>

                             <div class="float-right">
                                <a href="<?php echo e(route('contratacions.create')); ?>" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  <?php echo e(__('Crear nuevo contrato')); ?>

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
										<th>Contrato</th>
                                        <th>Ref. de contrato</th>
										<th>Fecha Ingreso</th>
										<th>Sueldo Inicial (Bs.)</th>
										<th>Garantia</th>
										<th>Empresa</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $contratacions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contratacion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e(++$i); ?></td>

                                            <td><?php echo e($contratacion->personal->nombre.' '.$contratacion->personal->primer_apellido.' '.$contratacion->personal->segundo_apellido); ?></td>
											<td><a href="<?php echo e(asset('storage/'.$contratacion->contrato)); ?>" class="text-decoration-none" target="_blank"><img src="<?php echo e(asset('storage/'.$contratacion->contrato)); ?>" alt="" width="90"></a></td>
											<td><?php echo e($contratacion->referencia_contrato); ?></td>
                                            <td><?php echo e($contratacion->fecha_ingreso); ?></td>
											<td><?php echo e($contratacion->sueldo_inicial); ?></td>
											<td><?php echo e($contratacion->garantia); ?></td>
											<td><?php echo e($contratacion->empresa->razon_social); ?></td>

                                            <td align="right">
                                                <form action="<?php echo e(route('contratacions.destroy',$contratacion->id)); ?>" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="<?php echo e(route('contratacions.show',$contratacion->id)); ?>"><i class="fa fa-fw fa-eye"></i> Detalle</a>
                                                    <a class="btn btn-sm btn-success" href="<?php echo e(route('contratacions.edit',$contratacion->id)); ?>"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                <?php echo $contratacions->links(); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\constructora\resources\views/contratacion/index.blade.php ENDPATH**/ ?>