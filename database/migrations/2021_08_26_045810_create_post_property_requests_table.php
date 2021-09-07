<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostPropertyRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_property_requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id');
            $table->string('property_id')->nullable();
            $table->string('address');
            $table->string('is_agree')->default('1');
            $table->string('is_active')->default('0');
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
        Schema::dropIfExists('post_property_requests');
    }
}
