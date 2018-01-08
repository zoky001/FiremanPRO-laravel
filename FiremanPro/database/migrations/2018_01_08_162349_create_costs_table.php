<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
    
    public function up()
    {
        Schema::create('costs', function (Blueprint $table) {
            $table->increments('id');
             $table->integer('fireman_patrol_id');
            $table->double('apsorbent');
            $table->double('automatic_Ladder');
            $table->double('co2');
            $table->double('command_Vehicle');
            $table->double('fire_extinguisher');
            $table->double('fire_fighter');
            $table->double('foam');
            $table->double('insurance');
            $table->double('naval_vehicle');
            $table->double('power_pump_clock');
            $table->double('road_tankers');
            $table->double('special_vehicle');
            $table->double('tehnical_vehicle');
               $table->double('transportation_vehicle');
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
        Schema::dropIfExists('costs');
    }
}
