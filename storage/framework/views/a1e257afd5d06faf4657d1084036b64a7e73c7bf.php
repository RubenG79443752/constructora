<div class="box box-info padding-1">
    <div class="box-body">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <?php echo e(Form::label('nombre')); ?>

                    <?php echo e(Form::text('nombre', $horario->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => '...'])); ?>

                    <?php echo $errors->first('nombre', '<div class="invalid-feedback">:message</div>'); ?>

                </div>
            </div>
            <div class="col-md-12 text-danger mt-3">* campos INICIO Y FIN son obligatorios <br>* campos SALIDA y ENTRADA no son obligatorios  </div>
            <div class="col-md-3 mt-1">
                <div class="form-group">
                    <?php echo e(Form::label('Inicio')); ?>

                    <?php echo e(Form::time('horario_ini', $horario->horario_ini, ['class' => 'form-control' . ($errors->has('horario_ini') ? ' is-invalid' : ''), 'placeholder' => '...'])); ?>

                    <?php echo $errors->first('horario_ini', '<div class="invalid-feedback">:message</div>'); ?>

                </div>
            </div>
            <div class="col-md-3 mt-1">
                <div class="form-group">
                    <?php echo e(Form::label('Salida')); ?>

                    <?php echo e(Form::time('horario_ini1', $horario->horario_ini1, ['class' => 'form-control' . ($errors->has('horario_ini1') ? ' is-invalid' : ''), 'placeholder' => '...'])); ?>

                    <?php echo $errors->first('horario_ini1', '<div class="invalid-feedback">:message</div>'); ?>

                </div>
            </div>
            <div class="col-md-3 mt-1">
                <div class="form-group">
                    <?php echo e(Form::label('Entrada')); ?>

                    <?php echo e(Form::time('horario_fin1', $horario->horario_fin1, ['class' => 'form-control' . ($errors->has('horario_fin1') ? ' is-invalid' : ''), 'placeholder' => '...'])); ?>

                    <?php echo $errors->first('horario_fin1', '<div class="invalid-feedback">:message</div>'); ?>

                </div>
            </div>
            <div class="col-md-3 mt-1">
                <div class="form-group">
                    <?php echo e(Form::label('Fin')); ?>

                    <?php echo e(Form::time('horario_fin', $horario->horario_fin, ['class' => 'form-control' . ($errors->has('horario_fin') ? ' is-invalid' : ''), 'placeholder' => '...'])); ?>

                    <?php echo $errors->first('horario_fin', '<div class="invalid-feedback">:message</div>'); ?>

                </div>
            </div>
            <div class="col-md-3 mt-3">
                <div class="form-group">
                    <?php echo e(Form::label('horas descanso')); ?>

                    <?php echo e(Form::number('horas_descanso', ($horario->horas_descanso)? $horario->horas_descanso:0, ['class' => 'form-control' . ($errors->has('horas_descanso') ? ' is-invalid' : ''), 'placeholder' => '...'])); ?>

                    <?php echo $errors->first('horas_descanso', '<div class="invalid-feedback">:message</div>'); ?>

                </div>
            </div>
        </div>
    </div>
    <div class="box-footer mt-2">
        <button type="submit" class="btn btn-primary" onclick="this.disabled=true;this.value='Enviando...';this.form.submit();"> Guardar</button>
        <a href="<?php echo e(route('horarios.index')); ?>" class="btn btn-danger"> <i class="fa fa-users"></i> Listado</a>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\constructora\constructora\resources\views/horario/form.blade.php ENDPATH**/ ?>