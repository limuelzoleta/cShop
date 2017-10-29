<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\SubCategories;
class Categories extends Model
{
    

    protected $table = 'main_category';

    public function addCategory($categoryName, $description){
    	$category = new Categories();
    	$category->category_name = $categoryName;
    	$category->description = $description;
    	$category->save();

        return 'success';
    }
}
