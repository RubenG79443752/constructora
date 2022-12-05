

<?php $__env->startSection('template_title'); ?>
    Asistencia
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <?php echo e(__('Asistencia')); ?>

                            </span>
                            <div class="float-right">
                                <a class="btn btn-info" href="#" data-bs-toggle="modal" data-bs-target="#exportModal" title="Exportar archivo de asistencia offline"><i class="bi bi-cloud-arrow-down-fill"></i> Exportar</a>
                                <a href="<?php echo e(route('index_asistenciaOff')); ?>" class="btn btn-warning float-right"  data-placement="left">
                                    <i class="bi bi-person-badge-fill"></i> <?php echo e(__('Registrar asistencia offline')); ?>

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
                                        <th>Lugar de trabajo</th>
										<th>Fecha Asitencia</th>
										<th>Hora Entrada</th>
                                        <th>Lat Entrada</th>
										<th>Long Entrada</th>
										<th>Estado Entrada</th>
										<th>Hora Salida</th>
                                        <th>Lat Salida</th>
										<th>Long Salida</th>
										<th>Estado Salida</th>
										<th>Tardanza</th>
										<th>Tipo Asistencia</th>
										<th>Estado Final</th>

                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $asistencias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $asistencia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e(++$i); ?></td>



											<td><?php echo e($asistencia->personal->nombre.' '.$asistencia->personal->primer_apellido.' '.$asistencia->personal->segundo_apellido); ?></td>
											<td><?php echo e($asistencia->lugartrabajo->descripcion); ?></td>
                                            <td><?php echo e($asistencia->fecha_asitencia); ?></td>
											<td><?php echo e($asistencia->hora_entrada); ?></td>
                                            <td><?php echo e($asistencia->lat_entrada); ?></td>
											<td><?php echo e($asistencia->long_entrada); ?></td>
											<td><?php echo ($asistencia->estado_entrada == 'Correcto')? '<i class="h3 text-success bi bi-check-square-fill"></i>':'<i class="h2 text-danger bi bi-exclamation-triangle-fill"></i>'; ?></td>
											<td><?php echo e($asistencia->hora_salida); ?></td>
                                            <td><?php echo e($asistencia->lat_salida); ?></td>
											<td><?php echo e($asistencia->long_salida); ?></td>
											<td><?php echo ($asistencia->estado_salida == 'Correcto')? '<i class="h3 text-success bi bi-check-square-fill"></i>':'<i class="h2 text-danger bi bi-exclamation-triangle-fill"></i>'; ?></td>
											<td><?php echo e($asistencia->tardanza); ?></td>
											<td><?php echo e($asistencia->tipo_asistencia); ?></td>
											<td><?php echo e($asistencia->estado_final); ?></td>

                                            
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <?php echo $asistencias->links(); ?>

            </div>
        </div>
    </div>
    <div class="modal fade" id="exportModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exportModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exportModalLabel">Exportar archivo excel para Asistencias</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="text-success" id="mensaje"></p>
                <div class="row">
                    <div class="col">
                        <form method="POST" action="<?php echo e(route('exportar_off')); ?>"  role="form" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="alert alert-info">Perido actual: <b><?php echo e(date('Y')); ?></b></div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <?php echo e(Form::label('Mes de marcado')); ?>

                                    <select class="form-select form-select-sm" name="mes" id="mes">
                                        <option value="01">Enero</option>
                                        <option value="02">Febrero</option>
                                        <option value="03">Marzo</option>
                                        <option value="04">Abril</option>
                                        <option value="05">Mayo</option>
                                        <option value="06">Junio</option>
                                        <option value="07">Julio</option>
                                        <option value="08">Agosto</option>
                                        <option value="09">Septiembre</option>
                                        <option value="10">Octubre</option>
                                        <option value="11">Noviembre</option>
                                        <option value="12">Diciembre</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 mt-3">
                                <button type="submit" class="btn btn-primary" onclick="this.disabled=true;this.value='Enviando...';this.form.submit();"> Exportar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Nueva carpeta (2)\constructora\resources\views/asistencia/lista_off.blade.php ENDPATH**/ ?>