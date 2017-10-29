<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductProperties extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('product_properties', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id');
            $table->string('size');
            $table->string('weight');
            $table->string('color');
            $table->string('type');
            $table->string('box_content');
            $table->string('number_of_pieces');
            $table->string('warranty');
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
        Schema::dropIfExists('product_properties');
    }
}
