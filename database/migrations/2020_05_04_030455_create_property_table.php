<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property', function (Blueprint $table) {
            $table->increments('property_id');
            $table->string('title');
            $table->string('property_type');
            $table->timestamps();
        });
        
        Schema::create('review', function(Blueprint $table) {
            $table->increments('review_id');
            $table->integer('property_id');
            $table->integer('rating');
            $table->string('comment')->default("");
            
            //$table->foreign('property_id')->references('property_id')->on('property');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('property');
        Schema::dropIfExists('review');
    }
}
