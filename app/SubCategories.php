<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Categories;
class SubCategories extends Model
{

    protected $table='sub_category';

    public function addCategory($mainCatId, $subCatName, $subCatDesc){
    	$newCategory = new SubCategories;
    	$newCategory->main_cat_id = $mainCatId;
    	$newCategory->sub_category_name = $subCatName;
    	$newCategory->sub_cat_description = $subCatDesc;
    	$newCategory->save();

    	return 'success';
    }
}
