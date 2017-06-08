<?php

use Illuminate\Database\Seeder;

class VisaCategoryTranslationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('visa_category_translation')->delete();

        DB::table('visa_category_translation')->insert([
            'visa_category_id' => 1,
            'name' => 'Châu Phi',
            'lang_code' => 'vi',
        ]);

        DB::table('visa_category_translation')->insert([
            'visa_category_id' => 1,
            'name' => 'Africa',
            'lang_code' => 'en',
        ]);


        DB::table('visa_category_translation')->insert([

            'visa_category_id' => 2,
            'name' => 'Châu Mỹ',
            'lang_code' => 'vi',
        ]);

        DB::table('visa_category_translation')->insert([
            'visa_category_id' => 2,
            'name' => 'America',
            'lang_code' => 'en',
        ]);

        DB::table('visa_category_translation')->insert([

            'visa_category_id' => 3,
            'name' => 'Châu Á',
            'lang_code' => 'vi',
        ]);

        DB::table('visa_category_translation')->insert([
            'visa_category_id' => 3,
            'name' => 'Asia',
            'lang_code' => 'en',
        ]);

        DB::table('visa_category_translation')->insert([

            'visa_category_id' => 4,
            'name' => 'Châu Úc',
            'lang_code' => 'vi',
        ]);

        DB::table('visa_category_translation')->insert([
            'visa_category_id' => 4,
            'name' => 'Australia',
            'lang_code' => 'en',
        ]);

        DB::table('visa_category_translation')->insert([

            'visa_category_id' => 5,
            'name' => 'Châu Âu',
            'lang_code' => 'vi',
        ]);

        DB::table('visa_category_translation')->insert([
            'visa_category_id' => 5,
            'name' => 'Europe',
            'lang_code' => 'en',
        ]);

    }
}
