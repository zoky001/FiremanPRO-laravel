<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_owner');
            $table->string('surname_owner');
            $table->integer('number_of_tenants');
            $table->integer('number_of_floors');
            $table->string('list_of_floors');
            $table->integer('number_of_children');
            $table->string('year_children');
            $table->integer('number_of_adults');
            $table->string('years_adults');
            $table->integer('number_of_powerless_and_elders');
            $table->string('years_powerless_elders');
            $table->boolean('disability_person');
            $table->string('power_supply');
            $table->boolean('gas_connection');
            $table->string('type_of_heating');
            $table->integer('number_of_gas_bottle');
            $table->string('type_of_roof');
            $table->integer('hydrant_distance');
            $table->boolean('high_risk_object');
            $table->string('HRO_type_of_roof');
            $table->boolean('HRO_power_supply');
            $table->string('HRO_content');

            $table->boolean('HRO_animals');
            $table->string('telNumber');
            $table->string('mobNumber');

  
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
        Schema::dropIfExists('houses');
    }
}
