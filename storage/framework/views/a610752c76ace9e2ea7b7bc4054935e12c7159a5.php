<?php $__env->startSection('settings_title',trans('lang.user_table')); ?>
<?php $__env->startSection('settings_content'); ?>
  <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <div class="card">
    <div class="card-header">
      <ul class="nav nav-tabs align-items-end card-header-tabs w-100">
        <li class="nav-item">
          <a class="nav-link active" href="<?php echo url()->current(); ?>"><i class="fa fa-list mr-2"></i><?php echo e(trans('lang.user_table')); ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="<?php echo route('users.create'); ?>"><i class="fa fa-plus mr-2"></i><?php echo e(trans('lang.user_create')); ?></a>
        </li>
        <?php echo $__env->make('layouts.right_toolbar', compact('dataTable'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </ul>
    </div>
    <div class="card-body">
      <?php echo $__env->make('settings.users.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <div class="clearfix"></div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.settings.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\rest\resources\views/settings/users/index.blade.php ENDPATH**/ ?>