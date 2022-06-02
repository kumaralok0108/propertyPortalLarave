<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountryStateCityTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('country_state_city_tables', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        // });
        Schema::create('countries', function (Blueprint $table) {
            $table->increments('countryId');
            $table->string('CountryName');
            $table->integer('CountryStatus');
            $table->timestamps();
        });
        Schema::create('states', function (Blueprint $table) {
            $table->increments('stateId');
            $table->string('StateName');
            $table->integer('countryId');
            $table->integer('StateStatus');            
            $table->timestamps();
        });
        Schema::create('cities', function (Blueprint $table) {
            $table->increments('Cityid');
            $table->string('CityName');
            $table->integer('stateId');
            $table->integer('CityStatus');            
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
        //Schema::dropIfExists('country_state_city_tables');
        Schema::drop('countries');
        Schema::drop('states');
        Schema::drop('cities');
    }
}
