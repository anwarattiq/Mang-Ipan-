@extends('layouts.app')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header content-header{{setting('fixed_header')}}">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{'Courier Packages'}}</h1>
                 </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">{{'Pacakge'}}</a></li>
                    <li class="breadcrumb-item active">{{'Courier Package Detail'}}</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

<div id="modalcourier" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <form method="POST" action="{{route('addpacakgeDetail')}}">
        {{csrf_field()}}
      <div class="modal-header" style="background: dodgerblue;">
           <h4 class="modal-title" style="color:white;">Add Courier Package</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
       
      </div>
      <div class="modal-body">
	  <label>Courier Type</label>
        <select onchange="funcSetBasePrice($(this).find(':selected').data('price'))" class="form-control" id="couriername" name="name" required="required" style="height: calc(3.25rem + 2px);margin-bottom:16px;">
			<option>--Select Courier Type --</option>
			@foreach($courier as $typ)
			<option data-price="{{$typ->base_price}}" value="{{$typ->id}}">{{$typ->name}}</option>
			@endforeach
		</select>
		<label>Base Price</label>
      <input class="form-control" id="base_price" placeholder="Enter Base price" name="base_price"  type="number" required="required" style="margin-bottom:6px;" readonly>
     <label>Package Name</label>
	 <input class="form-control" id="package_name" placeholder="Enter Package Name" name="package_name"  type="text" required="required" style="margin-bottom:6px;">
       <label>Frangible Charge</label>
	 <input class="form-control" onkeyup="setTotal($('#base_price').val(),$('#price_perkm').val())" id="frangible_charge" placeholder="Enter Frangible Charge" name="frangible_charge"  type="number" required="required" style="margin-bottom:6px;">
     <label>Price Per/km</label>
	 <input class="form-control" onkeyup="setTotal($('#base_price').val(),this.value)" id="price_perkm" placeholder="Enter price/Km" name="per_km_price"  type="number" required="required" style="margin-bottom:6px;">
      
	  <label>Max Item Size</label>
	 <input class="form-control" id="itemsize" placeholder="Enter Max Item size" name="max_item_size"  type="text" required="required" style="margin-bottom:6px;">
     <label>Max Delivery Time</label>
	 <input class="form-control" id="delivery_time" placeholder="Enter Max Delivery Time" name="time_on_delivery"  type="text" required="required" style="margin-bottom:6px;">
	<label>Total</label>
	<input class="form-control" id="total"  name="total_price"  type="number" required="required" style="margin-bottom:6px;" readonly>
	
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
              <table class="table table-condensed" id="">
    <thead>
      <tr>
        <th>#</th>
        <th>Pacakge Name</th>
        <th>Courier type</th>
        <th>Base Price</th>
		<th>Per/km Price</th>
		<th>Frangible charge</th>
		<th>Max item size</th>
		<th>Time on delivery</th>
		<th>Total price</th>
      </tr>
	  
	  
    </thead>
    <tbody>
	@foreach($packagesObj as $pkg)
        <tr>
		<td>{{$loop->iteration}}</td>
		<td>{{$pkg->package_name}}</td>
		<td>{{$pkg->name}}</td>
		<td>{{$pkg->base_price}}</td>
		<td>{{$pkg->per_km_price}}</td>
		<td>{{$pkg->frangible_charge}}</td>
		<td>{{$pkg->max_item_size}}</td>
		<td>{{$pkg->time_on_delivery}}</td>
		<td>{{$pkg->total_price}}</td>
		</tr>
	@endforeach		
            </tbody>
       </table>
            
        </div>
        
    </div> 
    <script>
	function funcSetBasePrice(price){
		$('#base_price').val(price);
	}
	function setTotal(baseprice,perkm){
		//alert(baseprice)
		var frangible_charge=$('#frangible_charge').val();
		var totalPrice=Number(baseprice)+Number(perkm)+Number(frangible_charge);
		$('#total').val(totalPrice);
	}
	</script>
@stop           