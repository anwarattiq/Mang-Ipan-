<?php $__env->startPush('css_lib'); ?>
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo e(asset('plugins/iCheck/flat/blue.css')); ?>">
<?php $__env->stopPush(); ?>
<?php $__env->startSection('settings_title',trans('lang.permission_table')); ?>

<?php $__env->startSection('settings_content'); ?>
    <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="card">
        <div class="card-header">
            <ul class="nav nav-tabs align-items-end card-header-tabs w-100">
                <li class="nav-item">
                    <a class="nav-link active" href="<?php echo route('permissions.index'); ?>"><i class="fa fa-list mr-2"></i><?php echo e(trans('lang.permission_table')); ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo route('permissions.create'); ?>"><i class="fa fa-plus mr-2"></i><?php echo e(trans('lang.permission_create')); ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo route('roles.index'); ?>"><i class="fa fa-list mr-2"></i><?php echo e(trans('lang.role_table')); ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo route('roles.create'); ?>"><i class="fa fa-plus mr-2"></i><?php echo e(trans('lang.role_create')); ?></a>
                </li>

                <?php echo $__env->make('layouts.right_toolbar', compact('dataTable'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </ul>
        </div>
        <div class="card-body">
            <?php echo $__env->make('settings.permissions.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="clearfix"></div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts_lib'); ?>
    <!-- iCheck -->
    <script src="<?php echo e(asset('plugins/iCheck/icheck.min.js')); ?>"></script>
<?php $__env->stopPush(); ?>


<?php echo $__env->make('layouts.settings.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\multi-restaurants\resources\views/settings/permissions/index.blade.php ENDPATH**/ ?>