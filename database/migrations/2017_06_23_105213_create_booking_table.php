<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('book_id');
            $table->string('full_name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('tour_code')->nullable();
            $table->string('tour_name')->nullable();
            $table->unsignedInteger('number_adults')->nullable();
            $table->unsignedInteger('number_children')->nullable();
            $table->decimal('children_price',15, 2)->nullable();
            $table->decimal('adult_price',15, 2)->nullable();
            $table->double('discount_percent')->default(0);
            $table->double('total_money')->default(0);
            $table->string('total_money_text')->default(0);
            $table->date('date')->nullable();
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
    }
}
