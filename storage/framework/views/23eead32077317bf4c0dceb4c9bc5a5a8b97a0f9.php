<?php $__env->startSection('template_title'); ?>
    Contratacion
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <?php echo e(__('Contratacion')); ?>

                            </span>

                             <div class="float-right">
                                <a href="<?php echo e(route('contratacions.create')); ?>" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  <?php echo e(__('Crear nuevo contrato')); ?>

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
    $html = \Livewire\Livewire::mount('contratacion-table')->html();
<<<<<<< HEAD
} elseif ($_instance->childHasBeenRendered('aFfs3RZ')) {
    $componentId = $_instance->getRenderedChildComponentId('aFfs3RZ');
    $componentTag = $_instance->getRenderedChildComponentTagName('aFfs3RZ');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('aFfs3RZ');
} else {
    $response = \Livewire\Livewire::mount('contratacion-table');
    $html = $response->html();
    $_instance->logRenderedChild('aFfs3RZ', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
=======
} elseif ($_instance->childHasBeenRendered('gO2bURZ')) {
    $componentId = $_instance->getRenderedChildComponentId('gO2bURZ');
    $componentTag = $_instance->getRenderedChildComponentTagName('gO2bURZ');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('gO2bURZ');
} else {
    $response = \Livewire\Livewire::mount('contratacion-table');
    $html = $response->html();
    $_instance->logRenderedChild('gO2bURZ', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
>>>>>>> d030ea51c7a277a91de4a10625f09008a194c681
}
echo $html;
?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\constructora\resources\views/contratacion/index.blade.php ENDPATH**/ ?>