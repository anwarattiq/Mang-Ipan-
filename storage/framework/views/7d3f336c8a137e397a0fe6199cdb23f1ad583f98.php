
<?php $__env->startSection('content'); ?>

    <!-- Content Header (Page header) -->
    <section class="content-header content-header<?php echo e(setting('fixed_header')); ?>">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?php echo e('Courier Mode'); ?></h1>
                 </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#"><?php echo e('Courier'); ?></a></li>
                    <li class="breadcrumb-item active"><?php echo e('Courier Mode'); ?></li>
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
      <form method="POST" action="<?php echo e(route('addcourierMode')); ?>">
        <?php echo e(csrf_field()); ?>

      <div class="modal-header" style="background: dodgerblue;">
           <h4 class="modal-title" style="color:white;">Add Courier Mode</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
       
      </div>
      <div class="modal-body">
	   <label>Courier Name</label>
        <input class="form-control" id="borrowername" placeholder="Enter courier Mode" name="name"  type="text" required="required" style="margin-bottom:6px;">
  
 <label>Courier Price</label>
		<input class="form-control" id="price" placeholder="Enter price" name="base_price"  type="number" required="required" style="margin-bottom:6px;">
       <label>Detail</label>
		<textarea class="form-control" id="modesdetil" placeholder="Enter Detail" name="detail"  required="required" style="margin-bottom:6px;"></textarea>
    
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
  <div> <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modalcourier" style="float: right;">Add</button></div>
     <div class="content" style='margin-top: 5%;'>
        
        <!-- Small boxes (Stat box) -->
        <div class="row">
              <table class="table table-condensed">
    <thead>
      <tr>
        <th>#</th>
        <th>Courier Mode</th>
        <th>Price</th>
		 <th>Detail</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $courier; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $typ): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><?php echo e($loop->iteration); ?></td>
        <td><?php echo e($typ->name); ?></td>
        <td><?php echo e($typ->base_price); ?></td>
		<td><?php echo e($typ->detail); ?></td>
        <td><button class='btn btn-primary'>Edit</button></button></td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
       </table>
            
        </div>
        
    </div> 
   <script>
	$("#success").fadeOut(3000);
	</script> 
<?php $__env->stopSection(); ?>           
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/gadgetekbahamas/multi-restaurants.gadgetekbahamas.com/resources/views/courier/courier-modes.blade.php ENDPATH**/ ?>