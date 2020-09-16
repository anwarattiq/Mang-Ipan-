
<?php $__env->startSection('content'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.js"></script>
<script data-require="datatables@*" data-semver="1.10.12" src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.1.0/js/dataTables.responsive.js"></script>

<link href="//cdn.datatables.net/responsive/2.1.1/css/dataTables.responsive.css"/>
<link data-require="datatables@*" data-semver="1.10.12" rel="stylesheet" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" />
<link data-require="bootstrap@*" data-semver="4.0.5" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" />

    <!-- Content Header (Page header) -->
    <section class="content-header content-header<?php echo e(setting('fixed_header')); ?>">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?php echo e('Orders'); ?></h1>
                 </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#"><?php echo e('Orders'); ?></a></li>
                    <li class="breadcrumb-item active"><?php echo e('Orders List'); ?></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
 <?php if(Session::has('success')): ?>
	 <div class="col-sm-5">
    <div class="alert alert-success" id="success">
        
            <?php echo e(Session::get('success')); ?>

            <?php session()->forget('success');  ?>
        
    </div>
	</div>
    <?php endif; ?>
<div id="modalcourier" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <form method="POST" action="<?php echo e(route('addbasePrice')); ?>">
        <?php echo e(csrf_field()); ?>

      <div class="modal-header" style="background: dodgerblue;">
           <h4 class="modal-title" style="color:white;">Add Base Price</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
       
      </div>
      <div class="modal-body">
	  
 <label>Base Price</label>
		<input class="form-control" id="price" placeholder="Enter price" name="base_price"  type="number" required="required" style="margin-bottom:6px;">
       <!--  <div class="row">
          <div class="col-sm-6">
        <input type="password" placeholder="Enter old Password" class="form-control" name="oldpass">
      </div>
        <input type="password" placeholder="Enter new Password" class="form-control" name="resetpass">
        <input type="password" placeholder="Confirm Password" class="form-control" name="confirpassword">
      </div> -->
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" id="btnSub">Submit</button>
      </div>
    </form>
    </div>
</div>
  </div>
<!-- Main content -->
  <div> </div>
     <div class="content" style='margin-top: 5%;'>
        
        <!-- Small boxes (Stat box) -->
        <div class="row">
              <table class="table table-condensed" id="example">
    <thead>
      <tr>
        <th>Tracking number</th>
        <th>Courier Mode</th>
        <th>Courier Type</th>
		<th>Receiver Name</th>
		<th>Receiver Phone</th>
        <th>Distance</th>
        <th>Total Amount</th>
		<th>Description</th>
        <th>Fragile status</th>
		<th>Order Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $ordersObj; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><?php echo e($order->tracking_number); ?></td>
        <td><?php echo e($order->courier_mode); ?></td>
		<td><?php echo e($order->courier_type); ?></td>
        <td><?php echo e($order->receiver_name); ?></td>
		<td><?php echo e($order->receiver_phone); ?></td>
		<td><?php echo e($order->distance); ?>Km</td>        
		<td><?php echo e($order->total); ?></td>
        <td><?php echo e($order->description); ?></td>
		<td><?php if(is_null($order->fragile)): ?><?php echo e('Non Fragile'); ?><?php else: ?> Fragile <?php endif; ?></td>
        <td></td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
       </table>
            
        </div>
        
    </div> 
    <script>
	$("#success").fadeOut(3000);
	$(document).ready(function() {
	    
    $('#example').DataTable();
    
    });
	</script>
<?php $__env->stopSection(); ?>           
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/gadgetekbahamas/multi-restaurants.gadgetekbahamas.com/resources/views/courier/orders-list.blade.php ENDPATH**/ ?>