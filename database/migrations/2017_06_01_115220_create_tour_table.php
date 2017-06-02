<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTourTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code')->nullable();
            $table->string('friendly_url')->nullable();;
            $table->unsignedInteger('tour_type');
            $table->boolean('is_sale')->default(0);
            $table->boolean('is_outbound')->default(0);
            $table->boolean('is_publish')->default(1);
            $table->double('discount_percent')->default(0);
            $table->double('rating')->default(4);
            $table->string('media_ids')->nullable();
            $table->timestamps();
            $table->foreign('tour_type')->references('id')->on('tour_type')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tour');
    }
}
