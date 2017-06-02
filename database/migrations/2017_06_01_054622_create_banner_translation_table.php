<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBannerTranslationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banner_translation', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('banner_id');
            $table->string('title')->nullable();
            $table->string('lang_code');
            $table->string('sub_title')->nullable();
            $table->string('link')->nullable();;
            $table->string('link_text')->nullable();;
            $table->timestamps();
            
            $table->foreign('banner_id')->references('id')->on('banner')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('banner_translation');
    }
}
