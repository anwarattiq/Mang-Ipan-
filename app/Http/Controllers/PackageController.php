<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Redirect,Response,DB,Config;
class PackageController extends Controller {

  public function __construct() {
      //$this->middleware('auth');
  }

  public function indexCourier()
  {
  	$courier=DB::table('courier_types')->get();
  	return view('courier.index',compact('courier'));
  }
  public function addcourierType(Request $request){
     DB::table('courier_types')->insert([
         'name'=>$request->get('name'),
         'base_price'=>$request->get('base_price'),
     
     ]);
     return redirect()->back()->with(['success'=>'Successfuly added!']);
  }
   public function courierMode()
  {
  	$courier=DB::table('courier_modes')->get();
  	return view('courier.courier-modes',compact('courier'));
  }
  public function addcourierMode(Request $request){
     DB::table('courier_modes')->insert([
         'name'=>$request->get('name'),
         'base_price'=>$request->get('base_price'),
		 'detail'=>$request->get('detail'),
     
     ]);
     return redirect()->back()->with(['success'=>'Successfuly added!']);
  }
  
    public function basePrice()
  {
  	$courier=DB::table('base_prices')->get();
  	return view('courier.base-price',compact('courier'));
  }
  public function addbasePrice(Request $request){
     DB::table('base_prices')->insert([
         'base_price'=>$request->get('base_price'),
     ]);
     return redirect()->back()->with(['success'=>'Successfuly added!']);
  }
    public function PerkmPrice()
  {
  	$courier=DB::table('perkm_charges')->get();
  	return view('courier.perkm-charges',compact('courier'));
  }
  public function addPerkmPrice(Request $request){
     DB::table('perkm_charges')->insert([
         'perkm_charge'=>$request->get('base_price'),
     ]);
     return redirect()->back()->with(['success'=>'Successfuly added!']);
  }
    public function fragilePrice()
  {
  	$courier=DB::table('fragile_charges')->get();
  	return view('courier.fragile-charge',compact('courier'));
  }
  public function addFragilePrice(Request $request){
     DB::table('fragile_charges')->insert([
         'fragile_charge'=>$request->get('base_price'),
     ]);
     return redirect()->back()->with(['success'=>'Successfuly added!']);
  }
  
  public function pacakgeDetail()
  { 
  	$courier=DB::table('courier_types')->get();
	$packagesObj=DB::table('courier_packages')->select('courier_packages.*','courier_types.name')
	->join('courier_types','courier_types.id','=','courier_packages.courier_id')
	->get();
  	return view('courier.package-detail',compact('courier','packagesObj')); 
  }
  
  public function addpacakgeDetail(Request $request)
  {  
     DB::table('courier_packages')->insert([
         'courier_id'=>$request->get('id'),
         'package_name'=>$request->get('package_name'),
		  'base_price'=>$request->get('base_price'),
         'per_km_price'=>$request->get('per_km_price'),
		 'max_item_size'=>$request->get('max_item_size'),
         'time_on_delivery'=>$request->get('time_on_delivery'),
		  'frangible_charge'=>$request->get('frangible_charge'),
         'total_price'=>$request->get('total_price'),
     
     ]);
	  return redirect()->back()->with(['success'=>'Successfuly added!']);
  	//$courier=DB::table('courier_types')->get();
  	//return view('courier.package-detail',compact('courier'));
  }
  public function ordersList(){
	  $ordersObj=DB::table('orders_book')->get();
	  return view('courier.orders-list',compact('ordersObj'));
  }

}
