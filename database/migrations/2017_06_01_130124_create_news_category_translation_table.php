<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsCategoryTranslationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_category_translation', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->longText('name')->nullable();
            $table->timestamps();
            $table->unsignedInteger('cate_id');
            $table->string('lang_code');
            $table->foreign('cate_id')->references('id')->on('news_category')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news_category_translation');
    }
}
