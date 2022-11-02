<div class="box box-info padding-1">
    <div class="box-body">
        <div class="col-md-6">
            <div class="form-group">
                <?php echo Form::label('Personal'); ?>

                <?php echo Form::select('personal_id', $personal, (isset($form110->personal_id))? $form110->personal_id:null, ['class' => 'form-select form-select-sm','id'=>'personal_id','required']); ?>

                <?php echo $errors->first('personal_id', '<div class="invalid-feedback">:message</div>'); ?>

            </div>
        </div>
        <div class="form-group">
            <?php echo e(Form::label('descripcion')); ?>

            <?php echo e(Form::text('descripcion', $form110->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => '...'])); ?>

            <?php echo $errors->first('descripcion', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('mes')); ?>

            <select class="form-select form-select-sm" name="mes" id="mes">
                <option value="Enero" <?php if(old('mes', $form110->mes) === 'Enero'): ?>  selected <?php endif; ?>>Enero</option>
                <option value="Febrero" <?php if(old('mes', $form110->mes) === 'Febrero'): ?>  selected <?php endif; ?>>Febrero</option>
                <option value="Marzo" <?php if(old('mes', $form110->mes) === 'Marzo'): ?>  selected <?php endif; ?>>Marzo</option>
                <option value="Abril" <?php if(old('mes', $form110->mes) === 'Abril'): ?>  selected <?php endif; ?>>Abril</option>
                <option value="Mayo" <?php if(old('mes', $form110->mes) === 'Mayo'): ?>  selected <?php endif; ?>>Mayo</option>
                <option value="Junio" <?php if(old('mes', $form110->mes) === 'Junio'): ?>  selected <?php endif; ?>>Junio</option>
                <option value="Julio" <?php if(old('mes', $form110->mes) === 'Julio'): ?>  selected <?php endif; ?>>Julio</option>
                <option value="Agosto" <?php if(old('mes', $form110->mes) === 'Agosto'): ?>  selected <?php endif; ?>>Agosto</option>
                <option value="Septiembre" <?php if(old('mes', $form110->mes) === 'Septiembre'): ?>  selected <?php endif; ?>>Septiembre</option>
                <option value="Octubre" <?php if(old('mes', $form110->mes) === 'Octubre'): ?>  selected <?php endif; ?>>Octubre</option>
                <option value="Noviembre" <?php if(old('mes', $form110->mes) === 'Noviembre'): ?>  selected <?php endif; ?>>Noviembre</option>
                <option value="Diciembre" <?php if(old('mes', $form110->mes) === 'Diciembre'): ?>  selected <?php endif; ?>>Diciembre</option>
            </select>
        </div>
        <div class="form-group">
            <?php echo e(Form::label('Periodo')); ?>

            <select class="form-select form-select-sm" name="periodo" id="periodo">
                <option value="2022" <?php if(old('periodo', $form110->periodo) === '2022'): ?>  selected <?php endif; ?>>2022</option>
                <option value="2023" <?php if(old('periodo', $form110->periodo) === '2023'): ?>  selected <?php endif; ?>>2023</option>
                <option value="2024" <?php if(old('periodo', $form110->periodo) === '2024'): ?>  selected <?php endif; ?>>2024</option>
                <option value="2025" <?php if(old('periodo', $form110->periodo) === '2025'): ?>  selected <?php endif; ?>>2025</option>
                <option value="2026" <?php if(old('periodo', $form110->periodo) === '2026'): ?>  selected <?php endif; ?>>2026</option>
                <option value="2027" <?php if(old('periodo', $form110->periodo) === '2027'): ?>  selected <?php endif; ?>>2027</option>
                <option value="2028" <?php if(old('periodo', $form110->periodo) === '2028'): ?>  selected <?php endif; ?>>2028</option>
                <option value="2029" <?php if(old('periodo', $form110->periodo) === '2029'): ?>  selected <?php endif; ?>>2029</option>
                <option value="2030" <?php if(old('periodo', $form110->periodo) === '2030'): ?>  selected <?php endif; ?>>2030</option>
            </select>
        </div>
        <div class="form-group">
            <?php echo e(Form::label('monto_favor')); ?>

            <?php echo e(Form::number('monto_favor', $form110->monto_favor, ['class' => 'form-control' . ($errors->has('monto_favor') ? ' is-invalid' : ''), 'min' => 0,'step'=>'any'])); ?>

            <?php echo $errors->first('monto_favor', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('Subir PDF')); ?>

            <input type="file" class="form-control" id="form110" name="form110" accept="application/pdf"/>
            <?php echo $errors->first('form110', '<div class="invalid-feedback">:message</div>'); ?>

            <?php if($accion == 'modificar'): ?>
            <a href="<?php echo e(asset('storage/'.$form110->form110)); ?>" class="text-decoration-none" target="_blank">Ver formulario anterior</a>
            <div class="col-md-2 mt-2"><img src="<?php echo e(asset('storage/'.$form110->form110)); ?>" alt="" width="120"></div>
            <?php endif; ?>

            <?php echo Form::hidden('user_id',$usuario,['class' => 'form-control','id'=>'user_id']); ?>

        </div>
    </div>
    <div class="box-footer mt-2">
        <button type="submit" class="btn btn-primary" onclick="this.disabled=true;this.value='Enviando...';this.form.submit();"> Guardar</button>
        <a href="<?php echo e(route('form110s.index')); ?>" class="btn btn-danger"> <i class="fa fa-users"></i> Listado</a>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\constructora\resources\views/form110/form.blade.php ENDPATH**/ ?>