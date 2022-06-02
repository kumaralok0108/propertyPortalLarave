<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataImagessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_imagess', function (Blueprint $table) {
            $table->increments('idImages');
            $table->integer('idPropertyList')->nullable();;
            $table->string('Images_Name')->nullable();;
            $table->string('Images_Path')->nullable();;
            $table->string('Images')->nullable();;
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
        Schema::dropIfExists('data_imagess');
    }
}
