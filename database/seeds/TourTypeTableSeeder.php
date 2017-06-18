<?php

use Illuminate\Database\Seeder;

class TourTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tour_type')->delete();

        DB::table('tour_type')->insert([
            'id' => 1,
            'slug_url' => 'long-tour',

        ]);
        DB::table('tour_type')->insert([
            'id' => 2,
            'slug_url' => 'short-tour',


        ]);
        DB::table('tour_type')->insert([
            'id' => 3,
            'slug_url' => 'food-tour',


        ]);
    }
}
