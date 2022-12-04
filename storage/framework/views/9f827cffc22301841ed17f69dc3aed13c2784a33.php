<div class="box box-info padding-1">
    <div class="box-body">
        <div class="col-md-4">
            <div class="form-group">
                <?php echo Form::label('Personal'); ?>

                <?php echo Form::select('personal_id', $personal, (isset($contratacion->personal_id))? $contratacion->personal_id:null, ['class' => 'form-select form-select-sm','id'=>'personal_id']); ?>

                <?php echo $errors->first('personal_id', '<div class="invalid-feedback">:message</div>'); ?>

            </div>
        </div>
        <div class="form-group">
            <?php echo e(Form::label('Contrato')); ?>

            <input type="file" class="form-control" id="contrato" name="contrato" accept="image/*"/>
            <?php echo $errors->first('contrato', '<div class="invalid-feedback">:message</div>'); ?>

            <?php if($accion == 'modificar'): ?>
            <a href="<?php echo e(asset('storage/'.$contratacion->contrato)); ?>" class="text-decoration-none" target="_blank">Ver Contrato anterior</a>
            <div class="col-md-2 mt-2"><img src="<?php echo e(asset('storage/'.$contratacion->contrato)); ?>" alt="" width="120"></div>
            <?php endif; ?>
        </div>
        <div class="form-group">
            <?php echo e(Form::label('referencia_contrato')); ?>

            <?php echo e(Form::text('referencia_contrato', $contratacion->referencia_contrato, ['class' => 'form-control' . ($errors->has('referencia_contrato') ? ' is-invalid' : ''), 'placeholder' => 'Ref.'])); ?>

            <?php echo $errors->first('referencia_contrato', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('fecha_ingreso')); ?>

            <?php echo e(Form::date('fecha_ingreso', $contratacion->fecha_ingreso, ['class' => 'form-control' . ($errors->has('fecha_ingreso') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Ingreso'])); ?>

            <?php echo $errors->first('fecha_ingreso', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('sueldo_inicial')); ?>

            <?php echo e(Form::number('sueldo_inicial', $contratacion->sueldo_inicial, ['class' => 'form-control' . ($errors->has('sueldo_inicial') ? ' is-invalid' : ''), 'placeholder' => '0','min'=>'0','step'=>'any'])); ?>

            <?php echo $errors->first('sueldo_inicial', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('garantia')); ?>

            <?php echo e(Form::text('garantia', $contratacion->garantia, ['class' => 'form-control' . ($errors->has('garantia') ? ' is-invalid' : ''), 'placeholder' => '-'])); ?>

            <?php echo $errors->first('garantia', '<div class="invalid-feedback">:message</div>'); ?>

        </div>

        <div class="form-group col-sm-6">
            <?php echo Form::label('Empresa'); ?>

            <?php echo Form::select('empresa_id', $empresas, (isset($contratacion->empresa_id))? $contratacion->empresa_id:null, ['class' => 'form-control'. ($errors->has('empresa_id') ? ' is-invalid' : '')]); ?>

            <?php echo $errors->first('empresa_id', '<div class="invalid-feedback">:message</div>'); ?>

        </div>

    </div>
    <div class="box-footer mt-2">
        <button type="submit" class="btn btn-primary" onclick="this.disabled=true;this.value='Enviando...';this.form.submit();"> Guardar</button>
        <a href="<?php echo e(route('contratacions.index')); ?>" class="btn btn-danger"> <i class="fa fa-users"></i> Listado</a>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\constructora\constructora defensa borrador\resources\views/contratacion/form.blade.php ENDPATH**/ ?>