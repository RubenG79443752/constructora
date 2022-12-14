<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Ingrese datos para el cambio de password')); ?></div>

                <div class="card-body">
                <?php if($message = Session::get('success')): ?>
                    <div class="alert alert-dismissible fade show alert-success" role="alert" data-mdb-color="success" id="customxD">
                        <p><?php echo e($message); ?></p>
                        <button type="button" class="btn-close" data-mdb-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>
                <?php if($message = Session::get('danger')): ?>
                    <div class="alert alert-dismissible fade show alert-danger" role="alert" data-mdb-color="success" id="customxD">
                        <p><?php echo e($message); ?></p>
                        <button type="button" class="btn-close" data-mdb-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>
                    <form method="POST" action="<?php echo e(route('updatepassword_user')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="mypassword">Introduzca password actual :</label>
                            <input type="password" name="mypassword" class="form-control">
                            <div class="text-danger"><?php echo e($errors->first('mypassword')); ?></div>
                        </div>
                        <div class="form-group">
                            <label for="password">Introduce nueva password:</label>
                            <input type="password" name="password" class="form-control">
                            <div class="text-danger"><?php echo e($errors->first('password')); ?></div>
                        </div>
                        <div class="form-group">
                            <label for="mypassword">Confirma nueva password:</label>
                            <input type="password" name="password_confirmation" class="form-control">
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-primary" onclick="this.disabled=true;this.value='Enviando...';this.form.submit();"> Cambiar password</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\constructora\resources\views/user/password.blade.php ENDPATH**/ ?>