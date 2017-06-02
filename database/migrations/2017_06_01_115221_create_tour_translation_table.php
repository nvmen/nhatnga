<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTourTranslationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour_translation', function (Blueprint $table) {
            $table->increments('id'); 
            $table->unsignedInteger('tour_id');            
            $table->string('name');
            $table->string('short_description')->nullable();
            $table->text('itinerary')->nullable();
            $table->text('description')->nullable();
            $table->string('currency_unit')->nullable();
            $table->decimal('children_price')->nullable();
            $table->decimal('adult_price')->nullable();
            $table->string('lang_code');
            $table->timestamps();
            
            $table->foreign('tour_id')->references('id')->on('tour')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tour_translation');
    }
}
