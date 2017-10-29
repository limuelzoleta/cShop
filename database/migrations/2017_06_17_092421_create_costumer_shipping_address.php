<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCostumerShippingAddress extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('shipping_info', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('s_full_name');
            $table->integer('s_country_id');
            $table->integer('s_state_id');
            $table->integer('s_city_id');
            $table->string('s_postal_code');
            $table->string('s_address_1')->nullable(false)->change();
            $table->string('s_address_2');
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
        Schema::dropIfExists('shipping_info');
    }
}
