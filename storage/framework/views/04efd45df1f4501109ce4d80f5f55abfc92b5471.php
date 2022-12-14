<?php $__env->startSection('template_title'); ?>
    Planillas
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <?php echo e(__('Planillas')); ?>

                            </span>

                             <div class="float-right">
                                <a href="<?php echo e(route('planillas.create')); ?>" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  <?php echo e(__('Crear registro a planilla')); ?>

                                </a>
                                <a href="<?php echo e(url('menu_sueldos')); ?>" class="btn btn-success btn-sm float-right"  data-placement="left">
                                    <i class="bi bi-house-fill"></i> <?php echo e(__('Menu de opciones')); ?>

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
                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('planilla-table')->html();
} elseif ($_instance->childHasBeenRendered('WpO5WEN')) {
    $componentId = $_instance->getRenderedChildComponentId('WpO5WEN');
    $componentTag = $_instance->getRenderedChildComponentTagName('WpO5WEN');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('WpO5WEN');
} else {
    $response = \Livewire\Livewire::mount('planilla-table');
    $html = $response->html();
    $_instance->logRenderedChild('WpO5WEN', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\constructora\constructora defensa borrador\resources\views/planilla/index.blade.php ENDPATH**/ ?>