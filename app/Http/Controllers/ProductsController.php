<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\Categories;
use App\SubCategories;
use Response;
class ProductsController extends Controller
{
    public function __construct(){
    	$this->middleware('admin');
    }

    public function showAdminAddPage(){
    	$mainCategories = Categories::all();
    	$subCategories = SubCategories::all();
    	return view('cshopadmin.store_add_product')->with('mainCategories',$mainCategories)->with('subCategories',$subCategories);
    }
    public function addProduct(Request $request){

    }

    public function addTempImages(Request $request){

    	if($request->hasFile('prod_images')){
    		return $request->prod_images;
    	}
    	else {
    		return $request->all();
    	}
    }

}
