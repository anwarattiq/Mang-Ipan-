<?php $__env->startPush('css_lib'); ?>
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo e(asset('plugins/iCheck/flat/blue.css')); ?>">
    <!-- select2 -->
    <link rel="stylesheet" href="<?php echo e(asset('plugins/select2/select2.min.css')); ?>">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?php echo e(asset('plugins/summernote/summernote-bs4.css')); ?>">
<?php $__env->stopPush(); ?>
<?php $__env->startSection('settings_title',trans('lang.permission_create')); ?>
<?php $__env->startSection('settings_content'); ?>
    <?php echo $__env->make('adminlte-templates::common.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="card">
        <div class="card-header">
            <ul class="nav nav-tabs align-items-end card-header-tabs w-100">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo route('permissions.index'); ?>"><i class="fa fa-list mr-2"></i><?php echo e(trans('lang.permission_table')); ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?php echo route('permissions.create'); ?>"><i class="fa fa-plus mr-2"></i><?php echo e(trans('lang.permission_create')); ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo route('roles.index'); ?>"><i class="fa fa-list mr-2"></i><?php echo e(trans('lang.role_table')); ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo route('roles.create'); ?>"><i class="fa fa-plus mr-2"></i><?php echo e(trans('lang.role_create')); ?></a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <?php echo Form::open(['route' => 'permissions.store']); ?>

            <div class="row">
                <?php echo $__env->make('settings.permissions.fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <?php echo Form::close(); ?>

            <div class="clearfix"></div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts_lib'); ?>
    <!-- iCheck -->
    <script src="<?php echo e(asset('plugins/iCheck/icheck.min.js')); ?>"></script>
    <!-- select2 -->
    <script src="<?php echo e(asset('plugins/select2/select2.min.js')); ?>"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?php echo e(asset('plugins/summernote/summernote-bs4.min.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.settings.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\multi-restaurants\resources\views/settings/permissions/create.blade.php ENDPATH**/ ?>