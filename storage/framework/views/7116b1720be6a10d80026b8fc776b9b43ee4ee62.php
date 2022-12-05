<div class="box box-info padding-1">
    <div class="box-body">
        <div class="container">
            <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <?php echo e(Form::label('documento de identidad')); ?>

                    <div class="input-group flex-nowrap">
                        <span class="input-group-text"><i class="bi bi-credit-card-2-front-fill"></i></span>
                        <?php echo e(Form::text('doc_identidad', $personal->doc_identidad, ['class' => 'form-control' . ($errors->has('doc_identidad') ? ' is-invalid' : ''), 'placeholder' => '00000000'])); ?>

                        <?php echo $errors->first('doc_identidad', '<div class="invalid-feedback">:message</div>'); ?>

                    </div>
                </div>
            </div>
            <div class="col-md-12"></div>
            <div class="col-md-3">
                <div class="form-group">
                    <?php echo e(Form::label('nombre')); ?>

                    <?php echo e(Form::text('nombre', $personal->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre completo'])); ?>

                    <?php echo $errors->first('nombre', '<div class="invalid-feedback">:message</div>'); ?>

                </div>
            </div>
        <div class="col-md-3">
            <div class="form-group">
                <?php echo e(Form::label('primer_apellido')); ?>

                <?php echo e(Form::text('primer_apellido', $personal->primer_apellido, ['class' => 'form-control' . ($errors->has('primer_apellido') ? ' is-invalid' : ''), 'placeholder' => '-'])); ?>

                <?php echo $errors->first('primer_apellido', '<div class="invalid-feedback">:message</div>'); ?>

            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <?php echo e(Form::label('segundo_apellido')); ?>

                <?php echo e(Form::text('segundo_apellido', $personal->segundo_apellido, ['class' => 'form-control' . ($errors->has('segundo_apellido') ? ' is-invalid' : ''), 'placeholder' => '-'])); ?>

                <?php echo $errors->first('segundo_apellido', '<div class="invalid-feedback">:message</div>'); ?>

            </div>
        </div>
        <div class="col-md-12"></div>
        <div class="col-md-3">
            <div class="form-group">
                <?php echo e(Form::label('fecha_nacimiento')); ?>

                <?php echo e(Form::date('fecha_nacimiento', $personal->fecha_nacimiento, ['class' => 'form-control' . ($errors->has('fecha_nacimiento') ? ' is-invalid' : ''), 'placeholder' => '00/00/0000'])); ?>

                <?php echo $errors->first('fecha_nacimiento', '<div class="invalid-feedback">:message</div>'); ?>

            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <?php echo e(Form::label('sexo')); ?>

                <select class="form-select" name="sexo" id="sexo">
                    <option value="M" <?php if(old('sexo', $personal->sexo) === 'M'): ?>  selected <?php endif; ?>>Masculino</option>
                    <option value="F" <?php if(old('sexo', $personal->sexo) === 'F'): ?>  selected <?php endif; ?>>Femenino</option>
                </select>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <?php echo e(Form::label('Domicilio')); ?>

                <?php echo e(Form::text('domicilio', $personal->domicilio, ['class' => 'form-control' . ($errors->has('domicilio') ? ' is-invalid' : ''), 'placeholder' => '-'])); ?>

                <?php echo $errors->first('domicilio', '<div class="invalid-feedback">:message</div>'); ?>

            </div>
        </div>
        <div class="col-md-12"></div>
        <div class="col-md-3">
            <div class="form-group">
                <?php echo Form::label('Pais de nacionalidad'); ?>

                <?php echo Form::select('pais_id', $paices, (isset($personal->pais_id))? $personal->pais_id:null, ['class' => 'form-select'. ($errors->has('pais_id') ? ' is-invalid' : '')]); ?>

                <?php echo $errors->first('pais_id', '<div class="invalid-feedback">:message</div>'); ?>

            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <?php echo Form::label('Cargo'); ?>

                <?php echo Form::select('cargo_id', $cargos, (isset($personal->cargo_id))? $personal->cargo_id:null, ['class' => 'form-select'. ($errors->has('cargo_id') ? ' is-invalid' : '')]); ?>

                <?php echo $errors->first('cargo_id', '<div class="invalid-feedback">:message</div>'); ?>

            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <?php echo e(Form::label('estado')); ?>

                <select class="form-select" name="estado" id="estado">
                    <option value="Activo" <?php if(old('estado', $personal->estado) === 'Activo'): ?>  selected <?php endif; ?>>Activo</option>
                    <option value="Inactivo" <?php if(old('estado', $personal->estado) === 'Inactivo'): ?>  selected <?php endif; ?>>Inactivo</option>
                </select>
            </div>
            <?php echo e(Form::hidden('saldo_anterior', isset($personal->saldo_anterior)? $personal->saldo_anterior:0, ['class' => 'form-control'])); ?>

        </div>
    </div>
    <div class="box-footer mt-2">
        <button type="submit" class="btn btn-primary" onclick="this.disabled=true;this.value='Enviando...';this.form.submit();"> Guardar</button>
        <a href="<?php echo e(route('personals.index')); ?>" class="btn btn-danger"> <i class="fa fa-users"></i> Listado</a>
    </div>
</div>
</div>
</div>
<?php /**PATH C:\xampp\htdocs\constructora\resources\views/personal/form.blade.php ENDPATH**/ ?>