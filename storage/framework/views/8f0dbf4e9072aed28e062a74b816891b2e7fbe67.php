<?php $__env->startSection('content'); ?>
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark"><?php echo e(trans('lang.order_plural')); ?> <small><?php echo e(trans('lang.order_desc')); ?></small></h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?php echo e(url('/dashboard')); ?>"><i class="fa fa-dashboard"></i> <?php echo e(trans('lang.dashboard')); ?></a></li>
          <li class="breadcrumb-item"><a href="<?php echo route('orders.index'); ?>"><?php echo e(trans('lang.order_plural')); ?></a>
          </li>
          <li class="breadcrumb-item active"><?php echo e(trans('lang.order')); ?></li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<div class="content">
  <div class="card">
    <div class="card-header d-print-none">
      <ul class="nav nav-tabs align-items-end card-header-tabs w-100">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo route('orders.index'); ?>"><i class="fa fa-list mr-2"></i><?php echo e(trans('lang.order_table')); ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="<?php echo url()->current(); ?>"><i class="fa fa-plus mr-2"></i><?php echo e(trans('lang.order')); ?></a>
        </li>
        <div class="ml-auto d-inline-flex">
          <li class="nav-item">
            <a class="nav-link pt-1" id="printOrder" href="#"><i class="fa fa-print"></i> <?php echo e(trans('lang.print')); ?></a>
          </li>
        </div>
      </ul>
    </div>
    <div class="card-body">
      <div class="row">
        <?php echo $__env->make('orders.show_fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </div>
      <?php echo $__env->make('food_orders.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <div class="row">
      <div class="col-5 offset-7">
        <div class="table-responsive table-light">
          <table class="table">
            <tbody><tr>
              <th class="text-right"><?php echo e(trans('lang.order_subtotal')); ?></th>
              <td><?php echo getPrice($subtotal); ?></td>
            </tr>
            <tr>
              <th class="text-right"><?php echo e(trans('lang.order_tax')); ?> (<?php echo $order->tax; ?>%) </th>
              <td><?php echo getPrice($subtotal * $order->tax/100); ?></td>
            </tr>
            <tr>
              <th class="text-right"><?php echo e(trans('lang.order_delivery_fee')); ?></th>
              <td><?php echo getPrice($order['delivery_fee']); ?></td>
            </tr>

            <tr>
              <th class="text-right"><?php echo e(trans('lang.order_total')); ?></th>
              <td><?php echo getPrice($total); ?></td>
            </tr>
            </tbody></table>
        </div>
      </div>
      </div>
      <div class="clearfix"></div>
      <div class="row d-print-none">
        <!-- Back Field -->
        <div class="form-group col-12 text-right">
          <a href="<?php echo route('orders.index'); ?>" class="btn btn-default"><i class="fa fa-undo"></i> <?php echo e(trans('lang.back')); ?></a>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
  <script type="text/javascript">
    $("#printOrder").on("click",function () {
      window.print();
    });
  </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\multi-restaurants\resources\views/orders/show.blade.php ENDPATH**/ ?>