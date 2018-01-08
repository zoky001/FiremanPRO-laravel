<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrucksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trucks', function (Blueprint $table) {
            $table->increments('id');
            $table -> string('name');
            
            $table -> integer('type_of_trucks_id');
            $table -> integer('fireman_patrols_id');
            //$table->foreign('type_of_trucks_id')->references('id')->on('type_of_trucks');
          //  $table->foreign('fireman_patrols_id')->references('id')->on('fireman_patrols')->onDelete('cascade');
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
        Schema::dropIfExists('trucks');
    }
}
