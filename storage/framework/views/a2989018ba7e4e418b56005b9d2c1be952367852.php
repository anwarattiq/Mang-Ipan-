<?php $__env->startPush('css_lib'); ?>
<?php echo $__env->make('layouts.datatables_css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>

<?php echo $dataTable->table(['width' => '100%']); ?>


<?php $__env->startPush('scripts_lib'); ?>
<?php echo $__env->make('layouts.datatables_js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $dataTable->scripts(); ?>

<?php $__env->stopPush(); ?><?php /**PATH C:\xampp\htdocs\rest\resources\views/payments/table.blade.php ENDPATH**/ ?>