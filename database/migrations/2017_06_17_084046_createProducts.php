<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Creates table for products
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product_code');
            $table->string('product_name');
            $table->text('product_desc');
            $table->string('product_image');
            $table->float('orig_price');
            $table->float('special_price');
            $table->integer('quantity');
            $table->integer('main_cat_id');
            $table->integer('sub_cat_id')->default(null);
            $table->boolean('is_new')->default(1);
            $table->boolean('is_featured');
            $table->boolean('is_deleted')->default(0);
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
        // Drops products table
        Schema::dropIfExists('products');
    }
}
