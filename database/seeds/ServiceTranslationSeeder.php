<?php
use Illuminate\Database\Seeder;
/**
 * Created by PhpStorm.
 * User: MenNguyen
 * Date: 6/6/2017
 * Time: 10:42 PM
 */
class ServiceTranslationSeeder extends Seeder
{
    public function run()
    {
        DB::table('service_translation')->delete();

        DB::table('service_translation')->insert([
            'service_id' => 1,
            'name' => 'translation',
            'content' => 'content',
            'lang_code' => 'en',
        ]);
        DB::table('service_translation')->insert([

            'service_id' => 1,
            'name' => 'dich thuat',
            'content' => 'content',
            'lang_code' => 'vi',
        ]);


        DB::table('service_translation')->insert([
            'service_id' => 2,
            'name' => 'apec card',
            'content' => 'content',
            'lang_code' => 'en',
        ]);
        DB::table('service_translation')->insert([

            'service_id' => 2,
            'name' => 'the apec card',
            'content' => 'content',
            'lang_code' => 'vi',
        ]);

        DB::table('service_translation')->insert([
            'service_id' => 3,
            'name' => 'work-permit',
            'content' => 'content',
            'lang_code' => 'en',
        ]);
        DB::table('service_translation')->insert([

            'service_id' => 3,
            'name' => 'work-permit',
            'content' => 'content',
            'lang_code' => 'vi',
        ]);


        DB::table('service_translation')->insert([
            'service_id' => 4,
            'name' => 'airline-ticket',
            'content' => 'content',
            'lang_code' => 'en',
        ]);
        DB::table('service_translation')->insert([

            'service_id' => 4,
            'name' => 'airline-ticket',
            'content' => 'content',
            'lang_code' => 'vi',
        ]);


        DB::table('service_translation')->insert([
            'service_id' => 5,
            'name' => 'visa-vietnam',
            'content' => 'content',
            'lang_code' => 'en',
        ]);
        DB::table('service_translation')->insert([

            'service_id' => 5,
            'name' => 'visa-vietnam',
            'content' => 'content',
            'lang_code' => 'vi',
        ]);

        DB::table('service_translation')->insert([
            'service_id' =>6,
            'name' => 'others',
            'content' => 'content',
            'lang_code' => 'en',
        ]);
        DB::table('service_translation')->insert([

            'service_id' => 6,
            'name' => 'others',
            'content' => 'content',
            'lang_code' => 'vi',
        ]);

        DB::table('service_translation')->insert([
            'service_id' =>7,
            'name' => 'visa',
            'content' => 'content',
            'lang_code' => 'en',
        ]);
        DB::table('service_translation')->insert([

            'service_id' => 7,
            'name' => 'visa',
            'content' => 'content',
            'lang_code' => 'vi',
        ]);

        DB::table('service_translation')->insert([
            'service_id' =>8,
            'name' => 'tour',
            'content' => 'content',
            'lang_code' => 'en',
        ]);
        DB::table('service_translation')->insert([

            'service_id' => 8,
            'name' => 'tour',
            'content' => 'content',
            'lang_code' => 'vi',
        ]);


    }
}