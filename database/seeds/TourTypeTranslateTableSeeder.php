<?php

use Illuminate\Database\Seeder;

class TourTypeTranslateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tour_type_translation')->delete();

        DB::table('tour_type_translation')->insert([
            'id' => 1,
            'tour_type_id' => 1,
            'name' => 'Tour nhiều ngày',
            'lang_code' => 'vi',

        ]);
        DB::table('tour_type_translation')->insert([
            'id' => 2,
            'tour_type_id' => 1,
            'name' => 'Long tour',
            'lang_code' => 'en',

        ]);

        DB::table('tour_type_translation')->insert([
            'id' => 3,
            'tour_type_id' => 2,
            'name' => 'Tour trong ngày',
            'lang_code' => 'vi',

        ]);
        DB::table('tour_type_translation')->insert([
            'id' => 4,
            'tour_type_id' => 2,
            'name' => 'Short tour',
            'lang_code' => 'en',

        ]);

        DB::table('tour_type_translation')->insert([
            'id' => 5,
            'tour_type_id' => 3,
            'name' => 'Tour ẩm thực',
            'lang_code' => 'vi',

        ]);
        DB::table('tour_type_translation')->insert([
            'id' => 6,
            'tour_type_id' => 3,
            'name' => 'Food tour',
            'lang_code' => 'en',

        ]);
    }
}
