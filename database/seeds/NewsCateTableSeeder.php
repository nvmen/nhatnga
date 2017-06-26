<?php

use Illuminate\Database\Seeder;

class NewsCateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news_category')->delete();

        DB::table('news_category')->insert([
            'id' => 1,
            'slug_url' => 'uncategorized',
        ]);
        DB::table('news_category')->insert([
            'id' => 2,
            'slug_url' => 'promotion',
        ]);
    }
}
