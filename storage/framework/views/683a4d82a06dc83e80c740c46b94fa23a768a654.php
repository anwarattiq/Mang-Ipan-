<div class='btn-group btn-group-sm'>
  <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('galleries.show')): ?>
  <a data-toggle="tooltip" data-placement="bottom" title="<?php echo e(trans('lang.view_details')); ?>" href="<?php echo e(route('galleries.show', $id)); ?>" class='btn btn-link'>
    <i class="fa fa-eye"></i>
  </a>
  <?php endif; ?>

  <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('galleries.edit')): ?>
  <a data-toggle="tooltip" data-placement="bottom" title="<?php echo e(trans('lang.gallery_edit')); ?>" href="<?php echo e(route('galleries.edit', $id)); ?>" class='btn btn-link'>
    <i class="fa fa-edit"></i>
  </a>
  <?php endif; ?>

  <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('galleries.destroy')): ?>
<?php echo Form::open(['route' => ['galleries.destroy', $id], 'method' => 'delete']); ?>

  <?php echo Form::button('<i class="fa fa-trash"></i>', [
  'type' => 'submit',
  'class' => 'btn btn-link text-danger',
  'onclick' => "return confirm('Are you sure?')"
  ]); ?>

<?php echo Form::close(); ?>

  <?php endif; ?>
</div>
<?php /**PATH C:\xampp\htdocs\rest\resources\views/galleries/datatables_actions.blade.php ENDPATH**/ ?>