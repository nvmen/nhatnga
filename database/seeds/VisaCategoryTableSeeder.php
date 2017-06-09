<?php

use Illuminate\Database\Seeder;

class VisaCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('visa_category')->delete();

        DB::table('visa_category')->insert([
            'id' => 1,
            'slug_url' => 'africa',
            'media_ids' => '1',
        ]);

        DB::table('visa_category')->insert([
            'id' => 2,
            'slug_url' => 'america',
            'media_ids' => '1',
        ]);
        DB::table('visa_category')->insert([
            'id' => 3,
            'slug_url' => 'asia',
            'media_ids' => '1',
        ]);
        DB::table('visa_category')->insert([
            'id' => 4,
            'slug_url' => 'australia',
            'media_ids' => '1',
        ]);
        DB::table('visa_category')->insert([
            'id' => 5,
            'slug_url' => 'europe',
            'media_ids' => '1',
        ]);       

    }
}
