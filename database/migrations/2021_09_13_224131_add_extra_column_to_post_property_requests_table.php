<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddExtraColumnToPostPropertyRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('post_property_requests', function (Blueprint $table) {
            $table->string('alt_phone')->after('property_id');
            $table->string('country')->after('alt_phone');
            $table->string('state')->after('country');
            $table->string('city')->after('state');
            $table->string('land_mark')->after('city');
            $table->string('front_image')->after('address');
            $table->string('room_image')->after('front_image');
            $table->string('room_video')->after('room_image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('post_property_requests', function (Blueprint $table) {
            //
        });
    }
}
