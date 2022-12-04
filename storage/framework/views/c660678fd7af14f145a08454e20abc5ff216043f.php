<form action="<?php echo e(route('planillas.destroy',$row->id)); ?>" method="POST">
    <a class="btn btn-sm btn-warning" href="<?php echo e(route('planillas.edit',$row->id)); ?>" title="Actualizar registro"><i class="bi bi-pen-fill"></i></a>
    <?php echo csrf_field(); ?>
    <?php echo method_field('DELETE'); ?>
    <button type="submit" class="btn btn-danger btn-sm" title="Eliminar registro"><i class="bi bi-trash3-fill"></i></button>
</form>
<?php /**PATH C:\xampp\htdocs\constructora\constructora defensa borrador\resources\views/planilla/actions.blade.php ENDPATH**/ ?>