<?php

use Illuminate\Database\Seeder;

class NewsCateTranslateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news_category_translation')->delete();

        DB::table('news_category_translation')->insert([
            'id' => 1,
            'name' => 'Chưa phân loại',
            'lang_code'=>'vi',
        ]);
        DB::table('news_category_translation')->insert([
            'id' => 2,
            'name' => 'uncategorized',
            'lang_code'=>'en',
        ]);
        DB::table('news_category_translation')->insert([
            'id' => 3,
            'name' => 'Khuyến Mải',
            'lang_code'=>'vi',
        ]);
        DB::table('news_category_translation')->insert([
            'id' => 4,
            'name' => 'Promotion',
            'lang_code'=>'en',
        ]);
    }
}
