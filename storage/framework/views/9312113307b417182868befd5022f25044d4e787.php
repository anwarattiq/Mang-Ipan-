<div class='btn-group btn-group-sm'>
  <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('earnings.show')): ?>
  <a data-toggle="tooltip" data-placement="bottom" title="<?php echo e(trans('lang.view_details')); ?>" href="<?php echo e(route('earnings.show', $id)); ?>" class='btn btn-link'>
    <i class="fa fa-eye"></i>
  </a>
  <?php endif; ?>

    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('restaurantsPayouts.create')): ?>
      <a data-toggle="tooltip" data-placement="bottom" title="<?php echo e(trans('lang.restaurants_payout_create')); ?>" href="<?php echo e(route('restaurantsPayouts.create')); ?>" class='btn btn-link'>
        <i class="fa fa-money"></i>
      </a>
    <?php endif; ?>

  <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('earnings.edit')): ?>
  <a data-toggle="tooltip" data-placement="bottom" title="<?php echo e(trans('lang.earning_edit')); ?>" href="<?php echo e(route('earnings.edit', $id)); ?>" class='btn btn-link'>
    <i class="fa fa-edit"></i>
  </a>
  <?php endif; ?>

  <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('earnings.destroy')): ?>
<?php echo Form::open(['route' => ['earnings.destroy', $id], 'method' => 'delete']); ?>

  <?php echo Form::button('<i class="fa fa-trash"></i>', [
  'type' => 'submit',
  'class' => 'btn btn-link text-danger',
  'onclick' => "return confirm('Are you sure?')"
  ]); ?>

<?php echo Form::close(); ?>

  <?php endif; ?>
</div>
<?php /**PATH C:\xampp\htdocs\rest\resources\views/earnings/datatables_actions.blade.php ENDPATH**/ ?>