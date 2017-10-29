<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;
use App\SubCategories;
use Response;
class CategoriesController extends Controller
{
    
    public function __construct(){
    	$this->middleware('admin', ['only'=>['addMainCategory', 'addSubCategory']]);
    }

    public function addMainCategory(Request $request){
        // $data['category_name'] = Input::get('category_name');
        // $data['category_desc'] = Input::get('category_desc');
        // $data = $request->all();
    	$this->validate($request, [
    		'category_name' => 'required',
    	]);
        $response = array('status'=>'fail');

	    $newCategory = new Categories;
		$saveCategory = $newCategory->addCategory($request['category_name'],$request['category_desc']);
        if($saveCategory == 'success'){
            $response = array(
                'status'=>'success',
                'categories' => Categories::all(),
            );
        }

        return Response::json($response);
    }

    public function addSubCategory(Request $request){
    	$this->validate($request, [
    		'main_cat_id' => 'required|integer',
    		'sub_category_name' => 'required'
    	]);
        
        $response = array('status'=>'fail');

        $newCategory = new SubCategories;
        $saveCategory = $newCategory->addCategory($request['main_cat_id'], $request['sub_category_name'],$request['sub_category_desc']);
        if($saveCategory == 'success'){
            $response = array(
                'status'=>'success',
                'categories' => Categories::all(),
            );
        }

        return Response::json($response);

    }
    
}
