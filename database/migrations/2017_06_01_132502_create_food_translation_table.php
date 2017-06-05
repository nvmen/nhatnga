<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodTranslationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_translation', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->longText('name');
            $table->text('content')->nullable();
            $table->unsignedInteger('food_id');
            $table->timestamps();
            $table->longText('lang_code');
            $table->foreign('food_id')->references('id')->on('place')->onDelete('cascade');
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
    }
}
