<?php

use Illuminate\Database\Seeder;

class MediaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('media')->delete();

        DB::table('media')->insert([
            'id' => 1,
            'name' => 'nhatnga-logo.png',
            'uuid_name' => '65-nhat-nga-1496813840.PNG',
            'album' => '06-2017',
            'size' => '1234',
        ]);
    }
}
