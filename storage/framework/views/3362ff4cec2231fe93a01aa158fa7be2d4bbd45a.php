<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-<?php echo e(setting('theme_contrast')); ?>-<?php echo e(setting('theme_color')); ?> elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo e(url('dashboard')); ?>" class="brand-link <?php echo e(setting('logo_bg_color','bg-white')); ?>">
        <img src="<?php echo e($app_logo); ?>" alt="" class="brand-image">
        <span class="brand-text font-weight-light"><?php echo e(setting('app_name')); ?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <?php echo $__env->make('layouts.menu',['icons'=>true], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
<?php /**PATH C:\xampp\htdocs\rest\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>