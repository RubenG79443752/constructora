<div class="box box-info padding-1">
    <div class="box-body">
        <div class="alert alert-danger"><b>Dar acceso a:  </b><?php echo e($acceso->user->name); ?></div>
        <div class="form-group">
            <?php echo e(Form::label('opcion')); ?>

            <?php echo e(Form::text('opcion', $acceso->opcion, ['class' => 'form-control' . ($errors->has('opcion') ? ' is-invalid' : ''), 'placeholder' => '...'])); ?>

            <?php echo $errors->first('opcion', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('estado')); ?>

            <select class="form-select" name="estado" id="estado">
                <option value="Habilitado" <?php if(old('estado', $acceso->estado) === 'Habilitado'): ?>  selected <?php endif; ?>>Habilitado</option>
                <option value="Deshabilitado" <?php if(old('estado', $acceso->estado) === 'Deshabilitado'): ?>  selected <?php endif; ?>>Deshabilitado</option>
            </select>
            <?php echo e(Form::hidden('id', $acceso->user_id, ['class' => 'form-control'])); ?>

        </div>

    </div>
    <div class="box-footer mt-2">
        <button type="submit" class="btn btn-primary" onclick="this.disabled=true;this.value='Enviando...';this.form.submit();"> Guardar</button>
        <a href="<?php echo e(route('accesos.index')); ?>" class="btn btn-danger"> <i class="fa fa-users"></i> Listado</a>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\constructora\resources\views/acceso/form.blade.php ENDPATH**/ ?>