<?php
use Illuminate\Database\Seeder;

/**
 * Created by PhpStorm.
 * User: MenNguyen
 * Date: 6/6/2017
 * Time: 10:33 PM
 */
class ServicesSeeder extends Seeder
{
    public function run()
    {
        DB::table('service')->delete();

        DB::table('service')->insert([
            'id' => 1,
            'slug_url' => 'translation',
            'media_ids' => '1',
        ]);

        DB::table('service')->insert([
            'id' => 2,
            'slug_url' => 'apec-card',
            'media_ids' => '1',
        ]);
        DB::table('service')->insert([
            'id' => 3,
            'slug_url' => 'work-permit',
            'media_ids' => '1',
        ]);
        DB::table('service')->insert([
            'id' => 4,
            'slug_url' => 'airline-ticket',
            'media_ids' => '1',
        ]);
        DB::table('service')->insert([
            'id' => 5,
            'slug_url' => 'visa-vietnam',
            'media_ids' => '1',
        ]);
        DB::table('service')->insert([
            'id' => 6,
            'slug_url' => 'others',
            'media_ids' => '1',
        ]);

    }

}