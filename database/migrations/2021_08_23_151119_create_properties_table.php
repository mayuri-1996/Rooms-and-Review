<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id');
            $table->string('property_title')->nullable();
            $table->string('property_status')->nullable();
            $table->string('property_type_id')->nullable();
            $table->string('property_price')->nullable();
            $table->string('property_area')->nullable();
            $table->string('no_of_bedrooms')->nullable();
            $table->string('no_of_bathrooms')->nullable();
            $table->string('building_age')->nullable();
            $table->string('no_of_garage')->nullable();
            $table->text('detailed_info')->nullable();
            $table->int('is_active')->default('0');
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
        Schema::dropIfExists('properties');
    }
}
