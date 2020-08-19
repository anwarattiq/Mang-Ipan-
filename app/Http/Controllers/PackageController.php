<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use DB;
class PackageController extends Controller {
 
  public function __construct() {
      //$this->middleware('auth');
  }

  public function indexCourier()
  {
  	//dd(3);
  	return view('courier.index');
  }

}