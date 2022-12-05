<?php $__env->startSection('template_title'); ?>
    Empresa
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <?php echo e(__('Empresa')); ?>

                            </span>

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

										<th>Logo</th>
										<th>Razon Social</th>
										<th>N Nit</th>
										<th>N Identificador</th>
										<th>N Empleador Caja</th>
										<th>Nim</th>
										<th>Repre Legal</th>
										<th>Ci Repre Legal</th>
										<th>Direccion</th>
										<th>Telefono</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $empresas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $empresa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e(++$i); ?></td>

											<td><img src="<?php echo e(asset('storage/'.$empresa->logo)); ?>" alt="" width="90"></td>
											<td><?php echo e($empresa->razon_social); ?></td>
											<td><?php echo e($empresa->n_nit); ?></td>
											<td><?php echo e($empresa->n_identificador); ?></td>
											<td><?php echo e($empresa->n_empleador_caja); ?></td>
											<td><?php echo e($empresa->nim); ?></td>
											<td><?php echo e($empresa->repre_legal); ?></td>
											<td><?php echo e($empresa->ci_repre_legal); ?></td>
											<td><?php echo e($empresa->direccion); ?></td>
											<td><?php echo e($empresa->telefono); ?></td>

                                            <td align="right">
                                                <form action="<?php echo e(route('empresas.destroy',$empresa->id)); ?>" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="<?php echo e(route('empresas.show',$empresa->id)); ?>"><i class="fa fa-fw fa-eye"></i> Detalle</a>
                                                    <a class="btn btn-sm btn-success" href="<?php echo e(route('empresas.edit',$empresa->id)); ?>"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                <?php echo $empresas->links(); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\constructora\resources\views/empresa/index.blade.php ENDPATH**/ ?>