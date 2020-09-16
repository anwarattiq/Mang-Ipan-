@extends('layouts.app')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header content-header{{setting('fixed_header')}}">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{'Base Price'}}</h1>
                 </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">{{'Base Price'}}</a></li>
                    <li class="breadcrumb-item active">{{'Base Price'}}</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
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
      <form method="POST" action="{{route('addbasePrice')}}">
        {{csrf_field()}}
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
  <div> <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modalcourier" style="float: right;">Add</button></div>
     <div class="content" style='margin-top: 5%;'>
        
        <!-- Small boxes (Stat box) -->
        <div class="row">
              <table class="table table-condensed">
    <thead>
      <tr>
        <th>#</th>
        <th>Price</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($courier as $typ)
      <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$typ->base_price}}</td>
        <td><button class='btn btn-info'>Edit</button></button></td>
      </tr>
      @endforeach
            </tbody>
       </table>
            
        </div>
        
    </div> 
    <script>
	$("#success").fadeOut(3000);
	</script>
@stop           