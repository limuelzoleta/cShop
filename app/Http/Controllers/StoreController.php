<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
class StoreController extends Controller
{
    //
    public function __construct(){
    	$this->middleware('admin');
    }

    public function showStoreRecords(){
    	$products = Products::all();
    	return view('cshopadmin.store_home')->with('products',$products);
    }
}
