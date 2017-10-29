<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //        
        Schema::create('sub_category', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sub_category_name');
            $table->string('sub_cat_description');
            $table->string('main_cat_id');
            $table->boolean('is_active')->defualt(1);
            $table->boolean('is_menu')->default(1);
            $table->boolean('is_main_menu')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('sub_category');
    }
}
