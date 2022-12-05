<form action="<?php echo e(route('contratacions.destroy',$row->id)); ?>" method="POST">
    <a class="btn btn-sm btn-primary " href="<?php echo e(route('contratacions.show',$row->id)); ?>" title="Detalle"><i class="bi bi-eye"></i></a>
    <a class="btn btn-sm btn-success" href="<?php echo e(route('contratacions.edit',$row->id)); ?>" title="Editar"><i class="bi bi-pencil-square"></i></a>
    <?php echo csrf_field(); ?>
    <?php echo method_field('DELETE'); ?>
    <button type="submit" class="btn btn-danger btn-sm" title="Eliminar"><i class="bi bi-trash3-fill"></i></button>
</form>
<?php /**PATH C:\xampp\htdocs\constructora\constructora\resources\views/contratacion/actions.blade.php ENDPATH**/ ?>