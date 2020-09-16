@extends('layouts.app')
@section('content')
<<<<<<< HEAD

=======
>>>>>>> c7201dd02bf8533373bef6c2d8f2f6b0e3f8240e
    <!-- Content Header (Page header) -->
    <section class="content-header content-header{{setting('fixed_header')}}">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
<<<<<<< HEAD
                    <h1>{{'Courier Types'}}</h1>
                 </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">{{'Courier'}}</a></li>
                    <li class="breadcrumb-item active">{{'Courier Types'}}</li>
=======
                    <h1>{{trans('lang.dashboard')}}</h1>
                 </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">{{trans('lang.dashboard')}}</a></li>
                    <li class="breadcrumb-item active">{{trans('lang.dashboard')}}</li>
>>>>>>> c7201dd02bf8533373bef6c2d8f2f6b0e3f8240e
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
<<<<<<< HEAD
@if(Session::has('success'))
	 <div class="col-sm-5">
    <div class="alert alert-success" id="success">
        
            {{ Session::get('success') }}
            @php session()->forget('success');  @endphp
        
    </div>
	</div>
    @endif
<div id="modalcourier" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <form method="POST" action="{{route('addcourierType')}}">
        {{csrf_field()}}
      <div class="modal-header" style="background: dodgerblue;">
           <h4 class="modal-title" style="color:white;">Add Courier type</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
       
      </div>
      <div class="modal-body">
	   <label>Courier Name</label>
        <input class="form-control" id="borrowername" placeholder="Enter courier type" name="name"  type="text" required="required" style="margin-bottom:6px;">
  
 <label>Courier Price</label>
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
  <div> <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modalcourier" style="float: right;">Add</button></div>
     <div class="content" style='margin-top: 5%;'>
        
        <!-- Small boxes (Stat box) -->
        <div class="row">
              <table class="table table-condensed">
    <thead>
      <tr>
        <th>#</th>
        <th>Courier Type</th>
        <th>Price</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($courier as $typ)
      <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$typ->name}}</td>
        <td>{{$typ->base_price}}</td>
        <td><button class='btn btn-danger'><i class='fa fa-trash'></i></button></button></td>
      </tr>
      @endforeach
            </tbody>
       </table>
            
        </div>
        
    </div> 
    <script>
	$("#success").fadeOut(3000);
	</script>
=======

     <div class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-6">
g
            </div>
        </div>
        
    </div> 
    
>>>>>>> c7201dd02bf8533373bef6c2d8f2f6b0e3f8240e
@stop           