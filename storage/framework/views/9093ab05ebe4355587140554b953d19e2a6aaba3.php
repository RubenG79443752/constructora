<form action="<?php echo e(route('personals.destroy',$row->id)); ?>" method="POST">
    <a class="btn btn-sm btn-success" title="Editar datos" href="<?php echo e(route('personals.edit',$row->id)); ?>"><i class="bi bi-eraser-fill"></i></a>
    <?php echo csrf_field(); ?>
    <?php echo method_field('DELETE'); ?>
    <button type="submit" class="btn btn-danger btn-sm" title="Eliminar datos de personal"><i class="bi bi-trash"></i></button>
</form>
<?php /**PATH C:\xampp\htdocs\constructora\resources\views/personal/actions.blade.php ENDPATH**/ ?>