<?php echo Form::open(['route' => ['permissions.destroy', $id], 'method' => 'delete']); ?>

<div class='btn-group btn-group-sm'>
    <a href="<?php echo e(route('permissions.edit', $id)); ?>" class='btn btn-link'>
        <i class="fa fa-edit"></i>
    </a>
    <?php echo Form::button('<i class="fa fa-trash"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-link text-danger',
        'onclick' => "return confirm('Are you sure?')"
    ]); ?>

</div>
<?php echo Form::close(); ?>

<?php /**PATH C:\xampp\htdocs\multi-restaurants\resources\views/settings/permissions/datatables_actions.blade.php ENDPATH**/ ?>