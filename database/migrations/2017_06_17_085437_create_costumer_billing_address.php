<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCostumerBillingAddress extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('billing_info', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('full_name');
            $table->integer('country_id');
            $table->integer('state_id');
            $table->integer('city_id');
            $table->string('postal_code');
            $table->string('address_1')->nullable(false)->change();
            $table->string('address_2');
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
        Schema::dropIfExists('billing_info');
    }
}
