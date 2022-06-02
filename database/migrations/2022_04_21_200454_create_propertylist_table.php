<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertylistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propertylist', function (Blueprint $table) {
            $table->increments('idPropertyList');
            $table->string('Title',255)->nullable();
            $table->integer('countryId');
            $table->integer('stateId');
            $table->integer('Cityid');
            $table->integer('idPropertyType');
            $table->integer('idFeatures',255)->nullable(); 
            $table->integer('NumberOfBedrooms');
            $table->integer('NumberOfRooms');
            $table->integer('NumberOfBathroom');
            $table->string('Address',255);
            $table->string('AddressLat',15);
            $table->string('AddressLon',15);
            $table->longText('Description');
            $table->string('ShortLet',15);
            $table->string('LongLet',15);
            $table->decimal('ShortLetPrice',12,2)->unsigned();
            $table->decimal('LongLetPrice',12,2)->unsigned();
            $table->string('VideoLink',255);
            $table->integer('idUsers')->unsigned();
            $table->string('thumb',255)->nullable();   
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
        Schema::dropIfExists('propertylist');
    }
}
