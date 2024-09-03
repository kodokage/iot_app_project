<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iot__devices', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("time");
            $table->float("soil_ph");
            $table->float("soil_temperature");
            $table->float("soil_moisture");
            $table->string("pump_status");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('iot__devices');
    }
};
