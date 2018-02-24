<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PhotoPhototypeHouse extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('photo_phototype_house', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('house_id');
            $table->integer('photo_id');
            $table->integer('photo_type_id');
            $table->string('FileName');          
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
        //
         Schema::dropIfExists('photo_phototype_house');
    }
}
