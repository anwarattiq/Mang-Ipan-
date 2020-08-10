<?php echo Form::open(['route' => ['customFields.destroy', $id], 'method' => 'delete']); ?>

<div class='btn-group btn-group-sm'>
  <a href="<?php echo e(route('customFields.show', $id)); ?>" class='btn btn-link'>
    <i class="fa fa-eye"></i>
  </a>
  <a href="<?php echo e(route('customFields.edit', $id)); ?>" class='btn btn-link'>
    <i class="fa fa-edit"></i>
  </a>
  <?php echo Form::button('<i class="fa fa-trash"></i>', [
  'type' => 'submit',
  'class' => 'btn btn-link text-danger',
  'onclick' => "return confirm('Are you sure?')"
  ]); ?>

</div>
<?php echo Form::close(); ?><?php /**PATH C:\xampp\htdocs\multi-restaurants\resources\views/settings/custom_fields/datatables_actions.blade.php ENDPATH**/ ?>