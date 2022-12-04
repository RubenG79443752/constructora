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
} elseif ($_instance->childHasBeenRendered('teJxgHp')) {
    $componentId = $_instance->getRenderedChildComponentId('teJxgHp');
    $componentTag = $_instance->getRenderedChildComponentTagName('teJxgHp');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('teJxgHp');
} else {
    $response = \Livewire\Livewire::mount('contratacion-table');
    $html = $response->html();
    $_instance->logRenderedChild('teJxgHp', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\constructora\constructora defensa borrador\resources\views/contratacion/index.blade.php ENDPATH**/ ?>