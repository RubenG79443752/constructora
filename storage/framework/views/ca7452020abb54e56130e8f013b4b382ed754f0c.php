<?php $__env->startSection('template_title'); ?>
    Personal
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <?php echo e(__('Personal')); ?>

                            </span>

                             <div class="float-right">
                                <a href="<?php echo e(route('personals.create')); ?>" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  <?php echo e(__('Crear nuevo personal')); ?>

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
    $html = \Livewire\Livewire::mount('personal-table')->html();
} elseif ($_instance->childHasBeenRendered('ZGyYZlW')) {
    $componentId = $_instance->getRenderedChildComponentId('ZGyYZlW');
    $componentTag = $_instance->getRenderedChildComponentTagName('ZGyYZlW');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('ZGyYZlW');
} else {
    $response = \Livewire\Livewire::mount('personal-table');
    $html = $response->html();
    $_instance->logRenderedChild('ZGyYZlW', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                    </div>
                </div>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\constructora\constructora\resources\views/personal/index.blade.php ENDPATH**/ ?>