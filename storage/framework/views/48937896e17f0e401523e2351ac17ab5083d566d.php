<!-- Id Field -->
<div class="form-group row col-md-6 col-sm-12">
  <?php echo Form::label('id', trans('lang.order_id'), ['class' => 'col-3 control-label']); ?>

  <div class="col-9">
    <p>#<?php echo $order->id; ?></p>
  </div>

  <?php echo Form::label('order_client', trans('lang.order_client'), ['class' => 'col-3 control-label']); ?>

  <div class="col-9">
    <p><?php echo $order->user->name; ?></p>
  </div>

  <?php echo Form::label('order_client_phone', trans('lang.order_client_phone'), ['class' => 'col-3 control-label']); ?>

  <div class="col-9">
    <p><?php echo isset($order->user->custom_fields['phone']) ? $order->user->custom_fields['phone']['view'] : ""; ?></p>
  </div>

  <?php echo Form::label('delivery_address', trans('lang.delivery_address'), ['class' => 'col-3 control-label']); ?>

  <div class="col-9">
    <p><?php echo $order->deliveryAddress ? $order->deliveryAddress->address : ''; ?></p>
  </div>

  <?php echo Form::label('order_delivery_date', trans('lang.order_delivery_date'), ['class' => 'col-3 control-label']); ?>

  <div class="col-9">
    <p><?php echo $order->created_at; ?></p>
  </div>


</div>

<!-- Order Status Id Field -->
<div class="form-group row col-md-6 col-sm-12">
  <?php echo Form::label('order_status_id', trans('lang.order_status_status'), ['class' => 'col-3 control-label']); ?>

  <div class="col-9">
    <p><?php echo $order->orderStatus->status; ?></p>
  </div>

  <?php echo Form::label('payment_method', trans('lang.payment_method'), ['class' => 'col-3 control-label']); ?>

  <div class="col-9">
    <p><?php echo isset($order->payment) ? $order->payment->method : ''; ?></p>
  </div>

  <?php echo Form::label('payment_status', trans('lang.payment_status'), ['class' => 'col-3 control-label']); ?>

  <div class="col-9">
    <p><?php echo isset($order->status) ? $order->payment->status : trans('lang.order_not_paid'); ?></p>
  </div>

  <?php echo Form::label('hint', 'Hint:', ['class' => 'col-3 control-label']); ?>

  <div class="col-9">
    <p><?php echo $order->hint; ?></p>
  </div>

</div>










<?php /**PATH C:\xampp\htdocs\multi-restaurants\resources\views/orders/show_fields.blade.php ENDPATH**/ ?>