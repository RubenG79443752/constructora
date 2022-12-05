<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            <?php echo e(Form::label('Nombre')); ?>

            <?php echo e(Form::text('name', $user->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''),'autofocus'])); ?>

            <?php echo $errors->first('name', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <?php if($accion == 'insertar'): ?>
        <div class="form-group">
            <?php echo e(Form::label('usuario')); ?>

            <?php echo e(Form::text('usuario', $user->usuario, ['class' => 'form-control' . ($errors->has('usuario') ? ' is-invalid' : '')])); ?>

            <?php echo $errors->first('usuario', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('password')); ?>

            <?php echo e(Form::password('password', ['class' => 'form-control' . ($errors->has('password') ? ' is-invalid' : '')])); ?>

            <?php echo $errors->first('password', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <?php endif; ?>
        <div class="form-group">
            <?php echo Form::label('Rol'); ?>

                <?php echo Form::select('rol', $roles, (isset($user->rol))? $user->rol:null, ['class' => 'form-select form-select']); ?>

        </div>
        <div class="form-group">
            <label>Estado</label>
            <select class="form-select" name="estado" id="estado">
                <option value="Activo" <?php if(old('estado', $user->estado) === 'Activo'): ?>  selected <?php endif; ?>>Activo</option>
                <option value="Inactivo" <?php if(old('estado', $user->estado) === 'Inactivo'): ?>  selected <?php endif; ?>>Inactivo</option>
            </select>
        </div>
        <div class="form-group">
            <?php echo e(Form::label('email')); ?>

            <?php echo e(Form::text('email', $user->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : '')])); ?>

            <?php echo $errors->first('email', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
    </div>
    <div class="box-footer mt-2">
        <button type="submit" class="btn btn-primary" onclick="this.disabled=true;this.value='Enviando...';this.form.submit();"> Guardar</button>
        <a href="<?php echo e(route('users.index')); ?>" class="btn btn-danger"> <i class="fa fa-users"></i> Listado</a>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\constructora\resources\views/user/form.blade.php ENDPATH**/ ?>