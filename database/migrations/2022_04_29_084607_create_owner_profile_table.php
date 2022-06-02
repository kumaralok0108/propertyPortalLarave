<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOwnerProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('owner_profile', function (Blueprint $table) {
       
            $table->increments('idOwner');
            $table->string('first_name',255);
            $table->string('last_name',255);
            $table->integer('home_phone_code');
            $table->integer('home_phone');
            $table->integer('mobile_no_code');
            $table->integer('mobile_no');
            $table->integer('office_phone_code');
            $table->integer('office_phone');
            $table->string('address',255);
            $table->string('email',255);
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
        Schema::dropIfExists('owner_profile');
    }
}
